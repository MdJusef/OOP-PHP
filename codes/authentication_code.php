<?php
//include ('config/app.php');
include_once('controllers/RegisterController.php');
include_once('controllers/LoginController.php');

$auth = new LoginController;

if (isset($_POST['logout_btn'])){
    $chekedLoggedOut = $auth->logOut();

    if($chekedLoggedOut){
        redirect("Logged Out Successfully", "login.php");
    }
}


if (isset($_POST['login_btn']))
{
    $email = validateInput($db->conn, $_POST['email'] );
    $password = validateInput($db->conn,$_POST['password']);

    $checkLogin = $auth->userLogin($email,$password);

    if($checkLogin){
        redirect("Logged in successfully","profile.php");
    }else{
        redirect("Invalid Email Id or password","login.php");
    }
}


//Registration
if (isset($_POST['register_btn']))
{
    $name = validateInput($db->conn, $_POST['name']);
    $email = validateInput($db->conn, $_POST['email']);
    $password = validateInput($db->conn, $_POST['password']);
    $confirm_password = validateInput($db->conn, $_POST['confirm_password']);

    $register = new RegisterController;
    $result_password = $register->confirmPassword($password,$confirm_password);

    if($result_password){
         $result_user = $register->isUserExist($email);
         if ($result_user){
             redirect('Already Email Exists','register.php');
         }else{
             $register_query = $register->registration($name,$email,$password);

             if($register_query){
                 redirect("Registered Successfully","login.php");
             }else{
                 redirect("Something Went Wrong","register.php");
             }
         }
    }else{
        redirect("Password and Confirmed Password Does not match","register.php");
    }
}