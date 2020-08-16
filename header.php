<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="jquery/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    
</head>
<body>
    <header>
        <nav class="headerdemo">
            <a href="index.php" style="display:none;"></a>
            <h1>Welcome to my new website</h1>
          <ul>
              <li><a href="index.php">Clickme</a></li>
              <li><a href="#">home</a></li> 
              <li><a href="#">home</a></li> 
              <li><a href="#">home</a></li>
          </ul>
          <div>
              <form action="includes/login.inc.php" method="post">

              <input type="text" name="uid" placeholder="Username">
              <br>
              <!-- <input type="text" name="mail" placeholder="Email">
              <br> -->
              <input type="password" name="pwd" placeholder="Repeat password">
              <!--<input type="password" name="pwd-repeat" placeholder="Repeat password">
              
              <br> -->
            
              <button  type="submit" name="login-submit">LOG IN </button>
            </form>
            <button href="signup.php">sign up</button>
            <form action="includes/logout.inc.php" method="post">
            <!-- <form action="includes/login.inc.php" method="post"> -->
            <button  type="button" name="logout-submit">LOG OUT</button>
            </form>
          </div>
        </nav>
    </header>
</body>
</html>