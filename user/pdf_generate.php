<?php

/* include autoloader */
require_once 'newdompdf/autoload.inc.php';
//require_once 'dompdf/autoload.inc.php';



/* reference the Dompdf namespace */
use Dompdf\Dompdf;

/*
<style>
    *{ font-family: DejaVu Sans !important;}
    
    * { font-family: BZar_0, DejaVu Sans, sans-serif; }
    html, body { height: 100%; padding: 0; margin: 0; }
.quad { width: 50%; height: 50%; float: left; }
  </style> */


/* instantiate and use the dompdf class */
$dompdf = new Dompdf();

$html = ' 
<!DOCTYPE html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <style>
th {color:green;}
tbody {color:blue;}
tfoot {color:red;}

table, th, td,tr{
    border : 0.5px solid black;
}
.center {
   
    margin-left: 230;
    
    
}
.header,
.footer {
    width: 100%;
    text-align: center;
    position: fixed;
}
.header {
    top: 0px;
}
.footer {
    bottom: 0px;
}
.pagenum:before {
    content: counter(page);
}
p { color: blue; font-family:"Times-Roman", serif; font-style: normal; text-decoration: none; font-size: 8.5pt; margin:0pt; }

.l1 {
    margin-left: 20;
}

.l2 {
    margin-left: 50;
}
.l3 {
    margin-left: 230;
}
.l4 {
    margin-left: 115;
    color:red;
}

.l5 {
    margin-left: 210;
    color:red;
}

.l6 {
    margin-left: 150;
}
.l7 {
    margin-left: 130;
    color:red;
}
.l8 {
    margin-left: 130;
    color:red;
}



.symbol{ font-family: DejaVu Sans !important; font-style: normal; font-size: 12pt;}


.f_size{  font-size: 10pt; font-style: normal; }


.sign {
    font-family:"Times-Roman", serif;font-size: 13pt; font-style: bold;

}

.quad { width: 50%; height: 50%; float: left; }
</style>
   </head>
   <body>
      <table width="100%"  bgcolor="white">
         <tr>
            <th colspan="100%">
               <img src="./newdompdf/sdmcet.jpg" class="center" width="100" height="130" alt="sdmcet_Logo" /><br>
                  <font class="l1" >SDM COLLEGE OF ENGINEERING & TECHNOLOGY (AUTONOMOUS),DHARWAD</font>
               </th>
            </tr>
            <tr>
               <td   colspan="25%">
                  <b>Name</b>
               </td>
               <td  align="center"  colspan="75%">
                  <b>'.$_POST['name'].'</b>

               </td>
            </tr>
            <tr>
               <td    colspan="25%">
                  <b>Branch</b>
               </td>
               <td  align="center"  colspan="75%">
                  <b>'.$_POST['branch'].'</b>
               </td>
            </tr>
            <tr>
               <td  colspan="25%">
                  <b>Photo</b>
               </td>
               <td  align="center"  colspan="75%">
                  <img  src="./'.$_POST['pimage'].'" style="border-radius:50px" width="100" height="100" alt="Logo">
                  </td>
               </tr>
            </table>
            <div  class="footer">Page 
               <span class="pagenum"> <p> ' .$_POST['login_time'].' <br>Design & Develoved By Pradip Kumar Raushan</p></span>
            </div>
            <div style="page-break-before: always;"></div>
            <table style="width:100%">
               <tr >
                  <th colspan="6" bgcolor="#5D7B9D">
                     <font  class="l2"  color="#fff">CRITERIA '.$_POST['1'].'</font>
                  </th>
               </tr>
               <tr>
                  <th style="width:5%">SL No.</th>
                  <th style="width:40%">PARTICULARS</th>
                  <th style="width:15%"> ACTUAL SCORE </th>
                  <th style="width:10%">OUT OF 10(X)</th>
                  <th style="width:5%">WEIGHTAGE(W)</th>
                  <th style="width:25%">WX</th>
               </tr>
               <tbody>
                  <tr >
                     <td>'.$_POST['pid_1'].'</td>
                     <td>'.$_POST['1r1'].'</td>
                     <td>'.$_POST['actualscore_1_1'].'</td>
                     <td>'.$_POST['reduced_score_1_1'].'</td>
                     <td>'.$_POST['weightage_value_1_1'].'</td>
                     <td>'.$_POST['wx_1_1'].'</td>
                  </tr>
                  <tr >
                     <td>'.$_POST['pid_2'].'</td>
                     <td>'.$_POST['1r2'].'</td>
                     <td>'.$_POST['actualscore_1_2'].'</td>
                     <td>'.$_POST['reduced_score_1_2'].'</td>
                     <td>'.$_POST['weightage_value_1_2'].'</td>
                     <td>'.$_POST['wx_1_2'].'</td>
                  </tr>
                  <tr >
                     <td>'.$_POST['pid_3'].'</td>
                     <td>'.$_POST['1r3'].'</td>
                     <td>'.$_POST['actualscore_1_3'].'</td>
                     <td>'.$_POST['reduced_score_1_3'].'</td>
                     <td>'.$_POST['weightage_value_1_3'].'</td>
                     <td>'.$_POST['wx_1_3'].'</td>
                  </tr>
                  <tr >
                     <td>'.$_POST['pid_4'].'</td>
                     <td>'.$_POST['1r4'].'</td>
                     <td>'.$_POST['actualscore_1_4'].'</td>
                     <td>'.$_POST['reduced_score_1_4'].'</td>
                     <td>'.$_POST['weightage_value_1_4'].'</td>
                     <td>'.$_POST['wx_1_4'].'</td>
                  </tr>
               </tbody>
               <tfoot>
                  <tr>
                     <td colspan = "2" >TOTAL</td>
                     <td>A = '.$_POST['sum_actual_score_1'].'</td>
                     <td>AV ='.$_POST['average_outof_10_1'].'</td>
                     <td>
                        <font class="symbol">&Sigma;</font> W = '.$_POST['sum_weightage_1'].'
                     </td>
                     <td>
                        <font class="symbol">&Sigma;</font>WX = '.$_POST['sum_wx_1'].'
                     </td>
                  </tr>
                  <tr>
                     <td colspan = "4" >
               Criterion Grade Point Average (
                        <font class="symbol">&Sigma;</font> WX / 
                        <font class="symbol">&Sigma;</font> W ) = 
               
                     </td>
                     <td colspan="2">'.$_POST['grade_point_1'].'</td>
                  </tr>


               </tfoot>
               
            </table>
<div style="page-break-before: always;"></div>
             <table>
   <tr>
     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">1 - 1</font><br><img  src="'.$_POST['image_1_1'].'"  width="355" height="405" ></th>

     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">1 - 2</font><br><img  src="'.$_POST['image_1_2'].'"  width="355" height="405" ></th>
  </tr>
  <br><br><br>
  <tr>
     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">1 - 3</font><br><img  src="'.$_POST['image_1_3'].'"  width="355" height="405" ></th>
     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">1 - 4</font><br><img  src="'.$_POST['image_1_4'].'"  width="355" height="405"></th>
  </tr>
</table>
            <div style="page-break-before: always;"></div>

            <table style="width:100%">
               <tr >
                  <th colspan="6" bgcolor="#5D7B9D">
                     <font class="l2" color="#fff">CRITERIA '.$_POST['2'].'</font>
                  </th>
               </tr>
               <tr>
                  <th style="width:5%">SL No.</th>
                  <th style="width:40%">PARTICULARS</th>
                  <th style="width:15%"> ACTUAL SCORE </th>
                  <th style="width:10%">OUT OF 10(X)</th>
                  <th style="width:5%">WEIGHTAGE(W)</th>
                  <th style="width:25%">WX</th>
               </tr>
               <tr >
                  <td>'.$_POST['pid_5'].'</td>
                  <td>'.$_POST['2r5'].'</td>
                  <td>'.$_POST['actualscore_2_5'].'</td>
                  <td>'.$_POST['reduced_score_2_5'].'</td>
                  <td>'.$_POST['weightage_value_2_5'].'</td>
                  <td>'.$_POST['wx_2_5'].'</td>
               </tr>
               <tr >
                  <td>'.$_POST['pid_6'].'</td>
                  <td>'.$_POST['2r6'].'</td>
                  <td>'.$_POST['actualscore_2_6'].'</td>
                  <td>'.$_POST['reduced_score_2_6'].'</td>
                  <td>'.$_POST['weightage_value_2_6'].'</td>
                  <td>'.$_POST['wx_2_6'].'</td>
               </tr>
               <tr >
                  <td>'.$_POST['pid_7'].'</td>
                  <td>'.$_POST['2r7'].'</td>
                  <td>'.$_POST['actualscore_2_7'].'</td>
                  <td>'.$_POST['reduced_score_2_7'].'</td>
                  <td>'.$_POST['weightage_value_2_7'].'</td>
                  <td>'.$_POST['wx_2_7'].'</td>
               </tr>
               <tr >
                  <td>'.$_POST['pid_8'].'</td>
                  <td>'.$_POST['2r8'].'</td>
                  <td>'.$_POST['actualscore_2_8'].'</td>
                  <td>'.$_POST['reduced_score_2_8'].'</td>
                  <td>'.$_POST['weightage_value_2_8'].'</td>
                  <td>'.$_POST['wx_2_8'].'</td>
               </tr>
               <tr >
                  <td>'.$_POST['pid_9'].'</td>
                  <td>'.$_POST['2r9'].'</td>
                  <td>'.$_POST['actualscore_2_9'].'</td>
                  <td>'.$_POST['reduced_score_2_9'].'</td>
                  <td>'.$_POST['weightage_value_2_9'].'</td>
                  <td>'.$_POST['wx_2_9'].'</td>
               </tr>
               <tr >
                  <td>'.$_POST['pid_10'].'</td>
                  <td>'.$_POST['2r10'].'</td>
                  <td>'.$_POST['actualscore_2_10'].'</td>
                  <td>'.$_POST['reduced_score_2_10'].'</td>
                  <td>'.$_POST['weightage_value_2_10'].'</td>
                  <td>'.$_POST['wx_2_10'].'</td>
               </tr>
               <tfoot>
                  <tr>
                     <td colspan = "2">TOTAL</td>
                     <td>B = '.$_POST['sum_actual_score_2'].'</td>
                     <td>AV ='.$_POST['average_outof_10_2'].'</td>
                     <td>
                        <font class="symbol">&Sigma;</font> W = '.$_POST['sum_weightage_2'].'
                     </td>
                     <td>
                        <font class="symbol">&Sigma;</font>WX = '.$_POST['sum_wx_2'].'
                     </td>
                  </tr>
                  <tr>
                     <td colspan = "4">Criterion Grade Point Average (
                        <font class="symbol">&Sigma;</font> WX / 
                        <font class="symbol">&Sigma;</font> W ) = 
                     </td>
                     <td colspan="2">'.$_POST['grade_point_2'].'</td>
                  </tr>
               </tfoot>
            </table>
            <div style="page-break-before: always;"></div>
             <table>
   <tr>
     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">2 - 5</font><br><img  src="'.$_POST['image_2_5'].'"  width="355" height="405" ></th>

     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">2 - 6</font><br><img  src="'.$_POST['image_2_6'].'"  width="355" height="405" ></th>
  </tr>
  <br><br><br>
  <tr>
     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">2 - 7</font><br><img  src="'.$_POST['image_2_7'].'"  width="355" height="405" ></th>
     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">2 - 8</font><br><img  src="'.$_POST['image_2_8'].'"  width="355" height="405"></th>
  </tr>
  <tr>
     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">2 - 9</font><br><img  src="'.$_POST['image_2_9'].'"  width="355" height="405" ></th>
     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">2 - 10</font><br><img  src="'.$_POST['image_2_10'].'"  width="355" height="405"></th>
  </tr>
</table>
<div style="page-break-before: always;"></div>
            <table style="width:100%">
               <tr >
                  <th colspan="6" bgcolor="#5D7B9D">
                     <font class="l2" color="#fff">CRITERIA '.$_POST['3'].'</font>
                  </th>
               </tr>
               <tr>
                  <th style="width:5%">SL No.</th>
                  <th style="width:40%">PARTICULARS</th>
                  <th style="width:15%"> ACTUAL SCORE </th>
                  <th style="width:10%">OUT OF 10(X)</th>
                  <th style="width:5%">WEIGHTAGE(W)</th>
                  <th style="width:25%">WX</th>
               </tr>
               <tr >
                  <td>'.$_POST['pid_11'].'</td>
                  <td>'.$_POST['3r11'].'</td>
                  <td>'.$_POST['actualscore_3_11'].'</td>
                  <td>'.$_POST['reduced_score_3_11'].'</td>
                  <td>'.$_POST['weightage_value_3_11'].'</td>
                  <td>'.$_POST['wx_3_11'].'</td>
               </tr>
               <tr >
                  <td>'.$_POST['pid_12'].'</td>
                  <td>'.$_POST['3r12'].'</td>
                  <td>'.$_POST['actualscore_3_12'].'</td>
                  <td>'.$_POST['reduced_score_3_12'].'</td>
                  <td>'.$_POST['weightage_value_3_12'].'</td>
                  <td>'.$_POST['wx_3_12'].'</td>
               </tr>
               <tr >
                  <td>'.$_POST['pid_13'].'</td>
                  <td>'.$_POST['3r13'].'</td>
                  <td>'.$_POST['actualscore_3_13'].'</td>
                  <td>'.$_POST['reduced_score_3_13'].'</td>
                  <td>'.$_POST['weightage_value_3_13'].'</td>
                  <td>'.$_POST['wx_3_13'].'</td>
               </tr>
               <tr >
                  <td>'.$_POST['pid_14'].'</td>
                  <td>'.$_POST['3r14'].'</td>
                  <td>'.$_POST['actualscore_3_14'].'</td>
                  <td>'.$_POST['reduced_score_3_14'].'</td>
                  <td>'.$_POST['weightage_value_3_14'].'</td>
                  <td>'.$_POST['wx_3_14'].'</td>
               </tr>
               <tr >
                  <td>'.$_POST['pid_15'].'</td>
                  <td>'.$_POST['3r15'].'</td>
                  <td>'.$_POST['actualscore_3_15'].'</td>
                  <td>'.$_POST['reduced_score_3_15'].'</td>
                  <td>'.$_POST['weightage_value_3_15'].'</td>
                  <td>'.$_POST['wx_3_15'].'</td>
               </tr>
               <tfoot>
                  <tr>
                     <td colspan = "2">TOTAL</td>
                     <td>C ='.$_POST['sum_actual_score_3'].'</td>
                     <td>AV ='.$_POST['average_outof_10_3'].'</td>
                     <td>
                        <font class="symbol">&Sigma;</font>W = '.$_POST['sum_weightage_3'].'
                     </td>
                     <td>
                        <font class="symbol">&Sigma;</font>WX = '.$_POST['sum_wx_3'].'
                     </td>
                  </tr>
                  <tr>
                     <td colspan = "4">Criterion Grade Point Average (
                        <font class="symbol">&Sigma;</font> WX / 
                        <font class="symbol">&Sigma;</font> W ) = 
                     </td>
                     <td colspan="2">'.$_POST['grade_point_3'].'</td>
                  </tr>
               </tfoot>
            </table>
            <div style="page-break-before: always;"></div>
             <table>
   <tr>
     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">3 - 11</font><br><img  src="'.$_POST['image_3_11'].'"  width="355" height="405" ></th>

     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">3 - 12</font><br><img  src="'.$_POST['image_3_12'].'"  width="355" height="405" ></th>
  </tr>
  <br><br><br>
  <tr>
     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">3 - 13</font><br><img  src="'.$_POST['image_3_13'].'"  width="355" height="405" ></th>
     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">3 - 14</font><br><img  src="'.$_POST['image_3_14'].'"  width="355" height="405"></th>
  </tr>
   <tr>
     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">3 - 15</font><br><img  src="'.$_POST['image_3_15'].'"  width="355" height="405" ></th>
   <th style="width:100px;height:100px;border:2px solid black"><font class="l8"></font><br><img  src=""  width="355" height="405" ></th>
  </tr>
</table>
<div style="page-break-before: always;"></div>
            <table style="width:100%">
               <tr >
                  <th colspan="6" bgcolor="#5D7B9D">
                     <font class="l2" color="#fff">CRITERIA '.$_POST['4'].'</font>
                  </th>
               </tr>
               <tr>
                  <th style="width:5%">SL No.</th>
                  <th style="width:40%">PARTICULARS</th>
                  <th style="width:15%"> ACTUAL SCORE </th>
                  <th style="width:10%">OUT OF 10(X)</th>
                  <th style="width:5%">WEIGHTAGE(W)</th>
                  <th style="width:25%">WX</th>
               </tr>
               <tr >
                  <td>'.$_POST['pid_16'].'</td>
                  <td>'.$_POST['4r16'].'</td>
                  <td>'.$_POST['actualscore_4_16'].'</td>
                  <td>'.$_POST['reduced_score_4_16'].'</td>
                  <td>'.$_POST['weightage_value_4_16'].'</td>
                  <td>'.$_POST['wx_4_16'].'</td>
               </tr>
               <tr >
                  <td>'.$_POST['pid_17'].'</td>
                  <td>'.$_POST['4r17'].'</td>
                  <td>'.$_POST['actualscore_4_17'].'</td>
                  <td>'.$_POST['reduced_score_4_17'].'</td>
                  <td>'.$_POST['weightage_value_4_17'].'</td>
                  <td>'.$_POST['wx_4_17'].'</td>
               </tr>
               <tr >
                  <td>'.$_POST['pid_18'].'</td>
                  <td>'.$_POST['4r18'].'</td>
                  <td>'.$_POST['actualscore_4_18'].'</td>
                  <td>'.$_POST['reduced_score_4_18'].'</td>
                  <td>'.$_POST['weightage_value_4_18'].'</td>
                  <td>'.$_POST['wx_4_18'].'</td>
               </tr>
               <tr >
                  <td>'.$_POST['pid_19'].'</td>
                  <td>'.$_POST['4r19'].'</td>
                  <td>'.$_POST['actualscore_4_19'].'</td>
                  <td>'.$_POST['reduced_score_4_19'].'</td>
                  <td>'.$_POST['weightage_value_4_19'].'</td>
                  <td>'.$_POST['wx_4_19'].'</td>
               </tr>
               <tfoot>
                  <tr>
                     <td colspan = "2">TOTAL</td>
                     <td>D ='.$_POST['sum_actual_score_4'].'</td>
                     <td>AV ='.$_POST['average_outof_10_4'].'</td>
                     <td>
                        <font class="symbol">&Sigma;</font>W ='.$_POST['sum_weightage_4'].'
                     </td>
                     <td>
                        <font class="symbol">&Sigma;</font>WX ='.$_POST['sum_wx_4'].'
                     </td>
                  </tr>
                  <tr>
                     <td colspan = "4">Criterion Grade Point Average (
                        <font class="symbol">&Sigma;</font> WX / 
                        <font class="symbol">&Sigma;</font> W ) = 
                     </td>
                     <td colspan="2">'.$_POST['grade_point_4'].'</td>
                  </tr>
               </tfoot>
            </table>
            <div style="page-break-before: always;"></div>
             <table>
   <tr>
     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">4 - 16</font><br><img  src="'.$_POST['image_4_16'].'"  width="355" height="405" ></th>

     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">4 - 17</font><br><img  src="'.$_POST['image_4_17'].'"  width="355" height="405" ></th>
  </tr>
  <br><br><br>
  <tr>
     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">4 - 18</font><br><img  src="'.$_POST['image_4_18'].'"  width="355" height="405" ></th>
     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">4 - 19</font><br><img  src="'.$_POST['image_4_19'].'"  width="355" height="405"></th>
  </tr>
</table>
            <div style="page-break-before: always;"></div>
            <table style="width:100%">
               <tr >
                  <th colspan="6" bgcolor="#5D7B9D">
                     <font class="l2" color="#fff">CRITERIA '.$_POST['5'].'</font>
                  </th>
               </tr>
               <tr>
                  <th style="width:5%">SL No.</th>
                  <th style="width:35%">PARTICULARS</th>
                  <th style="width:10%"> ACTUAL SCORE </th>
                  <th style="width:10%">OUT OF 10(X)</th>
                  <th style="width:10%">WEIGHTAGE(W)</th>
                  <th style="width:30%">WX</th>
               </tr>
               <tr >
                  <td>'.$_POST['pid_20'].'</td>
                  <td>'.$_POST['5r20'].'</td>
                  <td>'.$_POST['actualscore_5_20'].'</td>
                  <td>'.$_POST['reduced_score_5_20'].'</td>
                  <td>'.$_POST['weightage_value_5_20'].'</td>
                  <td>'.$_POST['wx_5_20'].'</td>
               </tr>
               <tr >
                  <td>'.$_POST['pid_21'].'</td>
                  <td>'.$_POST['5r21'].'</td>
                  <td>'.$_POST['actualscore_5_21'].'</td>
                  <td>'.$_POST['reduced_score_5_21'].'</td>
                  <td>'.$_POST['weightage_value_5_21'].'</td>
                  <td>'.$_POST['wx_5_21'].'</td>
               </tr>
               <tr >
                  <td>'.$_POST['pid_22'].'</td>
                  <td>'.$_POST['5r22'].'</td>
                  <td>'.$_POST['actualscore_5_22'].'</td>
                  <td>'.$_POST['reduced_score_5_22'].'</td>
                  <td>'.$_POST['weightage_value_5_22'].'</td>
                  <td>'.$_POST['wx_5_22'].'</td>
               </tr>
               <tr >
                  <td>'.$_POST['pid_23'].'</td>
                  <td>'.$_POST['5r23'].'</td>
                  <td>'.$_POST['actualscore_5_23'].'</td>
                  <td>'.$_POST['reduced_score_5_23'].'</td>
                  <td>'.$_POST['weightage_value_5_23'].'</td>
                  <td>'.$_POST['wx_5_23'].'</td>
               </tr>
               <tr >
                  <td>'.$_POST['pid_24'].'</td>
                  <td>'.$_POST['5r24'].'</td>
                  <td>'.$_POST['actualscore_5_24'].'</td>
                  <td>'.$_POST['reduced_score_5_24'].'</td>
                  <td>'.$_POST['weightage_value_5_24'].'</td>
                  <td>'.$_POST['wx_5_24'].'</td>
               </tr>
               <tr >
                  <td>'.$_POST['pid_25'].'</td>
                  <td>'.$_POST['5r25'].'</td>
                  <td>'.$_POST['actualscore_5_25'].'</td>
                  <td>'.$_POST['reduced_score_5_25'].'</td>
                  <td>'.$_POST['weightage_value_5_25'].'</td>
                  <td>'.$_POST['wx_5_25'].'</td>
               </tr>
               <tfoot>
                  <tr>
                     <td colspan = "2">TOTAL</td>
                     <td>E ='.$_POST['sum_actual_score_5'].'</td>
                     <td>AV ='.$_POST['average_outof_10_5'].'</td>
                     <td>
                        <font class="symbol">&Sigma;</font>W = '.$_POST['sum_weightage_5'].'
                     </td>
                     <td>
                        <font class="symbol">&Sigma;</font>WX = '.$_POST['sum_wx_5'].'
                     </td>
                  </tr>
                  <tr>
                     <td colspan = "4">Criterion Grade Point Average (
                        <font class="symbol">&Sigma;</font> WX / 
                        <font class="symbol">&Sigma;</font> W ) = 
                     </td>
                     <td colspan="2">'.$_POST['grade_point_5'].'</td>
                  </tr>
               </tfoot>
            </table>
            <div style="page-break-before: always;"></div>
             <table>
   <tr>
     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">5 - 20</font><br><img  src="'.$_POST['image_5_20'].'"  width="355" height="405" ></th>

     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">5 - 21</font><br><img  src="'.$_POST['image_5_21'].'"  width="355" height="405" ></th>
  </tr>
  <br><br><br>
  <tr>
     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">5 - 22</font><br><img  src="'.$_POST['image_5_22'].'"  width="355" height="405" ></th>
     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">5 - 23</font><br><img  src="'.$_POST['image_5_23'].'"  width="355" height="405"></th>
  </tr>
  <tr>
     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">5 - 24</font><br><img  src="'.$_POST['image_5_24'].'"  width="355" height="405" ></th>
     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">5 - 25</font><br><img  src="'.$_POST['image_5_25'].'"  width="355" height="405"></th>
  </tr>
</table>
<div style="page-break-before: always;"></div>
            <table style="width:100%">
               <tr >
                  <th colspan="6" bgcolor="#5D7B9D">
                     <font class="l2" color="#fff">CRITERIA '.$_POST['6'].'</font>
                  </th>
               </tr>
               <tr>
                  <th style="width:5%">SL No.</th>
                  <th style="width:40%">PARTICULARS</th>
                  <th style="width:15%"> ACTUAL SCORE </th>
                  <th style="width:10%">OUT OF 10(X)</th>
                  <th style="width:5%">WEIGHTAGE(W)</th>
                  <th style="width:25%">WX</th>
               </tr>
               <tr >
                  <td>'.$_POST['pid_26'].'</td>
                  <td>'.$_POST['6r26'].'</td>
                  <td>'.$_POST['actualscore_6_26'].'</td>
                  <td>'.$_POST['reduced_score_6_26'].'</td>
                  <td>'.$_POST['weightage_value_6_26'].'</td>
                  <td>'.$_POST['wx_6_26'].'</td>
               </tr>
               <tfoot>
                  <tr>
                     <td colspan = "2">TOTAL</td>
                     <td>F ='.$_POST['sum_actual_score_6'].'</td>
                     <td>AV ='.$_POST['average_outof_10_6'].'</td>
                     <td>
                        <font class="symbol">&Sigma;</font>W = '.$_POST['sum_weightage_6'].'
                     </td>
                     <td>
                        <font class="symbol">&Sigma;</font>WX = '.$_POST['sum_wx_6'].'
                     </td>
                  </tr>
                  <tr>
                     <td colspan = "4">Criterion Grade Point Average (
                        <font class="symbol">&Sigma;</font> WX / 
                        <font class="symbol">&Sigma;</font> W ) = 
                     </td>
                     <td colspan="2">'.$_POST['grade_point_6'].'</td>
                  </tr>
               </tfoot>
            </table>
            <div style="page-break-before: always;"></div>

                       <table>
   <tr>
     <th style="width:100px;height:100px;border:2px solid black"><font class="l8">6 - 26</font><br><img  src="'.$_POST['image_6_26'].'"  width="355" height="405" ></th>

    
  </tr>
  
 
</table>
  
            <div style="page-break-before: always;"></div>


            <h3 class="l4">Any significant contribution made/proposed to be done</h3>

            <table style="width:100%;height:50%">







            </table>
            


            <div style="page-break-before: always;"></div>
  

            <h2 class="l3">PART B</h2>
            <h3 class="l4">OVERALL ASSESSMENT BY HOD and HOI</h3>
            <table   style="width:100%">
               <tr>
                  <th  style="width:75%">PARTICULARS</th>
                  <th style="width:25%"> ACTUAL SCORE </th>
               </tr>
               <tbody>
                  <tr>
                     <td>
                          Discharging the duties / additional responsibilities in the departmental activities given by HOD [out of 50 marks](entry by HOD), (for HOD entry by HOI)
                     </td>
                     <td></td>
                  </tr>
                  <tr>
                     <td>
                         Any additional responsibility assigned by HOI [out of 50 marks] (filled by HOI)
                     </td>
                     <td></td>
                  </tr>
               </tbody>
               <tfoot>
                  <tr>
                     <td>
                                                        TOTAL
                                                  </td>
                     <td></td>
                  </tr>
               </tfoot>
            </table>
            <br>
               <b class="l3">Summary</b>
               <br>
                  <table style="width:100%">
                     <tr>
                        <th style="width:5%">SL No.</th>
                        <th style="width:40%">Category
                                                     PART A
                                                </th>
                        <th style="width:15%"> ACTUAL SCORE </th>
                        <th style="width:10%">OUT OF 10(X)</th>
                        <th style="width:5%">WEIGHTAGE(W)</th>
                        <th style="width:25%">WX</th>
                     </tr>
                     <tbody>
                        <tr >
                           <td>1.</td>
                           <td>Academic</td>
                           <td>A=</td>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr >
                           <td>2.</td>
                           <td>Academic support </td>
                           <td>B=</td>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr >
                           <td>3.</td>
                           <td>Research </td>
                           <td>C=</td>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr >
                           <td>4.</td>
                           <td>Extension and consultancy </td>
                           <td>D=</td>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr >
                           <td>5.</td>
                           <td>Academic growth </td>
                           <td>E=</td>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr >
                           <td>6.</td>
                           <td>Governance and leadership </td>
                           <td>F=</td>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                     </tbody>
                     <tfoot>
                        <tr>
                           <td colspan = "2">TOTAL Score</td>
                           <td>G =</td>
                           <td>------------</td>
                           <td>
                              <font class="symbol">&Sigma;</font>W = 
                           </td>
                           <td>
                              <font class="symbol">&Sigma;</font>WX = 
                           </td>
                        </tr>
                        <tr>
                           <td colspan = "4">Over all CGPA out of 10 (
                              <font class="symbol">&Sigma;</font> WX / 
                              <font class="symbol">&Sigma;</font> W ) = 
                           </td>
                           <td colspan="2"></td>
                        </tr>
                     </tfoot>
                  </table>
                  <h3 class="l3">PBSA GRADING
                     <h3>
                        <table style="width:100%">
                           <tr>
                              <th style="width:30%">SL No.</th>
                              <th style="width:40%">Over all CGPA out of 10
                                               
                                                </th>
                              <th style="width:30%"> Grade G
                                                 
                                                 </th>
                           </tr>
                           <tbody class="f_size">
                              <tr >
                                 <td>1</td>
                                 <td >
                                    <font class ="l2">9.6 - 10</font>
                                 </td>
                                 <td>A++</td>
                              </tr>
                              <tr >
                                 <td>2</td>
                                 <td>
                                    <font class ="l2">8.6 - 9.5</font>
                                 </td>
                                 <td>A+</td>
                              </tr>
                              <tr >
                                 <td>3</td>
                                 <td>
                                    <font class ="l2">7.6 - 8.5</font>
                                 </td>
                                 <td>A</td>
                              </tr>
                              <tr >
                                 <td>4</td>
                                 <td>
                                    <font class ="l2">7.1 - 7.5</font>
                                 </td>
                                 <td>B++</td>
                              </tr>
                              <tr >
                                 <td>5</td>
                                 <td>
                                    <font class ="l2">6.6 - 7</font>
                                 </td>
                                 <td>B+</td>
                              </tr>
                              <tr >
                                 <td>6</td>
                                 <td>
                                    <font class ="l2">6.1 - 6.5</font>
                                 </td>
                                 <td>B</td>
                              </tr>
                              <tr >
                                 <td>7</td>
                                 <td>
                                    <font class ="l2">5.6 - 6</font>
                                 </td>
                                 <td>C++</td>
                              </tr>
                              <tr >
                                 <td>8</td>
                                 <td>
                                    <font class ="l2">5.1 - 5.5</font>
                                 </td>
                                 <td>C+</td>
                              </tr>
                              <tr >
                                 <td>9</td>
                                 <td>
                                    <font class ="l2">Less than 5</font>
                                 </td>
                                 <td>C</td>
                              </tr>
                           </tbody>
                        </table>
                        <div style="page-break-before: always;"></div>

                        <h3 class="l5"> GRADE OBTAINED  </h3><br><br>
                  
                  <table  class="l6">
                               <tr>
                                   
                                   <th style="width:25%;height:7%">Actual score G</th>
                                   <th style="width:25%;height:7%">Over all CGPA</th>
                                   <th style="width:25%;height:7%">Grade obtained</th>
                                 </tr>

                                <tr>

                                     <td style="width:25%;height:8%"></td>
                                     <td style="width:25%;height:8%"></td>
                                     <td style="width:25%;height:8%"></td>



                                </tr>    

                     </table>  <br><br><br><br>               

                         <h3 class="l7">OVERALL ASSESSMENT BY HOD and HOI</h3><br><br>

                         <table  class="l5">
                           <tr>
                                   
                                   <th style="width:20%;height:7%">Actual score out of 100</th>

                            </tr>

                                <tr>

                                     <td style="width:20%;height:8%"></td>
                                 </tr>
                             </table> <br><br><br><br><br><br><br><br><br><br><br><br><br>
<pre class="sign">Signature of the staff                                       Signature of HOD                                   Signature of  HOI</pre>
                     </body>
                  </html> ';

$dompdf->loadHtml($html);

/* Render the HTML as PDF */
$dompdf->render();

/* Output the generated PDF to Browser */
$dompdf->stream('document');

?>