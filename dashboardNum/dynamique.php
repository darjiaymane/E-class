<?php
    include 'operations.php';

    function calcul($table,$column,$conn){
        $sum = "SELECT COUNT($column) FROM $table";
        $sql= mysqli_query($conn,$sum) ->fetch_array();
        return $sql[0];
    }
    function somme($table,$column,$conn){
        $sum = "SELECT SUM($column) FROM $table";
        $sql= mysqli_query($conn,$sum) ->fetch_array();
        return $sql[0];
    }
?>