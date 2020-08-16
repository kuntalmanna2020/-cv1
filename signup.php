<link rel="stylesheet" href="sign.css">
<?php

require "header.php";
?>
<main>
    <div>
    <section class="default">
       <h1>signup</h1>
       <form class="form-signup" action="includes/signup.inc.php" method="post">

           <input type="text" name="uid" placeholder="Username"><br><br>
           <input type="text" name="mail" placeholder="Email"><br><br>
              <input type="password" name="pwd" placeholder="password"><br><br>
             
              
              <input type="password" name="pwd-repeat" placeholder="repeat-password"><br><br>
              <button  type="submit" name="signup-submit">Sign up</button>
    </form>
        </section>
</div>
</main>
<!-------?php
  require "footer.php";
  ?>-------->