/* global $ */
 var argSubTotal;
 
function calcSub(){
    
  
if(document.getElementById("Sales Force").checked) {
    argSubTotal = 100;
   
    
} else if (document.getElementById("Cloud 9").checked) {
    argSubTotal = 300;
   
} else if (document.getElementById("Amazon").checked) {
    argSubTotal = 200;
   
} else  {
     argSubTotal = 150;
     
}

    calcDisVatTotal(argSubTotal);

}

function calcDisVatTotal(parmSubTotal){
    var subtotal = argSubTotal;
    var argVat;
    var argtotal;
    var argDiscount;
 


 
argDiscount = argSubTotal * 0.05;
argVat = argSubTotal * 0.1;
argtotal = ((argSubTotal - argDiscount) + argVat) ;


   
display(argSubTotal, argDiscount, argVat, argtotal);

}
    
    function display(parm1, parm2, parm3, parm4){
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discount").value = parm2;
    document.getElementById("vat").value = parm3;
    document.getElementById("total").value = parm4;
       
       enablebtnProceed();
       
}

    function enablebtnProceed(){
        $('#btnProceed').prop('disabled', false);
    }
    
    function disablebtnProceed(){
        $('#btnProceed').prop('disabled', true);
 }