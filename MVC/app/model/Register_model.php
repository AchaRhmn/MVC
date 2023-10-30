<?php

class Register_model{
    private $dbh;
    private $stmt;

    public function __construct(){
        $db = "mysql:host=127.0.0.1;dbname=mvc";
        try{
            $this->dbh = new PDO($db, 'root', '');
        } catch(PDOException $e){
            die($e->getMessage());
        }}

    public function registerget($UserName, $email, $password){

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $this->stmt = $this->dbh->prepare("INSERT INTO `User` (UserName, email, Pass) VALUES (?, ?, ?)");
        $this->stmt->bindParam(1, $UserName);
        $this->stmt->bindParam(2, $email);
        $this->stmt->bindParam(3, $hashedPassword);

        $this->stmt->execute();

         if ($this->stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }

        
        }
}

?>
