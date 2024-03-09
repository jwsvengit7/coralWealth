<?php
require_once __DIR__ . "/../mail/Mail.php";

class AuthService{
    private $conn;
    public function __construct($conn){
        $this->conn=$conn;

    }

    public function validateUser($email){
     
        $validate=$this->checkIfEmail($email);
        if($validate->num_rows > 0){
   
            $fetchUser = $validate->fetch_assoc();
            $status = $fetchUser['status'];

            return $status=="false" ?  "User Needs to Activate Account":"User Already Exists" ;
        }else{
            return "User Not Found";
        }
        
    }

    private function expiredDate($timestamp){
        $currentTimestamp = time();

        $timeDifference = $currentTimestamp - $timestamp;
        return $timeDifference;

    
    }

    private function checkIfEmail($email){
        $stmt = $this->conn->prepare("SELECT * FROM signup WHERE email = ?");
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $validate = $stmt->get_result();

     return $validate;
 }
 public function validateUserId($userId){
     $stmt = $this->conn->prepare("SELECT * FROM signup WHERE id = ?");
     $stmt->bind_param("s", $userId);
     $stmt->execute();
     $validate = $stmt->get_result();

         return $validate->num_rows > 0 ? "Enabled" : "User Not Found";
     
 }

 public function register($user) {
    $time = time();
    $email = $user['email'];
    $username = $user['username'];
    $password = password_hash($user['password'], PASSWORD_DEFAULT);
    
    // Check if the user already exists
    if ($this->checkIfEmail($email)->num_rows > 0) {
        return "User Already Exists";
    }
    

    
    $unique = $username . "__"  . substr(md5(uniqid(true)), 0, 6);
    $myownreferrerID = "https://" . $_SERVER["SERVER_NAME"] . "/" . $unique;
    
    $mail = new Mail($email);
    $mail->sendEmailOtp(); 
    $otp = $mail->getContent();
    
    $insert = $this->conn->prepare("INSERT INTO signup(email, username, password, otp, date, myownreferrerID,unique_ID, status, role, profile) VALUES (?, ?, ?, ?, ?, ?,?, 'false', 'USER', 'http://localhost/coralWealth/img/profile.jpeg')");
    $insert->bind_param("sssssss", $email, $username, $password, $otp, $time, $myownreferrerID,$unique);
    $insert->execute();
    
    if ($insert->affected_rows > 0) {
        $_SESSION['otp-email']=$email;
        return "OTP Have been sent to  $email";
           
    } else {
        return "Error"; 
    }
}


public function login($email,$password){

 $stmt = $this->conn->prepare("SELECT * FROM signup WHERE email = ?  LIMIT 1");
 $stmt->bind_param("s", $email); 
 $stmt->execute();
 $validate = $stmt->get_result();

 if($validate->num_rows > 0){
     $fetchUser = $validate->fetch_assoc(); 
     $hashed_password = $fetchUser['password']; 

     if(password_verify($password, $hashed_password)){
         $status = $fetchUser['status'];

         if($status == "false"){
             return "User Needs to Activate Their Account";
         }else{
           
           $status=  $this->generateToken($fetchUser['id']);
         if($status){
            $data =$this->mappbyResponse($email);
            $_SESSION['token']= $data['token'];
            $_SESSION['login-email']= $data['email'];
         return "Login Succesfully";
         }else{
             return "Error";
         }

         }
     } else {
         return "Incorrect Password";
     }
 } else {
     return "User Not Found";
 }
}
public function mappbyResponse($email){
  $stmt=$this->conn->prepare("SELECT * FROM signup WHERE email=?");
  $stmt->bind_param("s", $email); 
  $stmt->execute();
  $validate = $stmt->get_result();
  $fetchUser = $validate->fetch_assoc();
 
 $result=array();

 $result['userid'] = $fetchUser['id'];
 $result['username'] = $fetchUser['username'];
 $result['email'] = $fetchUser['email'];
 $result['role'] = $fetchUser['role'];
 $result['token'] = $fetchUser['token'];
 $result['myownreferrerID']=$fetchUser['myownreferrerID'];
 $result['phone'] = $fetchUser['phone'];
 $result['image'] = $fetchUser['profile'];
 $result['badge_status']=$fetchUser['badge_status'];
 return $result;
}

 public function validateEmail($email){
    $stmt = $this->conn->prepare("SELECT * FROM signup WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $validate = $stmt->get_result();
    $fetchUser = $validate->fetch_assoc();
    $timestamp=$fetchUser['isLogin'];

    $hashPassword=$fetchUser['password'];
    $timeDifference= $this->expiredDate($timestamp);
    if($timeDifference < 3888000){
        return true;

    }else{
        $removeToken=$this->conn->prepare("UPDATE signup SET token='',isLogin='' WHERE email=?");
        $removeToken->bind_param("s",$email);
        $removeToken->execute();
        $validate = $removeToken->get_result();
        return false;

    }
 }

 public function validateOtp($email, $otp){
    $stmt = $this->conn->prepare("SELECT * FROM signup WHERE email = ? and otp = ?");
    $stmt->bind_param("ss", $email, $otp);
    $stmt->execute();
    $validate = $stmt->get_result();

    if($validate->num_rows > 0){
        $fetchUser = $validate->fetch_assoc();
        $timestamp = $fetchUser['date'];
        $status = $fetchUser['status'];
        $timeDifference= $this->expiredDate($timestamp);
        if($status=="true"){
            return "User Already Activated";

        }

        else if($timeDifference > 240){  
            return "OTP Have Expired";
        } else {
            $update = $this->conn->prepare("UPDATE signup SET status='true' WHERE email=?");
            $update->bind_param("s", $email);
            $update->execute();
            if($update->affected_rows > 0){
                session_unset();
          return  "User Verify Successfully";
            }else{
                return "User Update Failed: " . $this->conn->error;
            }
        }
    } else {
        return "User & OTP Credentials Error";
    }
}

 private function generateToken($id){
    $token = md5(uniqid(true)).md5(uniqid(true));
    $time=time();
    $updateUser = $this->conn->prepare("UPDATE signup SET token=?,isLogin=? WHERE id=?");
    $updateUser->bind_param("sss", $token,$time, $id);
    $updateUser->execute();

    return ($updateUser->affected_rows > 0);
}

public function validatePasswordChange($email,$otp,$password){
        $validate=$this->checkIfEmail($email);
    if($validate->num_rows > 0){

       $fetchUser = $validate->fetch_assoc();
        $timestamp = $fetchUser['forget_password_time'];
           $pin = $fetchUser['forget_password'];
        $timeDifference= $this->expiredDate($timestamp);

        if($timeDifference > 240){  
            return "OTP Have Expired";
        }
        else if($pin!=$otp){
               return "OTP Does Not Match";
        }
        
        else{
          $stmt = $this->conn->prepare("UPDATE signup SET password='$password' WHERE email=?");
             $stmt->bind_param("s", $email);
    $stmt->execute();
    return "Password Change Successfully";
        }
          
      }else{
          return "User not found";
      }
    
}

public function sendForgetPassword($email){
    $stmt = $this->conn->prepare("SELECT * FROM signup WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
    
  $validate = $stmt->get_result();

  if ($validate->num_rows >0) {
  $otp = $this->sendPassword($email);
    $time = time();

      $updateUser = $this->conn->prepare("UPDATE signup SET forget_password=?, forget_password_time=? WHERE email=?");
      $updateUser->bind_param("sss", $otp, $time, $email);
      if (!$updateUser->execute()) {
          return "Failed to update user";
      }

      return "OTP Have been sent to change your password";
  } else { 
      return "User Not Found";
  }
}
}

?>