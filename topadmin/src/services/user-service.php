<?php
require_once __DIR__ . "/../mail/Mail.php";

class UserService{
    private $conn;
    public function __construct($conn){
        $this->conn=$conn;

    }

    public function getBalance($userId) {
        $stmt = $this->conn->prepare("SELECT amount FROM balance WHERE userid = ?");
        $stmt->bind_param("s", $userId);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return array("amount"=> $row['amount'],"interestAmount"=> $row['interest_balance']);
        } else {
            return array("amount"=> 0,"interestAmount"=> 0);
        }
    }
    

    public function viewBage() {
        $stmt = $this->conn->prepare("SELECT * FROM badge ");
        $rows = $this->resultset($stmt);
       return $rows;
        
    }

    public function totalInvestment() {
        $stmt = $this->conn->prepare("SELECT * FROM Invest ");
        $rows = $this->resultset($stmt);
       return $rows;
        
    }
    public function totalInvestmentRunning($status) {
        $stmt = $this->conn->prepare("SELECT * FROM Invest  WHERE status=?");
        $stmt->bind_param("s", $status);
        $rows = $this->resultset($stmt);
        return $rows;
        
    }
    private function resultset($stmt){
        $stmt->execute();
        $result = $stmt->get_result();
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        return $rows;
    }

}