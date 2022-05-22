<?php
//Kết nối Database
function connection()
    {   
        try{
        $dsn='mysql:host=localhost;dbname=quanlydongho';
        $usernamedb='root';
        $passworddb='';
        $db=new PDO($dsn,$usernamedb,$passworddb);
        return $db;
        }catch(Exception $e){            
        }
    }
?>