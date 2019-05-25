calculate1 = function()
{
if (document.getElementById("input1").value <= 100 && document.getElementById("input1").value >=0)
  {
 
    var r1 = document.getElementById('input1').value; 
    document.getElementById('output1').value = parseFloat(r1)/10;
    
    
    
   }
   
    else if (document.getElementById("input1").value > 100)
   {
       document.getElementById("output1").value = 10;
       
   }
   calculate2();
 }

 calculate2 = function()
 {
      if (document.getElementById("input2").value >=0)
       {
     var r2  = document.getElementById('output1').value;
    
     var r3 = document.getElementById('input2').value;
     document.getElementById('output2').value = parseFloat(r2)*parseFloat(r3);
      }
 
 }
 //===============================================================================
 calculate3 = function()
{
if (document.getElementById("input3").value <= 100 && document.getElementById("input3").value >=0)
  {
 
    var r4 = document.getElementById('input3').value; 
    document.getElementById('output3').value = parseFloat(r4)/10;
    
    
    
   }
   
    else if (document.getElementById("input3").value > 100)
   {
       document.getElementById("output3").value = 10;
       
   }
   calculate4();
 }

 calculate4 = function()
 {
      if (document.getElementById("input4").value >=0)
       {
     var r5  = document.getElementById('output3').value;
    
     var r6 = document.getElementById('input4').value;
     document.getElementById('output4').value = parseFloat(r5)*parseFloat(r6);
      }
 
 }
 //===========================================================================
 calculate5 = function()
{
if (document.getElementById("input5").value <= 100 && document.getElementById("input5").value >=0)
  {
 
    var r7 = document.getElementById('input5').value; 
    document.getElementById('output5').value = parseFloat(r7)/10;
    
    
    
   }
   
    else if (document.getElementById("input5").value > 100)
   {
       document.getElementById("output5").value = 10;
       
   }
   calculate6();
 }

 calculate6 = function()
 {
      if (document.getElementById("input6").value >=0)
       {
     var r8  = document.getElementById('output5').value;
    
     var r9 = document.getElementById('input6').value;
     document.getElementById('output6').value = parseFloat(r8)*parseFloat(r9);
      }
 
 }
//================================================================================
 calculate7 = function()
{
if (document.getElementById("input7").value <= 100 && document.getElementById("input7").value >=0)
  {
 
    var r10 = document.getElementById('input7').value; 
    document.getElementById('output7').value = parseFloat(r10)/10;
    
    
    
   }
   
    else if (document.getElementById("input7").value > 100)
   {
       document.getElementById("output7").value = 10;
       
   }
   calculate8();
 }

 calculate8 = function()
 {
      if (document.getElementById("input8").value >=0)
       {
     var r11  = document.getElementById('output7').value;
    
     var r12 = document.getElementById('input8').value;
     document.getElementById('output8').value = parseFloat(r11)*parseFloat(r12);
      }
 }
 //TOTAL AND AVG
 
 