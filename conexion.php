<?php 
        $host = 'localhost';
        $user= 'root';
        $port='3307';
        $password= 'root';
        $database= 'proyectohajime';

        try{
            $conn = new PDO ("mysql:host=$host;dbname=$database;port=$port",$user,$password);
        } catch(PDOException $exp){
        }
        return $conn;

?>
