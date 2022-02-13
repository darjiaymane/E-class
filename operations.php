<?php
function connexion(){
    try{
        $sqlConnexion = new PDO('mysql:host=localhost;dbname=e_classe_db; charset=utf8','root','');
        }
    catch(Exception $exp){
        echo 'ERROR' .$exp->getMessage();
    }
    return $sqlConnexion;
}
?>