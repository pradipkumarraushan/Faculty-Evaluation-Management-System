<?php
include ('../connection.php');

if (!isset($_SESSION["user"]))
    {
    echo 'Please login to view this page!';
    header('Location: login_view.php');
    die();
    }

?>
    <link rel='stylesheet' id='iworks_position-css'  href='../css/iworks_position.min.css' type='text/css' media='handheld, projection, screen' />
    <script type='text/javascript' src='../js/iworks_position.min.js'></script>

    <div class="form-group">

        <h1 align="center">Preview & Generate PDF</h1>
	<form action="pdf_generate.php" method="POST">


<?php date_default_timezone_set("Asia/Kolkata");
                  $login_time=date('d-m-Y H:i:s'); ?>
      
<input type="text" name="login_time" value="<?php
echo $login_time ?>" hidden="true">

<input type="hidden" name="pimage" value="../images/<?php echo $_SESSION['user'];?>/<?php echo $row['image'];?>">

<!-- =================================================Main Table================================================================== -->

            <table class=" table-bordered "  >

            <tr >
            <td>
                        <b><?php echo @$err; ?></b>
                        </td>
                </tr>
  <!-- =====================================Printing User's Name And His Branch ================================================= -->
                <tr >
                    <td bgcolor="black">
                        
                        <h3 align="center" style="color: white">NAME : <?php
echo $users['name']; ?></h3>

<input type="hidden" name="name"  value="<?php
echo $users['name']; ?> ">
                    </td> 
                </tr> 



                <tr>
                    <td bgcolor="black">
                        <h3 align="center" align="center" style="color: white">DEPARTMENT :   <?php
echo $users['branch']; ?></h3>


<input type="hidden" name="branch"  value="<?php
echo $users['branch']; ?>">
                    </td>

                </tr> 

               
                <tr><td >
                    <table  class="table table-bordered ">



<!-- ==================================================for loop of criteria ====================================================== -->
                        <?php
$sqlcriteria = mysqli_query($conn, "select * from criteria");



while ($row = $sqlcriteria->fetch_assoc())
    { ?>
                                <tr >
                                    <td bgcolor="darkred" >
                                        
 <!-- ==================================Printing Each Criteria Name =============================== -->                                      
                                        
                                        <b style="padding-left: 250pt;padding-right: 100pt;text-indent: 0pt;text-align: center; color: white;">CRITERIA 
                                            <?php  echo $row['criteria_name']; ?> 
                                        </b>

                                        <input type="hidden" size="50" value="<?php  echo $row['criteria_name']; ?>" name="<?php
        echo $row["criteria_id"]; ?>">
                                    </td>
                                    
                                </tr>
                                    <tr >
                                        <td>
                                        <table style="width:100%" class="table table-bordered">

                                     <thead  bgcolor="#5D7B9D">
                                            <tr >
                                                 <th style="width:5%"><font color="#fff">SL NO</font></th>
                                                <th style="width:35%"><font color="#fff">PARTICULARS</font></th>
                                                <th style="width:10%"><font color="#fff">ACTUAL SCORE</font></th>
                                                <th style="width:10%"><font color="#fff">OUT OF 10 (X)</font></th>
                                                <th style="width:10%"><font color="#fff">WEIGHTAGE ( W )</font></th>
                                                <th style="width:10%"><font color="#fff">WX</font></th>
                                                <th style="width:20%"><font color="#fff">IMAGE</font></th>
                                                
                                               
                                                
                                            </tr>
                                        </thead>
<!-- =======================================foreach of prticular table==================================================== -->

                                            <?php

    $sqlpart = mysqli_query($conn, "SELECT  P.particular_id ,P.particular_text, P.criteria_id ,F.actual_score,F.reduced_score, W.weightage_value, F.wx,F.image
FROM particular P 
LEFT  JOIN weightage W 
ON P.particular_id=W.particular_id and P.criteria_id=W.criteria_id 
LEFT JOIN  facultyeval F
ON P.particular_id=F.particular_id and P.criteria_id=F.criteria_id  and F.email_id= '" .$users['email'] . "' 
where P.criteria_id = '" . $row["criteria_id"] . "'   ");

   

    while ($row1 = $sqlpart->fetch_assoc())
        { ?>


<!-- ==============================================Printing Each Particular Text ========================================= -->

                                                    <tr>
                                                    <td bgcolor="#5D7B9D">
                                                        
               <b><font color="white"><?php echo $row1['particular_id']; ?> </font>  <b>


                                                    </td>



                                                        <td>
          
          <?php echo $row1['particular_text']; ?>  
       
                                                        </td>

                                                        <input type="hidden"  name="<?php
        echo $row["criteria_id"]; ?>r<?php echo $row1["particular_id"]; ?>" value="<?php
        echo $row1['particular_text']; ?>"  >


        <input type="hidden" name="pid_<?php echo $row1["particular_id"]; ?>" value="<?php
        echo $row1['particular_id']; ?>"> 

<!-- ============================================== Input Actual Score ====================================================== -->

                                                        <td style="padding-top: 20pt; text-indent: 0pt;text-align: center;">
    <input value="<?php
        echo $row1["actual_score"]; ?>" class="" type="number" name="actualscore_<?php
        echo $row["criteria_id"]; ?>_<?php
        echo $row1["particular_id"]; ?>" min="0" max="100" id="actualscore_<?php
        echo $row["criteria_id"]; ?>_<?php
        echo $row1["particular_id"]; ?>" readonly style="border:none" >
                                                    
                                                            
                                                        </td>
<!-- ==============================================Displaying Reduced Score  ========================================= --> 
                                                        
                                                        <td  style="padding-top: 20pt; padding-left: -250pt;padding-right: -100pt;text-indent: 0pt;text-align: center; ">


<input value="<?php
        echo $row1["reduced_score"]; ?>" class="out0f_10 " id="reduced_score_<?php
        echo $row["criteria_id"]; ?>_<?php
        echo $row1["particular_id"]; ?>" type="number" name="reduced_score_<?php
        echo $row["criteria_id"]; ?>_<?php
        echo $row1["particular_id"]; ?>" min="0" max="10" readonly style="border:none; "  />
                                                        </td>
<!-- ==============================================Displaying weightage Value ========================================= -->
                                                        <td style="padding-top: 20pt; padding-left: -250pt;padding-right: -100pt;text-indent: 0pt;text-align: center; ">
    <input value="<?php
        echo $row1["weightage_value"]; ?>" class="weightage_value" id="weightage_value_<?php
        echo $row["criteria_id"]; ?>_<?php
        echo $row1["particular_id"]; ?>" type= "number" name ="weightage_value_<?php
        echo $row["criteria_id"]; ?>_<?php
        echo $row1["particular_id"]; ?>"  min="0" max="100" readonly style="border:none"  />
                                                        </td>
<!-- ==============================================Displaying     WX   Value ========================================= -->
                                                        <td style="padding-top: 20pt; text-indent: 0pt;text-align: right; ">

<input value="<?php
        echo $row1["wx"]; ?>" class="wx" id="wx_<?php
        echo $row["criteria_id"]; ?>_<?php
        echo $row1["particular_id"]; ?>" type= "number" name ="wx_<?php
        echo $row["criteria_id"]; ?>_<?php
        echo $row1["particular_id"]; ?>" readonly style="border:none"/>
                                                        </td>

<!-- ==============================================Taking Image ========================================================= -->


<!-- POST IMAGE -->

<input value="./images/<?php echo $_SESSION['user'];?>/<?php
        echo $row1['image']; ?>" type="hidden" name="image_<?php
        echo $row["criteria_id"]; ?>_<?php
        echo $row1["particular_id"]; ?>" /> 




<!--Close post image -->

<td>
<img id="myImg_column5_<?php
        echo $row["criteria_id"]; ?>_<?php
        echo $row1["particular_id"]; ?>"  class="thumbnail" src="images/<?php echo $_SESSION['user'];?>/<?php
        echo $row1['image']; ?>" width="100" height="100"/>
        <!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg_column5_<?php
        echo $row["criteria_id"]; ?>_<?php
        echo $row1["particular_id"]; ?>');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
    <style>
#myImg_column5_<?php
        echo $row["criteria_id"]; ?>_<?php
        echo $row1["particular_id"]; ?> {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg_column5_<?php
        echo $row["criteria_id"]; ?>_<?php
        echo $row1["particular_id"]; ?>:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 10%;
    right: 10%;
    color: red;
    font-size: 80px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: red;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
</style>
    </td>
                                                        
                                                        </td>
                                                    </tr>

                                                    <?php
        }

?>          
                                                

<!-- ========================================================== TFOOT =============================================== -->

                                                <tfoot>
                                                    <tr >
                                                        <td bgcolor="#5D7B9D" colspan = "2">

                                                            <b><font color="#fff">TOTAL</font></b>


                                                        </td>
                                                        <td>
                                                            <b>A= 
<input value="sum_actual_score_<?php
    echo $row["criteria_id"]; ?>" class="sum_actual_score_<?php
    echo $row["criteria_id"]; ?>" id="sum_actual_score_<?php
    echo $row["criteria_id"]; ?>" type="number" name="sum_actual_score_<?php
    echo $row["criteria_id"]; ?>" readonly style="border:none">
                                                       </b>
                                                        </td>
                                                        <td>


                                                        <b>Ave.X= 

<input value="average_outof_10_<?php
    echo $row["criteria_id"]; ?>" class="average_outof_10_<?php
    echo $row["criteria_id"]; ?>" type="number" id="average_outof_10_<?php
    echo $row["criteria_id"]; ?>" name="average_outof_10_<?php
    echo $row["criteria_id"]; ?>" readonly style="border:none">
                                                        </b>
                                                    </td>
                                                    <td >
                                                        <b>∑W= 

<input value="sum_weightage_<?php
    echo $row["criteria_id"]; ?>" class="sum_weightage_<?php
    echo $row["criteria_id"]; ?>" type="number" id="sum_weightage_<?php
    echo $row["criteria_id"]; ?>" name="sum_weightage_<?php
    echo $row["criteria_id"]; ?>" readonly style="border:none">
                                                      </b>
                                                    </td>
                                                    <td >
                                                        <b>∑WX=
<input value="sum_wx_<?php
    echo $row["criteria_id"]; ?>" class="sum_wx_<?php
    echo $row["criteria_id"]; ?>"  type="number" id="sum_wx_<?php
    echo $row["criteria_id"]; ?>" name="sum_wx_<?php
    echo $row["criteria_id"]; ?>" readonly style="border:none">
                                                        </b>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td bgcolor="#5D7B9D" colspan = "4" >

                                                        <b><font color="#fff">Criterion Grade Point Average ∑WX/∑W = </font></b>

                                                      </td>
                                                    
                                                      <td colspan="2" >
                                                   <b>

<input value="grade_point_<?php
    echo $row["criteria_id"]; ?>"  class="grade_point_<?php
    echo $row["criteria_id"]; ?>" type="number" id="grade_point_<?php
    echo $row["criteria_id"]; ?>" name="grade_point_<?php
    echo $row["criteria_id"]; ?>" readonly style="border:none">
                                               </b>

                                            </td>

                                        </tr>

                                    </tfoot>


                                </table> <!-- PARTICULARS TABLE CLOSE-->

                  
                  
                 
               
                                    
                                    </td>

                                    </tr>

                                <?php
    }

?>
                            </table> <!-- CRITERIA TABLE CLOSE-->
                            </td>
                        </tr>
                    </table> <!-- MAIN TABLE (NAME & Department) CLOSE-->


                  

        <div class="form-group">
            <button class="btn btn-success glyphicon glyphicon-print" style="width: 200px; height: 50px; margin-left: 40%" > Generate PDF</button>
        </div>
    </div>
    </form>