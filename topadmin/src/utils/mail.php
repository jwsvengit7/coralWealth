<?php
// require "../mail/Mail.php";
class MailUtils{
    private $email;
    public function __construct($email){
        $this->email=$email;

    }
    public function sendMail(){
        // $auth = new Mail($this->email);
        // $auth->sendEmailOtp(); 
        // return $auth->getContent(); 
    }
    public function sendPassword(){
        //  $auth = new Mail($this->$email);
        //  $auth->sendEmailPassword();
        // return $auth->getContent();
        
    }
}
?>