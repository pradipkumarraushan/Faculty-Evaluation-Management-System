/*function  actualscorex(thisctrl)
{

	var a = $(thisctrl).val();
	alert(a);
}
*/
function  actualscore(thisctrl)
{

  
    //=============================1========================================
    var actualscore_1_1 = document.getElementById("actualscore_1_1");
    if (actualscore_1_1===thisctrl) 
    {
 if (actualscore_1_1.value <= 100 && actualscore_1_1.value >=0)
  {
  
    document.getElementById('reduced_score_1_1').value = parseFloatm(actualscore_1_1.value)/10;
   }
 else if
   (actualscore_1_1.value > 100)
   {
       document.getElementById("reduced_score_1_1").value = 10;
    }
       
    }

    //=================================2====================================
  if (document.getElementById("actualscore_1_2")===thisctrl) 
    {
        if (document.getElementById("actualscore_1_2").value <= 100 && document.getElementById("actualscore_1_2").value >=0)
  {
  var r1 = document.getElementById('actualscore_1_2').value; 
    document.getElementById('reduced_score_1_2').value = parseFloatm(r1)/10;
   }
 else if
   (document.getElementById("actualscore_1_2").value > 100)
   {
       document.getElementById("reduced_score_1_2").value = 10;
    }
  }
  //==============================3=======================================
  if (document.getElementById("actualscore_1_3")===thisctrl) 
    {
        if (document.getElementById("actualscore_1_3").value <= 100 && document.getElementById("actualscore_1_3").value >=0)
  {
  var r1 = document.getElementById('actualscore_1_3').value; 
    document.getElementById('reduced_score_1_3').value = parseFloatm(r1)/10;
   }
 else if
   (document.getElementById("actualscore_1_3").value > 100)
   {
       document.getElementById("reduced_score_1_3").value = 10;
    }
  }
    //===============================4======================================
  if (document.getElementById("actualscore_1_4")===thisctrl) 
    {
        if (document.getElementById("actualscore_1_4").value <= 100 && document.getElementById("actualscore_1_4").value >=0)
  {
  var r1 = document.getElementById('actualscore_1_4').value; 
    document.getElementById('reduced_score_1_4').value = parseFloatm(r1)/10;
   }
 else if
   (document.getElementById("actualscore_1_4").value > 100)
   {
       document.getElementById("reduced_score_1_4").value = 10;
    }
  }
    //================================5=====================================
  if (document.getElementById("actualscore_2_5")===thisctrl) 
    {
        if (document.getElementById("actualscore_2_5").value <= 40 && document.getElementById("actualscore_2_5").value >=0)
  {
  var r1 = document.getElementById('actualscore_2_5').value; 
    document.getElementById('reduced_score_2_5').value = parseFloatm(r1)/4;
   }
 else if
   (document.getElementById("actualscore_2_5").value > 40)
   {
       document.getElementById("reduced_score_2_5").value = 10;
    }
  }
    //================================6=====================================
  if (document.getElementById("actualscore_2_6")===thisctrl) 
    {
        if (document.getElementById("actualscore_2_6").value <= 50 && document.getElementById("actualscore_2_6").value >=0)
  {
  var r1 = document.getElementById('actualscore_2_6').value; 
    document.getElementById('reduced_score_2_6').value = parseFloatm(r1)/5;
   }
 else if
   (document.getElementById("actualscore_2_6").value > 50)
   {
       document.getElementById("reduced_score_2_6").value = 10;
    }
  }
    //==================================7===================================
  if (document.getElementById("actualscore_2_7")===thisctrl) 
    {
        if (document.getElementById("actualscore_2_7").value <= 40 && document.getElementById("actualscore_2_7").value >=0)
  {
  var r1 = document.getElementById('actualscore_2_7').value; 
    document.getElementById('reduced_score_2_7').value = parseFloatm(r1)/4;
   }
 else if
   (document.getElementById("actualscore_2_7").value > 40)
   {
       document.getElementById("reduced_score_2_7").value = 10;
    }
  }
    //===================================8==================================
  if (document.getElementById("actualscore_2_8")===thisctrl) 
    {
        if (document.getElementById("actualscore_2_8").value <= 20 && document.getElementById("actualscore_2_8").value >=0)
  {
  var r1 = document.getElementById('actualscore_2_8').value; 
    document.getElementById('reduced_score_2_8').value = parseFloatm(r1)/2;
   }
 else if
   (document.getElementById("actualscore_2_8").value > 20)
   {
       document.getElementById("reduced_score_2_8").value = 10;
    }
  }
    //===============================9======================================
  if (document.getElementById("actualscore_2_9")===thisctrl) 
    {
        if (document.getElementById("actualscore_2_9").value <= 20 && document.getElementById("actualscore_2_9").value >=0)
  {
  var r1 = document.getElementById('actualscore_2_9').value; 
    document.getElementById('reduced_score_2_9').value = parseFloatm(r1)/2;
   }
 else if
   (document.getElementById("actualscore_2_9").value > 20)
   {
       document.getElementById("reduced_score_2_9").value = 10;
    }
  }
    //================================10=====================================
  if (document.getElementById("actualscore_2_10")===thisctrl) 
    {
        if (document.getElementById("actualscore_2_10").value <= 20 && document.getElementById("actualscore_2_10").value >=0)
  {
  var r1 = document.getElementById('actualscore_2_10').value; 
    document.getElementById('reduced_score_2_10').value = parseFloatm(r1)/2;
   }
 else if
   (document.getElementById("actualscore_2_10").value > 20)
   {
       document.getElementById("reduced_score_2_10").value = 10;
    }
  }
    //==================================11===================================
  if (document.getElementById("actualscore_3_11")===thisctrl) 
    {
        if (document.getElementById("actualscore_3_11").value <= 30 && document.getElementById("actualscore_3_11").value >=0)
  {
  var r1 = document.getElementById('actualscore_3_11').value; 
    document.getElementById('reduced_score_3_11').value = parseFloatm(r1)/3;
   }
 else if
   (document.getElementById("actualscore_3_11").value > 30)
   {
       document.getElementById("reduced_score_3_11").value = 10;
    }
  }
    //=================================12====================================
  if (document.getElementById("actualscore_3_12")===thisctrl) 
    {
        if (document.getElementById("actualscore_3_12").value <= 150 && document.getElementById("actualscore_3_12").value >=0)
  {
  var r1 = document.getElementById('actualscore_3_12').value; 
    res = parseFloatm(r1)/15;
        if(res>=10){
          document.getElementById('reduced_score_3_12').value= 10;
        }
        else
        {
           document.getElementById('reduced_score_3_12').value= res;
        }

     
   }
 else if
   (document.getElementById("actualscore_3_12").value > 150)
   {
       document.getElementById("reduced_score_3_12").value = 10;
    }
  }
   //=================================13========= ===========================
  if (document.getElementById("actualscore_3_13")===thisctrl) 
    {
        if (document.getElementById("actualscore_3_13").value <= 50 && document.getElementById("actualscore_3_13").value >=0)
  {
  var r1 = document.getElementById('actualscore_3_13').value; 
    document.getElementById('reduced_score_3_13').value = parseFloatm(r1)/5;
   }
 else if
   (document.getElementById("actualscore_3_13").value > 50)
   {
       document.getElementById("reduced_score_3_13").value = 10;
    }
  }
   //=================================14====================================
  if (document.getElementById("actualscore_3_14")===thisctrl) 
    {
        if (document.getElementById("actualscore_3_14").value <= 100 && document.getElementById("actualscore_3_14").value >=0)
  {
  var r1 = document.getElementById('actualscore_3_14').value; 
    document.getElementById('reduced_score_3_14').value = parseFloatm(r1)/10;
   }
 else if
   (document.getElementById("actualscore_3_14").value > 100)
   {
       document.getElementById("reduced_score_3_14").value = 10;
    }
  }
   //=================================15====================================
  if (document.getElementById("actualscore_3_15")===thisctrl) 
    {
        if (document.getElementById("actualscore_3_15").value <= 100 && document.getElementById("actualscore_3_15").value >=0)
  {
  var r1 = document.getElementById('actualscore_3_15').value; 
    document.getElementById('reduced_score_3_15').value = parseFloatm(r1)/10;
   }
 else if
   (document.getElementById("actualscore_3_15").value > 100)
   {
       document.getElementById("reduced_score_3_15").value = 10;
    }
  }
   //=================================16====================================
  if (document.getElementById("actualscore_4_16")===thisctrl) 
    {
        if (document.getElementById("actualscore_4_16").value <= 20 && document.getElementById("actualscore_4_16").value >=0)
  {
  var r1 = document.getElementById('actualscore_4_16').value; 
    document.getElementById('reduced_score_4_16').value = parseFloatm(r1)/2;
   }
 else if
   (document.getElementById("actualscore_4_16").value > 20)
   {
       document.getElementById("reduced_score_4_16").value = 10;
    }
  }
   //=================================17====================================
  if (document.getElementById("actualscore_4_17")===thisctrl) 
    {
        if (document.getElementById("actualscore_4_17").value <= 20 && document.getElementById("actualscore_4_17").value >=0)
  {
  var r1 = document.getElementById('actualscore_4_17').value; 
    document.getElementById('reduced_score_4_17').value = parseFloatm(r1)/2;
   }
 else if
   (document.getElementById("actualscore_4_17").value > 20)
   {
       document.getElementById("reduced_score_4_17").value = 10;
    }
  }
   //=================================18====================================
  if (document.getElementById("actualscore_4_18")===thisctrl) 
    {
        if (document.getElementById("actualscore_4_18").value <= 20 && document.getElementById("actualscore_4_18").value >=0)
  {
  var r1 = document.getElementById('actualscore_4_18').value; 
    document.getElementById('reduced_score_4_18').value = parseFloatm(r1)/2;
   }
 else if
   (document.getElementById("actualscore_4_18").value > 20)
   {
       document.getElementById("reduced_score_4_18").value = 10;
    }
  }
   //=================================19====================================
  if (document.getElementById("actualscore_4_19")===thisctrl) 
    {
        if (document.getElementById("actualscore_4_19").value <= 20 && document.getElementById("actualscore_4_19").value >=0)
  {
  var r1 = document.getElementById('actualscore_4_19').value; 
    document.getElementById('reduced_score_4_19').value = parseFloatm(r1)/2;
   }
 else if
   (document.getElementById("actualscore_4_19").value > 20)
   {
       document.getElementById("reduced_score_4_19").value = 10;
    }
  }
   //=================================20====================================
  if (document.getElementById("actualscore_5_20")===thisctrl) 
    {
        if (document.getElementById("actualscore_5_20").value <= 10 && document.getElementById("actualscore_5_20").value >=0)
  {
  var r1 = document.getElementById('actualscore_5_20').value; 
    document.getElementById('reduced_score_5_20').value = parseFloatm(r1)/1;
   }
 else if
   (document.getElementById("actualscore_5_20").value > 10)
   {
       document.getElementById("reduced_score_5_20").value = 10;
    }
  }
   //=================================21====================================
  if (document.getElementById("actualscore_5_21")===thisctrl) 
    {
        if (document.getElementById("actualscore_5_21").value <= 10 && document.getElementById("actualscore_5_21").value >=0)
  {
  var r1 = document.getElementById('actualscore_5_21').value; 
    document.getElementById('reduced_score_5_21').value = parseFloatm(r1)/1;
   }
 else if
   (document.getElementById("actualscore_5_21").value > 10)
   {
       document.getElementById("reduced_score_5_21").value = 10;
    }
  }
   //=================================22====================================
  if (document.getElementById("actualscore_5_22")===thisctrl) 
    {
        if (document.getElementById("actualscore_5_22").value <= 100 && document.getElementById("actualscore_5_22").value >=0)
  {
  var r1 = document.getElementById('actualscore_5_22').value; 
    document.getElementById('reduced_score_5_22').value = parseFloatm(r1)/10;
   }
 else if
   (document.getElementById("actualscore_5_22").value > 100)
   {
       document.getElementById("reduced_score_5_22").value = 10;
    }
  }

 //=================================23====================================
  if (document.getElementById("actualscore_5_23")===thisctrl) 
    {
        if (document.getElementById("actualscore_5_23").value <= 20 && document.getElementById("actualscore_5_23").value >=0)
  {
  var r1 = document.getElementById('actualscore_5_23').value; 
    document.getElementById('reduced_score_5_23').value = parseFloatm(r1)/2;
   }
 else if
   (document.getElementById("actualscore_5_23").value > 20)
   {
       document.getElementById("reduced_score_5_23").value = 10;
    }
  }
   //=================================24====================================
  if (document.getElementById("actualscore_5_24")===thisctrl) 
    {
        if (document.getElementById("actualscore_5_24").value <= 10 && document.getElementById("actualscore_5_24").value >=0)
  {
  var r1 = document.getElementById('actualscore_5_24').value; 
    document.getElementById('reduced_score_5_24').value = parseFloatm(r1)/1;
   }
 else if
   (document.getElementById("actualscore_5_24").value > 10)
   {
       document.getElementById("reduced_score_5_24").value = 10;
    }
  }
   //=================================25====================================
  if (document.getElementById("actualscore_5_25")===thisctrl) 
    {
        if (document.getElementById("actualscore_5_25").value <= 10 && document.getElementById("actualscore_5_25").value >=0)
  {
  var r1 = document.getElementById('actualscore_5_25').value; 
    document.getElementById('reduced_score_5_25').value = parseFloatm(r1)/1;
   }
 else if
   (document.getElementById("actualscore_5_25").value > 10)
   {
       document.getElementById("reduced_score_5_25").value = 10;
    }
  }
 //=================================26====================================
  if (document.getElementById("actualscore_6_26")===thisctrl) 
    {
        if (document.getElementById("actualscore_6_26").value <= 50 && document.getElementById("actualscore_6_26").value >=0)
  {
  var r1 = document.getElementById('actualscore_6_26').value; 
    document.getElementById('reduced_score_6_26').value = parseFloatm(r1)/5;
   }
 else if
   (document.getElementById("actualscore_6_26").value > 50)
   {
       document.getElementById("reduced_score_6_26").value = 10;
    }
  }

weightagevalue();
sum_actual_score();
average_outof_10();
//grade_point();
 
}

function weightagevalue()

{

     //==========================1=================================    
     if (document.getElementById('weightage_value_1_1').value >=0)
       {
     var r2  = document.getElementById('reduced_score_1_1').value;
    
     var r3 = document.getElementById('weightage_value_1_1').value;
     document.getElementById('wx_1_1').value = parseFloatm(r2)*parseFloatm(r3);
      }

      //==========================2=================================    
     if (document.getElementById('weightage_value_1_2').value >=0)
       {
     var r2  = document.getElementById('reduced_score_1_2').value;
    
     var r3 = document.getElementById('weightage_value_1_2').value;
     document.getElementById('wx_1_2').value = parseFloatm(r2)*parseFloatm(r3);
      }
      //===========================3================================    
     if (document.getElementById('weightage_value_1_3').value >=0)
       {
     var r2  = document.getElementById('reduced_score_1_3').value;
    
     var r3 = document.getElementById('weightage_value_1_3').value;
     document.getElementById('wx_1_3').value = parseFloatm(r2)*parseFloatm(r3);
      }
    
      //===========================4================================    
     if (document.getElementById('weightage_value_1_4').value >=0)
       {
     var r2  = document.getElementById('reduced_score_1_4').value;
    
     var r3 = document.getElementById('weightage_value_1_4').value;
     document.getElementById('wx_1_4').value = parseFloatm(r2)*parseFloatm(r3);
      }

         //==========================5=================================    
     if (document.getElementById('weightage_value_2_5').value >=0)
       {
     var r2  = document.getElementById('reduced_score_2_5').value;
    
     var r3 = document.getElementById('weightage_value_2_5').value;
     document.getElementById('wx_2_5').value = parseFloatm(r2)*parseFloatm(r3);
      }

  //==================================6=========================    
     if (document.getElementById('weightage_value_2_6').value >=0)
       {
     var r2  = document.getElementById('reduced_score_2_6').value;
    
     var r3 = document.getElementById('weightage_value_2_6').value;
     document.getElementById('wx_2_6').value = parseFloatm(r2)*parseFloatm(r3);
      }

  //===================================7========================    
     if (document.getElementById('weightage_value_2_7').value >=0)
       {
     var r2  = document.getElementById('reduced_score_2_7').value;
    
     var r3 = document.getElementById('weightage_value_2_7').value;
     document.getElementById('wx_2_7').value = parseFloatm(r2)*parseFloatm(r3);
      }

  //====================================8=======================    
     if (document.getElementById('weightage_value_2_8').value >=0)
       {
     var r2  = document.getElementById('reduced_score_2_8').value;
    
     var r3 = document.getElementById('weightage_value_2_8').value;
     document.getElementById('wx_2_8').value = parseFloatm(r2)*parseFloatm(r3);
      }

  //=====================================9======================    
     if (document.getElementById('weightage_value_2_9').value >=0)
       {
     var r2  = document.getElementById('reduced_score_2_9').value;
    
     var r3 = document.getElementById('weightage_value_2_9').value;
     document.getElementById('wx_2_9').value = parseFloatm(r2)*parseFloatm(r3);
      }

  //======================================10=====================    
     if (document.getElementById('weightage_value_2_10').value >=0)
       {
     var r2  = document.getElementById('reduced_score_2_10').value;
    
     var r3 = document.getElementById('weightage_value_2_10').value;
     document.getElementById('wx_2_10').value = parseFloatm(r2)*parseFloatm(r3);
      }

  //========================================11===================    
     if (document.getElementById('weightage_value_3_11').value >=0)
       {
     var r2  = document.getElementById('reduced_score_3_11').value;
    
     var r3 = document.getElementById('weightage_value_3_11').value;
     document.getElementById('wx_3_11').value = parseFloatm(r2)*parseFloatm(r3);
      }

  //==========================================12=================    
     if (document.getElementById('weightage_value_3_12').value >=0)
       {
     var r2  = document.getElementById('reduced_score_3_12').value;
    
     var r3 = document.getElementById('weightage_value_3_12').value;
     document.getElementById('wx_3_12').value = parseFloatm(r2)*parseFloatm(r3);
      }

  //========================================13===================    
     if (document.getElementById('weightage_value_3_13').value >=0)
       {
     var r2  = document.getElementById('reduced_score_3_13').value;
    
     var r3 = document.getElementById('weightage_value_3_13').value;
     document.getElementById('wx_3_13').value = parseFloatm(r2)*parseFloatm(r3);
      }

  //==========================================14=================    
     if (document.getElementById('weightage_value_3_14').value >=0)
       {
     var r2  = document.getElementById('reduced_score_3_14').value;
    
     var r3 = document.getElementById('weightage_value_3_14').value;
     document.getElementById('wx_3_14').value = parseFloatm(r2)*parseFloatm(r3);
      }

  //======================================15=====================    
     if (document.getElementById('weightage_value_3_15').value >=0)
       {
     var r2  = document.getElementById('reduced_score_3_15').value;
    
     var r3 = document.getElementById('weightage_value_3_15').value;
     document.getElementById('wx_3_15').value = parseFloatm(r2)*parseFloatm(r3);
      }

  //======================================16=====================    
     if (document.getElementById('weightage_value_4_16').value >=0)
       {
     var r2  = document.getElementById('reduced_score_4_16').value;
    
     var r3 = document.getElementById('weightage_value_4_16').value;
     document.getElementById('wx_4_16').value = parseFloatm(r2)*parseFloatm(r3);
      }

  //======================================17=====================    
     if (document.getElementById('weightage_value_4_17').value >=0)
       {
     var r2  = document.getElementById('reduced_score_4_17').value;
    
     var r3 = document.getElementById('weightage_value_4_17').value;
     document.getElementById('wx_4_17').value = parseFloatm(r2)*parseFloatm(r3);
      }

  //========================================18===================    
     if (document.getElementById('weightage_value_4_18').value >=0)
       {
     var r2  = document.getElementById('reduced_score_4_18').value;
    
     var r3 = document.getElementById('weightage_value_4_18').value;
     document.getElementById('wx_4_18').value = parseFloatm(r2)*parseFloatm(r3);
      }

  //==========================================19=================    
     if (document.getElementById('weightage_value_4_19').value >=0)
       {
     var r2  = document.getElementById('reduced_score_4_19').value;
    
     var r3 = document.getElementById('weightage_value_4_19').value;
     document.getElementById('wx_4_19').value = parseFloatm(r2)*parseFloatm(r3);
      }

  //============================================20===============    
     if (document.getElementById('weightage_value_5_20').value >=0)
       {
     var r2  = document.getElementById('reduced_score_5_20').value;
    
     var r3 = document.getElementById('weightage_value_5_20').value;
     document.getElementById('wx_5_20').value = parseFloatm(r2)*parseFloatm(r3);
      }

  //=======================================21====================    
     if (document.getElementById('weightage_value_5_21').value >=0)
       {
     var r2  = document.getElementById('reduced_score_5_21').value;
    
     var r3 = document.getElementById('weightage_value_5_21').value;
     document.getElementById('wx_5_21').value = parseFloatm(r2)*parseFloatm(r3);
      }

  //==================================22=========================    
     if (document.getElementById('weightage_value_5_22').value >=0)
       {
     var r2  = document.getElementById('reduced_score_5_22').value;
    
     var r3 = document.getElementById('weightage_value_5_22').value;
     document.getElementById('wx_5_22').value = parseFloatm(r2)*parseFloatm(r3);
      }

  //===============================23============================    
     if (document.getElementById('weightage_value_5_23').value >=0)
       {
     var r2  = document.getElementById('reduced_score_5_23').value;
    
     var r3 = document.getElementById('weightage_value_5_23').value;
     document.getElementById('wx_5_23').value = parseFloatm(r2)*parseFloatm(r3);
      }

  //================================24===========================    
     if (document.getElementById('weightage_value_5_24').value >=0)
       {
     var r2  = document.getElementById('reduced_score_5_24').value;
    
     var r3 = document.getElementById('weightage_value_5_24').value;
     document.getElementById('wx_5_24').value = parseFloatm(r2)*parseFloatm(r3);
      }

  //==================================25=========================    
     if (document.getElementById('weightage_value_5_25').value >=0)
       {
     var r2  = document.getElementById('reduced_score_5_25').value;
    
     var r3 = document.getElementById('weightage_value_5_25').value;
     document.getElementById('wx_5_25').value = parseFloatm(r2)*parseFloatm(r3);
      }

  //=================================26==========================    
     if (document.getElementById('weightage_value_6_26').value >=0)
       {
     var r2  = document.getElementById('reduced_score_6_26').value;
    
     var r3 = document.getElementById('weightage_value_6_26').value;
     document.getElementById('wx_6_26').value = parseFloatm(r2)*parseFloatm(r3);
      }
//sum_actual_score();
//average_outof_10();
//sum_weightage();
sum_wx();
grade_point();
}

function sum_actual_score()
{

var sum_actual_score_1 =parseFloatm((document.getElementById("actualscore_1_1").value)) + parseFloatm((document.getElementById("actualscore_1_2").value))+ parseFloatm((document.getElementById("actualscore_1_3").value))+ parseFloatm((document.getElementById("actualscore_1_4").value));
   document.getElementById('sum_actual_score_1').value =sum_actual_score_1; 

var sum_actual_score_2 =parseFloatm((document.getElementById("actualscore_2_5").value)) + parseFloatm((document.getElementById("actualscore_2_6").value))+ parseFloatm((document.getElementById("actualscore_2_7").value))+ parseFloatm((document.getElementById("actualscore_2_8").value)) + parseFloatm((document.getElementById("actualscore_2_9").value)) + parseFloatm((document.getElementById("actualscore_2_10").value));
   document.getElementById('sum_actual_score_2').value =sum_actual_score_2;

var sum_actual_score_3 =parseFloatm((document.getElementById("actualscore_3_11").value)) + parseFloatm((document.getElementById("actualscore_3_12").value))+ parseFloatm((document.getElementById("actualscore_3_13").value))+ parseFloatm((document.getElementById("actualscore_3_14").value)) + parseFloatm((document.getElementById("actualscore_3_15").value));
   document.getElementById('sum_actual_score_3').value =sum_actual_score_3;

var sum_actual_score_4 =parseFloatm((document.getElementById("actualscore_4_16").value)) + parseFloatm((document.getElementById("actualscore_4_17").value))+ parseFloatm((document.getElementById("actualscore_4_18").value))+ parseFloatm((document.getElementById("actualscore_4_19").value));
   document.getElementById('sum_actual_score_4').value =sum_actual_score_4;

var sum_actual_score_5 =parseFloatm((document.getElementById("actualscore_5_20").value)) + parseFloatm((document.getElementById("actualscore_5_21").value))+ parseFloatm((document.getElementById("actualscore_5_22").value))+ parseFloatm((document.getElementById("actualscore_5_23").value)) + parseFloatm((document.getElementById("actualscore_5_24").value)) + parseFloatm((document.getElementById("actualscore_5_25").value));
   document.getElementById('sum_actual_score_5').value =sum_actual_score_5;

var sum_actual_score_6 =parseFloatm((document.getElementById("actualscore_6_26").value));
   document.getElementById('sum_actual_score_6').value =sum_actual_score_6;
}

function average_outof_10()
{

var sum_average_outof_10_1=parseFloatm((document.getElementById("reduced_score_1_1").value)) + parseFloatm((document.getElementById("reduced_score_1_2").value))+ parseFloatm((document.getElementById("reduced_score_1_3").value))+ parseFloatm((document.getElementById("reduced_score_1_4").value));
var average_outof_10_1 = sum_average_outof_10_1 / 4;
   document.getElementById('average_outof_10_1').value = average_outof_10_1;

var sum_average_outof_10_2=parseFloatm((document.getElementById("reduced_score_2_5").value)) + parseFloatm((document.getElementById("reduced_score_2_6").value))+ parseFloatm((document.getElementById("reduced_score_2_7").value))+ parseFloatm((document.getElementById("reduced_score_2_8").value)) + parseFloatm((document.getElementById("reduced_score_2_9").value)) + parseFloatm((document.getElementById("reduced_score_2_10").value));
var average_outof_10_2 = sum_average_outof_10_2 / 6;
   document.getElementById('average_outof_10_2').value = average_outof_10_2;

var sum_average_outof_10_3=parseFloatm((document.getElementById("reduced_score_3_11").value)) + parseFloatm((document.getElementById("reduced_score_3_12").value))+ parseFloatm((document.getElementById("reduced_score_3_13").value))+ parseFloatm((document.getElementById("reduced_score_3_14").value)) + parseFloatm((document.getElementById("reduced_score_3_15").value));
var average_outof_10_3 = sum_average_outof_10_3 / 5;
   document.getElementById('average_outof_10_3').value = average_outof_10_3;

var sum_average_outof_10_4=parseFloatm((document.getElementById("reduced_score_4_16").value)) + parseFloatm((document.getElementById("reduced_score_4_17").value))+ parseFloatm((document.getElementById("reduced_score_4_18").value))+ parseFloatm((document.getElementById("reduced_score_4_19").value));
var average_outof_10_4 = sum_average_outof_10_4 / 4;
   document.getElementById('average_outof_10_4').value = average_outof_10_4;

var sum_average_outof_10_5=parseFloatm((document.getElementById("reduced_score_5_20").value)) + parseFloatm((document.getElementById("reduced_score_5_21").value))+ parseFloatm((document.getElementById("reduced_score_5_22").value))+ parseFloatm((document.getElementById("reduced_score_5_23").value)) + parseFloatm((document.getElementById("reduced_score_5_24").value)) + parseFloatm((document.getElementById("reduced_score_5_25").value));
var average_outof_10_5 = sum_average_outof_10_5 / 6;
   document.getElementById('average_outof_10_5').value = average_outof_10_5;

var sum_average_outof_10_6=parseFloatm((document.getElementById("reduced_score_6_26").value));
var average_outof_10_6 = sum_average_outof_10_6 / 1;
   document.getElementById('average_outof_10_6').value = average_outof_10_6;
}

function sum_weightage() { 
  var sum_weightage_1 =parseFloatm((document.getElementById("weightage_value_1_1").value)) + parseFloatm((document.getElementById("weightage_value_1_2").value))+ parseFloatm((document.getElementById("weightage_value_1_3").value))+ parseFloatm((document.getElementById("weightage_value_1_4").value));
   document.getElementById('sum_weightage_1').value = sum_weightage_1;

var sum_weightage_2 =parseFloatm((document.getElementById("weightage_value_2_5").value)) + parseFloatm((document.getElementById("weightage_value_2_6").value))+ parseFloatm((document.getElementById("weightage_value_2_7").value))+ parseFloatm((document.getElementById("weightage_value_2_8").value)) + parseFloatm((document.getElementById("weightage_value_2_9").value)) + parseFloatm((document.getElementById("weightage_value_2_10").value));
   document.getElementById('sum_weightage_2').value = sum_weightage_2;

var sum_weightage_3 =parseFloatm((document.getElementById("weightage_value_3_11").value)) + parseFloatm((document.getElementById("weightage_value_3_12").value))+ parseFloatm((document.getElementById("weightage_value_3_13").value))+ parseFloatm((document.getElementById("weightage_value_3_14").value)) + parseFloatm((document.getElementById("weightage_value_3_15").value));
   document.getElementById('sum_weightage_3').value = sum_weightage_3;

  var sum_weightage_4 =parseFloatm((document.getElementById("weightage_value_4_16").value)) + parseFloatm((document.getElementById("weightage_value_4_17").value))+ parseFloatm((document.getElementById("weightage_value_4_18").value))+ parseFloatm((document.getElementById("weightage_value_4_19").value));
   document.getElementById('sum_weightage_4').value = sum_weightage_4;

var sum_weightage_5 =parseFloatm((document.getElementById("weightage_value_5_20").value)) + parseFloatm((document.getElementById("weightage_value_5_21").value))+ parseFloatm((document.getElementById("weightage_value_5_22").value))+ parseFloatm((document.getElementById("weightage_value_5_23").value)) + parseFloatm((document.getElementById("weightage_value_5_24").value)) + parseFloatm((document.getElementById("weightage_value_5_25").value));
   document.getElementById('sum_weightage_5').value = sum_weightage_5;

var sum_weightage_6 =parseFloatm((document.getElementById("weightage_value_6_26").value)); 
   document.getElementById('sum_weightage_6').value = sum_weightage_6;
}

function sum_wx() {
  var sum_wx_1 =parseFloatm((document.getElementById("wx_1_1").value)) + parseFloatm((document.getElementById("wx_1_2").value))+ parseFloatm((document.getElementById("wx_1_3").value))+ parseFloatm((document.getElementById("wx_1_4").value));
   document.getElementById('sum_wx_1').value = sum_wx_1; 

var sum_wx_2 =parseFloatm((document.getElementById("wx_2_5").value)) + parseFloatm((document.getElementById("wx_2_6").value))+ parseFloatm((document.getElementById("wx_2_7").value))+ parseFloatm((document.getElementById("wx_2_8").value))+ parseFloatm((document.getElementById("wx_2_9").value))+ parseFloatm((document.getElementById("wx_2_10").value));
   document.getElementById('sum_wx_2').value = sum_wx_2;

var sum_wx_3 =parseFloatm((document.getElementById("wx_3_11").value)) + parseFloatm((document.getElementById("wx_3_12").value))+ parseFloatm((document.getElementById("wx_3_13").value))+ parseFloatm((document.getElementById("wx_3_14").value))+ parseFloatm((document.getElementById("wx_3_15").value));
   document.getElementById('sum_wx_3').value = sum_wx_3;

  var sum_wx_4 =parseFloatm((document.getElementById("wx_4_16").value)) + parseFloatm((document.getElementById("wx_4_17").value))+ parseFloatm((document.getElementById("wx_4_18").value))+ parseFloatm((document.getElementById("wx_4_19").value));
   document.getElementById('sum_wx_4').value = sum_wx_4;

var sum_wx_5 =parseFloatm((document.getElementById("wx_5_20").value)) + parseFloatm((document.getElementById("wx_5_21").value))+ parseFloatm((document.getElementById("wx_5_22").value))+ parseFloatm((document.getElementById("wx_5_23").value))+ parseFloatm((document.getElementById("wx_5_24").value))+ parseFloatm((document.getElementById("wx_5_25").value));
   document.getElementById('sum_wx_5').value = sum_wx_5;
  
  var sum_wx_6 =parseFloatm((document.getElementById("wx_6_26").value));
   document.getElementById('sum_wx_6').value = sum_wx_6;
}
function grade_point() {
  var grade_point_1 = parseFloatm((document.getElementById("sum_wx_1").value)) / parseFloatm((document.getElementById("sum_weightage_1").value))
  document.getElementById('grade_point_1').value = grade_point_1; 

var grade_point_2 = parseFloatm((document.getElementById("sum_wx_2").value)) / parseFloatm((document.getElementById("sum_weightage_2").value))
  document.getElementById('grade_point_2').value = grade_point_2;

var grade_point_3 = parseFloatm((document.getElementById("sum_wx_3").value)) / parseFloatm((document.getElementById("sum_weightage_3").value))
  document.getElementById('grade_point_3').value = grade_point_3;

var grade_point_4 = parseFloatm((document.getElementById("sum_wx_4").value)) / parseFloatm((document.getElementById("sum_weightage_4").value))
  document.getElementById('grade_point_4').value = grade_point_4;

var grade_point_5 = parseFloatm((document.getElementById("sum_wx_5").value)) / parseFloatm((document.getElementById("sum_weightage_5").value))
  document.getElementById('grade_point_5').value = grade_point_5;

var grade_point_6 = parseFloatm((document.getElementById("sum_wx_6").value)) / parseFloatm((document.getElementById("sum_weightage_6").value))
  document.getElementById('grade_point_6').value = grade_point_6;  
}
$( document ).ready(function() {
sum_actual_score();  
average_outof_10();
sum_weightage();
sum_wx();
grade_point();
actualscore();
weightagevalue();
});

function parseFloatm(value) {
 	// body...
 	return value ===''?0:parseFloat(value); 
 } 


