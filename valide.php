<?php
    session_start();
    $path="";
    include 'operations.php';
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if(isset($_POST['submit'])){
        $username=test_input($_POST['username']);
        $password=test_input($_POST["password"]);
        if(empty($username)){
           $_SESSION['error1']= "please enter your email";
            header('location:index.php');
        }
        if(empty($password)){
            $_SESSION['error2']= "please enter your password";
            header('location:index.php');
        }
        if(!empty($username) && !empty($password)){
            $sql_valid= "SELECT * FROM user WHERE username='$username' AND password='$password' or email='$username' AND password='$password'";
            $REQ = mysqli_query($conn, $sql_valid);

            if(mysqli_num_rows($REQ) == 1){
                $REQ=mysqli_query($conn, $sql_valid)->fetch_array();
                $_SESSION['Fname']=$REQ['Fname'];
                $_SESSION['Lname']=$REQ['Lname'];

                if (isset($_POST['remember'])){
                    $_SESSION['email']=$REQ['email'];
                    $_SESSION['password']=$REQ['password'];
                    setcookie('email',$_SESSION['email'], time() + 86400*30);
                    setcookie('password',$_SESSION['password'], time() + 86400*30);
                }
                header('location:dashboard.php');
            }

            else{
                $_SESSION['wrong_info']="Email or Password is incorrect";
                header('location:index.php');
            }
        }
    }

?>