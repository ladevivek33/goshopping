<?php
include 'nav.php';

  session_start();
 
   ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style> 
.l button
{
    border-radius: 10px;
    background-color: tomato;
    color:white;
    margin-top: 10px;
    margin-bottom: 10px;
    float: right;                
} 
.l a{
    color: white;
    font-size: 20px;
    
} 
h2{
    margin-right: 20px;
    text-align: right;
    padding: 10px;
    font-size:30px;
}
aside{
    
    width: 20%;
    height: 1747px;
    padding-left: 15px;
    margin-left: 15px;
    float: right;
    font-size: 30px;
    color: azure;
    font-style:oblique;
    background-color: darkslategray;
  }
  .accordion{
    margin-top: 30px;
  }
 </style> 

<body>  
<aside>

<h2><?php   echo"wel-come to:-".$_SESSION["username"]?></h2>  
<div class="l"><button><a href="logout.php">logout</a></button></div>
<br>
<div class="accordion" >
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       Account info 
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      clike the more infometion <a href="ai.php">clike here</a>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
       the product issue 
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        plese the submit the form the you product problems-<a href="fill.php">clike here</a>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        help as 
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Phone 
Call Ecom Express's automated IVR support 24/7 at +91-8376888888
Email 
Email customercare@ecomexpress.in for customer support
Email sales@ecomexpress.in for sales inquiries
Email partner@ecomexpress.in to join the Ecom Express Business Partner Program
Website 
Visit the Ecom Express website for more information</pre>
       
      </div>
    </div>
  </div>
</div> 
</aside>

  
</body>
</html>
<?php include 'home.php';?>
<?php include 'aboutas.php';?>
<?php include 'f.php';  ?>