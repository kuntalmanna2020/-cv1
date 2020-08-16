<?php

require "header.php";
?>


<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="jquery/jquery-3.5.1.js"></script>

<main>
    <div>
    <section class="default">
        <?php
          if (isset($_SESSION['UserID']))
           {
               echo " <p> you are logged in!</p>";
              # code...
          }
          else{
              echo "<p> you are logged out</p>";
          }
        ?>
       <!-- <p> you are logged out</p>
        <p> you are logged in </p> -->
        </section>
</div>
</main>
<?php
  require "footer.php";
  ?>