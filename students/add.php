<?php
    session_start();
    include '../operations.php';
        if(isset($_POST['submit'])){
            $name = $_POST['Name'];
            $email = $_POST['Email'];
            $phone = $_POST['Phone'];
            $enrollNumber = $_POST['EnrollNumber'];
            $dateOfAdmission = $_POST['DateOfAdmission'];

            $sql_insert = "INSERT INTO students(Name, Email, Phone, EnrollNumber, DateOfAdmission) VALUES ('$name', '$email', '$phone', '$enrollNumber', '$dateOfAdmission')";
            $REQ = mysqli_query($conn, $sql_insert);

            if($REQ){
                header("location:../students.php");
            }
            else {
                echo "something went wrong!";
            }
        }
        if(isset($_POST['signup'])){
            $Fname = $_POST['Fname'];
            $Lname = $_POST['Lname'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql_insert = "INSERT INTO user(Fname, Lname, username, email, password) VALUES ('$Fname', '$Lname', '$username', '$email', '$password')";
            try {
                $REQ = mysqli_query($conn, $sql_insert);
                $_SESSION['Fname'] = $Fname;
                $_SESSION['Lname'] = $Lname;
                header("location:../dashboard.php");
            }catch (Exception $e){
                $_SESSION['error4']="The email or the username is already exist";
                header("location:../signup.php");
            }

        }


    ?>


