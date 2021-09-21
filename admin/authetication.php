<?php
//Session Start
session_start();
if (isset($_SESSION['login'])) {
    header('Location: dashboard/');
  exit;
}


//Database
include("db/connection.php");



$status = "";

//Server Request
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    //Empty Forms Error
    if ($_POST['user'] == "" || $_POST['password'] == "") {
        exit('Please fill both the username and password fields!');
    }
    
    //Login System
    else{
        $user = $_POST['user'];
        $password = md5($_POST['password']);

        //Connecting Table
        $sql = "SELECT * FROM admin WHERE username = :user";

        $result = $conn->prepare($sql);

        $result->bindParam('user', $user);

        $result->execute();
        
        //User found
        if($details = $result->fetch(PDO::FETCH_ASSOC)){

            //Password Match
            if($password == $details['password']){
                //Creating Sessions
                session_regenerate_id();

                $_SESSION['login'] = TRUE;
                $_SESSION['user'] = $user;
                $_SESSION['id'] = $details['id'];

                //Dashboard Directory
                header('location: dashboard/');
            }

            //Password not Match
            else{
                echo "incorrect pass";
            }
        }

        //User not found
        else{
            echo "incorret email";
        }          
    }
}


//Server Request failed Error
else{
    echo "error505";
}
?>