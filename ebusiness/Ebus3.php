<?php
session_start();
$name = $_REQUEST['name'];
$email =$_REQUEST['email'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Receipt</title>
        <link rel="stylesheet" href="mystylesheet4.css" type="text/css"/>
        
         <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="number.js"></script>
      
     <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
     </head>
    <body style="background-color:lightgrey;">
        
      <style>
      .container{
    display:inline;
}
.container1{
     top:0%;
  width:100%;
  height:250%;
  text-align: center;
}
/* Centered text */
.centered {
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
   
  }
  .container2{
      text-decoration:none;
      color:black;
      
  }
  .a{
  text-decoration:none;
      color:black;
  }
  body{
  background-image: url("http://reisetips.nettavisen.no/wp-content/uploads/2013/02/whitehaven.jpg");
  background-repeat: no-repeat;
  background-size:cover;
 
}
  </style>
  
   <div class="container1">
            
           <div class="centered"><h1>Quavo Ltd</h1></div>
       
        
        <Stong><h1>Receipt</h1></Stong>
        
       
                   

       
             <?php
            //Echo session varaibles that were set to the previous page
        echo("<strong>Name: </strong>". $name);
        echo("<br><strong>Email: </strong>". $email);
        echo "<br><strong>Total: $</strong>" .$_SESSION["total"] ;
        ?>
    
      
        
    </body>
    </html>