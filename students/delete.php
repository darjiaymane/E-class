<?php
    include '../operations.php';
       
        $id = $_GET['id'];
            $sql_delete = "DELETE FROM students WHERE id_student=$id";
            $REQ = mysqli_query($conn, $sql_delete);
        if($REQ){
            header("location:../students.php");
        }

           
    ?>