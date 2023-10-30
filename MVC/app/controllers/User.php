<?php

class User extends Controller{
    public function index($nama = 'Zahwa', $kelas = 'XIIRPL1'){
       
        $data['nama'] = $nama;
        $data['kelas'] = $kelas;
        $data['title'] = 'User';
        $this->view('Templates/header', $data);
        $this->view('User/index', $data);
        $this->view('Templates/footer');
    }
    public function page(){
        $data['title'] = 'User Page';
        $this->view('Templates/header', $data);
        $this->view('User/page');
        $this->view('Templates/footer');
    }
    public function login(){
        $data['title'] = 'Login Page';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $password = isset($_POST['pass']) ? $_POST['pass'] : '';
    
            $loginmodel = $this->model("Login_model");
            $loginresult = $loginmodel->loginget( $email, $password);
    
            if ($loginresult) {
             
                header("Location: index.php");
                exit();
            
            }
        }
        $this->view('Templates/header', $data);
        $this->view('User/login', $data);
        $this->view('Templates/footer');
    }

    public function register(){
        $data['title'] = 'Register Page';
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
            $UserName = isset($_POST['UserName']) ? $_POST['UserName'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $password = isset($_POST['pass']) ? $_POST['pass'] : '';
    
            $registrationModel = $this->model("Register_model");
            $registrationResult = $registrationModel->registerget($UserName, $email, $password);
    
            if ($registrationResult) {

                echo "<script type='text/javascript'>
                alert('Register success, please login with your registered account');
                window.location.href = 'User/login'; 
            </script>";

                
            }
        }
    
        $this->view('Templates/header', $data);
        $this->view('User/register', $data);
        $this->view('Templates/footer');
    }
    
}