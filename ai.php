<?php include 'nav.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
aside{
    
    width: 20%;
    height: 1747.5px;
    padding-left: 15px;
    margin-left: 15px;
    float: right;
    font-size: 30px;
    color: azure;
    font-style:oblique;
    background-color: darkslategray;
  }  
  aside a{
    color: lightslategray;
  } 
 </style>
<body>
   <aside>
   <a href="ss.php">X</a>
   <?php session_start();
   echo "name is :-".$_SESSION["name"];"<br>";
   echo "username is :-".$_SESSION['username'];
   
   
   ?>
   </aside> 
</body>
</html>
<?php include 'home.php';?>
<?php include 'aboutas.php'?>
<?php include 'f.php';?>