<?php

if ($_POST["login-submit"])
 {

    require 'dbh.inc.php';

    $mailuid=$_POST["uid"];
    $password=$_POST['pwd'];

    if (empty($mailuid)|| empty($password))
     {
        header("Location:../index.php?error=emptyfields");
        exit();
    }
    else
    {
        ///mysql if-else block
        $sql="select*from data_user where userid=? or email=?;";
        $stmt=mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql))
         {
            header("Location:../index.php?error=sqlerror");
            exit();
            # code...
        }
        else
        {
            mysqli_stmt_bind_param($stmt,"ss",$mailuid,$mailuid);
            mysqli_stmt_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);
            if ($row=mysqli_fetch_assoc($result))
             {
                $pwdcheck=password_verify($password,$row['password']);
                if ($pwdcheck==false)
                 {
                    header("Location:../index.php?error=wrongpwd");
                    exit();
                    # code...
                    // else
                    // {
                    //     header("Location:../index.php?error=nouser");
                    //     exit();
                    // }
                }
                else if($pwdcheck==true)
                {
                   session_start();
                   $_SESSION['UserID']=$row['id'];
                   $_SESSION['Useruid']=$row['userid'];

                   header("Location:../index.php?login=success");
                    exit();

                }
                else
                {
                    header("Location:../index.php?error=wrongpwd");
                    exit();
                }
            }
            else 
            {
                header("Location:../index.php?error=nouser");
                exit();
            }
            
           

        }
    }
    mysqli_stmt_close($stmt);
mysqli_close($conn);
    

}


else 
{
    header("Location:../index.php");
    exit();
}   

?>

