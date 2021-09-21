<?php
include "db/connection.php";
session_start();

if($_SESSION['initial'] == False){
    echo("Connection failed");//Back to first page
}

$score = $_POST["score"];

$sql = "UPDATE first_game SET 
score = :score
WHERE  initial = :initial";

$stmt = $conn->prepare($sql);

if($stmt->execute(["initial" => $_SESSION["user"], "score" => $score])){
    if(session_destroy()){
        echo("Score Updated");
    }
    else{
        echo "error";
    }
}
?>