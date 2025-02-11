<?php  
session_start();
session_unset();
session_destroy();
if($login=true)
{
         header("location:index.php");
}
else
{
     die(" plz fast the login  ");
}
?>