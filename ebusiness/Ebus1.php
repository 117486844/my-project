<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
         <link rel="stylesheet" href="mystylesheet4.css" type="text/css"/>
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="cost_calc.js"></script>
      
    </head>
    
    <body style="background-color:  lightgrey;">
      <style>
      .container{
    display:inline;
}
.container1{

     top:0%;
  width:100%;
  height:250%;


}
/* Centered text */
.centered {
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-style: sans-serif;
  
}
</style>
        
        <div class="container1">
            <img src="https://www.surfertoday.com/images/stories/breakingwave.jpg" alt="wave" width="1440" height="250" >
           <div class="centered"><h1>Select A Product</h1></div>
       
       
         </div>
        <br>
        <div class="container">
                <form method="POST" action="Ebus2.php">
                
               <center><label for="Sales Force">
                    <input type="radio" id="Sales Force" name="product" checked onClick="disablebtnProceed()"/> 
                Sales Force @ $100
                </label>
                
                <br>
                <br>
                
                <label for="Cloud 9">
                    <input type="radio" id="Cloud 9" name="product" checked onClick="disablebtnProceed()"/> 
                Cloud9 @ $300
                </label>
                
                 <br>
                 <br>
                 
                 <label for="Amazon">
                    <input type="radio" id="Amazon" name="product" checked onClick="disablebtnProceed()"/> 
                Amazon @ $200
                </label>
                
                 <br>
                 <br>
                 
                 <label for="Gmail">
                    <input type="radio" id="Gmail" name="product" checked onClick="disablebtnProceed()"/> 
                Gmail @ $150
                </label>
                
                <br>
                <br>
                
                <label for="subtotal">
                    Sub Total
                    <input type="text" id="subtotal" value="0.00" readonly/>
                </label>
                <br>
                <br>
                
                <label for="discount">
                    Discount @ 5%
                    <input type="text" id="discount" value="0.00" readonly/>
                </label>
                
                <br>
                <br>
                
                <label for="vat">
                    Vat @ 10%
                    <input type="text" id="vat" value="0.00" readonly/>
                </label>
                
                <br>
                <br>
                
                <label for="total">
                    Total
                    <input type="text" id="total" name="total" value="0.00" readonly/>
                </label>
                
                <br>
                <br>
                <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
                
                </form>
                
                <br>
        
              <button onclick="calcSub()">Calculate Cost</button>
              <a role="button" href="Ebus1.php">Clear Choice</a></center>
          </div>
       
        
    </body>
</html>