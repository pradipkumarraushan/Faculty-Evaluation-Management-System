<?php
include ('../connection.php');

if (!isset($_SESSION["user"]))
    {
    echo 'Please login to view this page!';
    header('Location: login_view.php');
    die();
    }
extract($_POST);

/*foreach ($_POST as $key => $value) {
        
        echo $key  .' => ' .$value;
        
         echo'<br>';
        
    }*/
  

if(isset($submit))

{
    $email_id         = $_POST['email_id'];

	$criteria_id       = $_POST['criteria_id'];

    $particular_id     = $_POST['particular_id'];

    $actual_score      = $_POST['actual_score'];

    $reduced_score     = $_POST['reduced_score'];

    $weightage_value   = $_POST['weightage_value'];

    $wx                = $_POST['wx'];

    $imageName         = $_FILES['image']['name'];

    $email             = $users['email'];



 
  $sql=mysqli_query($conn,"SELECT * from facultyeval where particular_id = '$particular_id' and email_id = '$email_id'  " );

   $r=mysqli_num_rows($sql);

if($r==true)
{
        // update  when image is selected

	    if ($imageName!="" ) {
	    	$query="UPDATE facultyeval
               set  email_id = '$email_id' ,criteria_id = '$criteria_id',particular_id = '$particular_id',actual_score = '$actual_score',reduced_score = '$reduced_score',weightage_value = '$weightage_value',wx = '$wx',image = '$imageName' WHERE particular_id = '$particular_id' and email_id = '$email_id'  ";



          mysqli_query($conn,$query);

        // upload image

        
         move_uploaded_file($_FILES['image']['tmp_name'],"images/$email/".$_FILES['image']['name']);;


         $success_message  ="Your Response Updated for PARTICULAR No ==> " . $particular_id ; 
	    	
	    }
	    else
	    {
	    	// update  when image is not selected
          
          $query="UPDATE facultyeval
               set  email_id = '$email_id' ,criteria_id = '$criteria_id',particular_id = '$particular_id',actual_score = '$actual_score',reduced_score = '$reduced_score',weightage_value = '$weightage_value',wx = '$wx' WHERE particular_id = '$particular_id' and email_id = '$email_id'  ";



          mysqli_query($conn,$query);



         $success_message  ="Your Response Updated  for PARTICULAR No ==> " . $particular_id ; 

	    }
	   


}
else
{
        // insert
	    $query="INSERT into facultyeval (email_id,criteria_id,particular_id,actual_score,reduced_score,weightage_value,wx,image)  values('$email_id','$criteria_id','$particular_id','$actual_score','$reduced_score','$weightage_value','$wx','$imageName')";
        mysqli_query($conn,$query);

        // upload image

         @mkdir("images/$email");
         move_uploaded_file($_FILES['image']['tmp_name'],"images/$email/".$_FILES['image']['name']);
	     $success_message  ="Your Response submitted for PARTICULAR No ==> " . $particular_id ; 
}


}
?>
         <link rel='stylesheet' id='iworks_position-css'  href='../css/iworks_position.min.css' type='text/css' media='handheld, projection, screen' />
         <script type='text/javascript' src='../js/iworks_position.min.js'></script>

  



 	
<h1 align="center">Fill Out Your Form</h1>
  <!-- ========================================FORM============================================================================== -->             
     
 
 <!-- =================================================Main Table================================================================== -->

            <table class=" table-bordered "  >

			<tr >
			<td>
    <?php if(!empty($success_message)) { ?><div align="center" style="font-weight: bold;color:green;font-size: 25px;"><?php echo $success_message ?> </div><?php } ?>

    <?php if(isset($error_message)) { ?> <div align="center" style="font-weight: bold;color:red;font-size: 25px;"><?php echo $error_message; ?></div> <?php } ?>
						</td>
                </tr>
  <!-- =====================================Printing User's Name And His Branch ================================================= -->
                <tr >
                    <td bgcolor="black">
 <h3 align="center" style="color: white">NAME : <?php
echo $users['name']; ?></h3>

                    </td> 
                </tr> 



                <tr>
                    <td bgcolor="black">
                        <h3 align="center" align="center" style="color: white">DEPARTMENT :   <?php
echo $users['branch']; ?></h3></td>

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
                                    </td>
                                    
                                </tr>
                                    <tr >
                                    	<td>
                                        <table class="table-bordered ">

                                     <thead bgcolor="#5D7B9D">
                                            <tr>

                                                <th><font color="#fff">SL No.</font></th>
                                                <th style="width: 30%"><font color="#fff">PARTICULARS</font></th>
                                                <th style="width: 15%"><font color="#fff">ACTUAL SCORE</font></th>
                                                <th style="width: 10%"><font color="#fff">OUT OF 10 (X)</font></th>
                                                <th style="width: 15%"><font color="#fff">WEIGHTAGE ( W )</font></th>
                                                <th style="width: 10%"><font color="#fff">WX</font></th>
                                                <th style="width: 16%"><font color="#fff">IMAGE</font></th>
                                                <th style="width: 4%"><font color="#fff">Action</font></th>
                                                
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

<form  method="POST" enctype="multipart/form-data"  name="<?php  echo $row['criteria_id']; ?>" id="<?php  echo $row['criteria_id']; ?>"> 

                                                        <td>

          <?php echo $row1['particular_text']; ?>

          <input type="hidden" value="<?php echo  $row1['criteria_id']; ?>" name="criteria_id"/>
 
          <input type="hidden" value="<?php echo $users['email']; ?>" name="email_id"/>

          <input type="hidden" value="<?php echo $row1['particular_id']; ?>" name="particular_id"/>
                                                        </td>

<!-- ============================================== Input Actual Score ====================================================== -->

                                                        <td  style="padding-top: 20pt;">
    <input value="<?php
        echo $row1["actual_score"]; ?>" class="form-control " type="number" name="actual_score" min="0" max="100" id="actualscore_<?php
        echo $row["criteria_id"]; ?>_<?php
        echo $row1["particular_id"]; ?>" oninput="actualscore(this)" />

       
                                                    
                                                            
                                                        </td>
<!-- ==============================================Displaying Reduced Score  ========================================= --> 
                                                        
                                                        <td  style="padding-top: 20pt; padding-left: -250pt; padding-right: -100pt; text-indent: 0pt;text-align: center; ">


<input value="<?php
        echo $row1["reduced_score"]; ?>" class="out0f_10 " id="reduced_score_<?php
        echo $row["criteria_id"]; ?>_<?php
        echo $row1["particular_id"]; ?>" type="number" name="reduced_score"  style="border:none; "  readonly  />
                                                        </td>
<!-- ==============================================Displaying weightage Value ========================================= -->
                                                        <td style="padding-top: 20pt; padding-left: -250pt;padding-right: -100pt;text-indent: 0pt;text-align: center; ">
    <input value="<?php
        echo $row1["weightage_value"]; ?>" class="weightage_value" id="weightage_value_<?php
        echo $row["criteria_id"]; ?>_<?php
        echo $row1["particular_id"]; ?>" type= "number" name ="weightage_value"  min="0" max="100"  style="border:none"  oninput="weightagevalue()"  readonly />
                                                        </td>
<!-- ==============================================Displaying     WX   Value ========================================= -->
                                                        <td style="padding-top: 20pt; text-indent: 0pt;text-align: right; ">

<input value="<?php
        echo $row1["wx"]; ?>" class="wx" id="wx_<?php
        echo $row["criteria_id"]; ?>_<?php
        echo $row1["particular_id"]; ?>" type= "number" name ="wx"  style="border:none"  readonly />
                                                        </td>

<!-- ==============================================Taking Image ========================================================= -->
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
    color: #f1f1f1;
    font-size: 60px;
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



    <input value="<?php
        echo $row1["image"]; ?>" class="image_<?php
        echo $row["criteria_id"]; ?>_<?php
        echo $row1["particular_id"]; ?>" id="image_<?php
        echo $row["criteria_id"]; ?>_<?php
        echo $row1["particular_id"]; ?>" type="file" name="image" onchange="validateImage('image_<?php
        echo $row["criteria_id"]; ?>_<?php
        echo $row1["particular_id"]; ?>')" style="width: 50%" />   





    </td> 
    <td>

    	<input type="submit" class="btn btn-success" style="width: 50px;" value="Save" name="submit"/>

      </form>
    </td>
                                                        </td>
                                                    </tr>

                                                    <?php
        }

?>          
                                                

<!-- ========================================================== TFOOT =============================================== -->

                                                <tfoot>
                                                    <tr>
                                                        <td bgcolor="#5D7B9D" colspan = "2">

                                                            <b><font color="#fff">TOTAL</font></b>


                                                       </td>
                                                  <td>
                                                           
 <b style="color: red">∑= <input value="sum_actual_score_<?php
    echo $row["criteria_id"]; ?>" class="sum_actual_score_<?php
    echo $row["criteria_id"]; ?>" id="sum_actual_score_<?php
    echo $row["criteria_id"]; ?>" type="number" name="sum_actual_score_<?php
    echo $row["criteria_id"]; ?>" readonly style="border:none;width: 100px">
                                                       </b>
                                                        </td>
                                                        <td>


                                                        <b  style="color: red">Ave.X= 

<input value="average_outof_10_<?php
    echo $row["criteria_id"]; ?>" class="average_outof_10_<?php
    echo $row["criteria_id"]; ?>" type="number" id="average_outof_10_<?php
    echo $row["criteria_id"]; ?>" name="average_outof_10_<?php
    echo $row["criteria_id"]; ?>" readonly style="border:none;width: 100px">
                                                        </b>
                                                    </td>
                                                    <td >
                                                        <b  style="color: red">∑W= 

<input value="sum_weightage_<?php
    echo $row["criteria_id"]; ?>" class="sum_weightage_<?php
    echo $row["criteria_id"]; ?>" type="number" id="sum_weightage_<?php
    echo $row["criteria_id"]; ?>" name="sum_weightage_<?php
    echo $row["criteria_id"]; ?>" readonly style="border:none;width: 100px">
                                                      </b>
                                                    </td>
                                                    <td >
                                                        <b  style="color: red">∑WX=
<input value="sum_wx_<?php
    echo $row["criteria_id"]; ?>" class="sum_wx_<?php
    echo $row["criteria_id"]; ?>"  type="number" id="sum_wx_<?php
    echo $row["criteria_id"]; ?>" name="sum_wx_<?php
    echo $row["criteria_id"]; ?>" readonly style="border:none;width: 100px">
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

<!-- Script for checking image type & size-->
<script type="text/javascript">
function validateImage(id) {
    var formData = new FormData();
    
    
    var file = document.getElementById(id).files[0];
    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();


    if (t != "jpeg" && t != "jpg" && t != "png") {
        alert('Please select a valid image file having extension ".jpg" or ".jpeg" or ".png" ');
        document.getElementById(id).value = '';
        return false;
    }                                                                   
    if (file.size > 1024000) {
        alert('Max Upload size is 1MB only'+'\n'+"Your File size is = "+file.size/1024000+' MB');
        document.getElementById(id).value = '';
        return false;
    }
    if(imgwidth >= maxwidth && imgheight >= maxheight)
    {

    	alert("Image size must be "+maxwidth+"X"+maxheight);
    	document.getElementById(id).value = '';
        return false;
    }
    

    return true;
   
    
}
</script>

<!-- CLOSE Script for checking image type & size-->


