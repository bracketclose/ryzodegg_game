<?php
// create variable for connection
$dbHost = "localhost";
$dbUser = "ryzodegg_ryzodegg";
$dbPassword = "8XWK&1[[#iiL";
$dbName = "ryzodegg_hosnigame";

try {
    $dsn = "mysql:host=".$dbHost.";dbname=".$dbName;
    $conn = new PDO($dsn, $dbUser, $dbPassword);

    // Set Error Mode
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e) {
    echo "Connection Failed: " .$e->getMessage();
}
?>