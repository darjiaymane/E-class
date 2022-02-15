<?php

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
                echo "Student record is successfully inserted!";
                header("location:../students.php");
                
            }
            else {
                echo "something went wrong!";
            }
        }
    ?>