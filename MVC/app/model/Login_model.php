<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

class Login_Model
{
    private $dbh;
    private $stmt;

    public function __construct()
    {
        $db = "mysql:host=127.0.0.1;dbname=mvc";
        try {
            $this->dbh = new PDO($db, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function loginget()
    {
        if (isset($_POST['email']) && isset($_POST['Pass'])) {
            $email = $_POST['email'];
            $password = $_POST['Pass'];

            $this->stmt = $this->dbh->prepare("SELECT * FROM `user` WHERE email = :email");
            $this->stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $this->stmt->execute();

            $result = $this->stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                $hashedPassword = $result['Pass'];

                if (password_verify($password, $hashedPassword)) {
                    $_SESSION['UserId'] = $result['UserId'];
                    header("Location: index.php");
                    exit();
                } else {
                    echo "<script type='text/javascript'>alert('Invalid Username or password');</script>";
                }
            } else {
                echo "<script type='text/javascript'>alert('User not Found');</script>";
            }
        }
    }
}
