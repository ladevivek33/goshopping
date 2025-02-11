
<?php
include 'nav.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include'conn.php';
    $pname=$_POST['pname'];
    $pissue=$_POST['pissue'];
    
    $sql="insert into fill (pname,pissue) value('$pname','$pissue')";
$r=mysqli_query($conn,$sql);
if($r)
{
    echo"<div class='alert alert-success' role='alert'>
  A simple success alert—check it out!
</div>";
}
    
}

 
   ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fill</title>
</head>
<style>
    body{
        height: 100%;
        width: 100%;
        display: inline-block;
    }
    .alert{
        width: 80%;
        
    }
aside{
    display: inline-block;
    width: 20%;
    height: 1557.5px;
    padding-left: 15px;
    margin-left: 15px;
    float: right;
    font-size: 30px;
    color: azure;
    font-style:oblique;
    background-color: darkslategray;
  } 
  .fi{
    font-family: Arial, Helvetica, sans-serif;
  font-size: 30px;
    margin-top: 20px;
    padding-top: 10px;
  } 
 input{
    border-radius: 10px;
    height: 50px;
    width: 400px;
  }
  a{
    color: slategrey;
  }
  .fill button{
    width: 100px;
    height: 50px;
    font-size: 30px;
    color: white;
    background-color: royalblue;
  }
 </style>
<body>
<form action="fill.php" method="post">
<aside>
  <div class="fill">
  <a href="ss.php"><-back to</a>
<div class="mb-3">
    <label  class="fi">product name </label>
    <input  name="pname" placeholder="proname name and ditels" required>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="fi"> issue the product</label>
    <textarea class="form-control" name="pissue" id="exampleFormControlTextarea1" rows="3" required></textarea>
</div>

    <button type="submit"> submit</a></button>
  </div>



</aside>
</form>
</body>
</html>
<?php include 'home.php';?>
<?php include 'aboutas.php';?>
<?php include 'f.php';  ?>