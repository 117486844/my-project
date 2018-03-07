<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
       <link rel="stylesheet" href="Ebus.css" type="text/css" />
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
  
  
  
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
   
      <style>
      .container{
    display:inline;
}
body{
  background-image: url("http://reisetips.nettavisen.no/wp-content/uploads/2013/02/whitehaven.jpg");
  background-repeat: no-repeat;
  background-size:cover;
  font-family: 'Playfair Display', serif;
}
/* Centered text */
.centered {
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-family: 'Playfair Display', serif;
  }
 
</style>
    </head>
    
    <body style="background-color: lightgrey;">
        <div class="container1">
            
           <div class="centered"><h1>Quavo Ltd</h1></div>
       
       
       
        <h1>Order Form</h1>
        
          <form name="myForm" method="POST" onsubmit="return validateForm()" action="Ebus2.php">
        
        
            
            <br>
            <h3>Select a product</h3>
            
           
            
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
            </label>
            
             <br>
              <br>
            
             <label for="cloud">
                <input type="radio" id="cloud" name="product" onclick="disablebtnProceed()"/>
                Cloud9 @ $200
            </label>
            
          
              <br>
                <br>
            
            <label for="aws">
                <input type="radio" id="aws" name="product" onclick="disablebtnProceed()"/>
                AWS @ $300
            </label>
            
            
            <br>
              <br>
             <label for="gmail">
                <input type="radio" id="gmail" name="product" onclick="disablebtnProceed()"/>
                Gmail @ $250
            </label>
            
              <br>
              <br>
            
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
             <br>
            <br>
            
             <label for="discount">
              Discount @ 5%
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>
            
              <br>
                <br>
              
            <label for="vat">
               Vat @ 10% 
                <input type="text" id="vat" name="vat" value="0.00" readonly/>
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
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
        
       
       
        </div>
    </body>
</html>

