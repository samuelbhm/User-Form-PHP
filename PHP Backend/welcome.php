<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="welcome.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
  </head>
  <body>
    <div>
      <div class="container">
        <h1 class="header1">
          Welcome back
        </h1>

        <div class="container-nav">
          <div>
            <a class="navbar0" href="">
              Hallo
            </a>
          </div>

          <div>
            <a class="navbar1" href="">
              Hallo
            </a>
          </div>

          <div>
            <a class="navbar2" href="">
              Hallo
            </a>
          </div>  

        </div>
      </div>

      <div>
        <button type="button" class="logout-button" onclick="window.location.href='logout.php';">
        Log Out
        </button>
      </div>

    </div>
  </body>
</html>

