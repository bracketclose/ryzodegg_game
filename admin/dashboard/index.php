<?php
include "../db/connection.php";
//Session Start
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<div class="d-flex justify-content-center">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="game1.php">Game 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="game2.php">Game 2</a>
                    </li>
                </ul>
                <div class="form-inline mx-5 my-2 my-lg-0">
                    <a class="btn btn-outline-primary my-2 my-sm-0"><?=$_SESSION["user"]?></a>
                    <a class="btn btn-primary my-2 my-sm-0" href="logout.php">Log Out</a>
                </div>
            </div>
        </nav>
    </div>

<div class="container">
<h1 class="my-5">Hey <?=$_SESSION["user"]?></h1>

<h2>Games</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Game</th>
      <th scope="col">Duration</th>
      <th scope="col">View</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Game 1</td>
      <td>1 Week</td>
      <td><a class="nav-link" href="game1.php">Click</a></td>
    </tr>

    <tr>
      <th scope="row">2</th>
      <td>Game 2</td>
      <td>1 Week</td>
      <td><a class="nav-link" href="game2.php">Click</a></td>
    </tr>

  </tbody>
</table>
</div>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0b8f0b573f.js" crossorigin="anonymous"></script>
</body>
</html>