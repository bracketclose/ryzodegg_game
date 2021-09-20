<?php
include "db/connection.php";

if(!isset($_POST["initial"])){
    echo("Connection failed");//Back to first page

}
else{
    $initial = $_POST["initial"];
    
    //$initial = "sss";
    
    $sql = "SELECT * FROM first_game WHERE initial = :initial";
                    
    $result = $conn->prepare($sql);

    $result->bindParam('initial', $initial);
    $result->execute();

    if($result->fetch(PDO::FETCH_ASSOC)){
        echo("Player already exist");
    }
    else{
        session_start();
        $id = "";
        $sql = "INSERT INTO first_game(id, initial)
        VALUES (:id, :initial)";

        $stmt = $conn->prepare($sql);
        
        if($stmt->execute(["id" => $id, "initial" => $initial])){
            session_regenerate_id();
            
            $_SESSION['initial'] = TRUE;
            $_SESSION['user'] = $_POST["initial"];

            //Dashboard Directory
            echo('success');
        }
    }
}

?>