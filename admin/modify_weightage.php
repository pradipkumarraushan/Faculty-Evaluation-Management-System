<?php 
if(!isset($_SESSION['admin'])){
  echo 'Please login to view this page!';
  header('Location: login_view.php');
  die();
}

extract($_POST);
if(isset($Update_W))
{
$query="update weightage set weightage_value='$wval' where weightage_id='$wid'";
mysqli_query($conn,$query);

$err="<font color='blue'>Weightage Value updated successfully !!</font>";
}
if(isset($Update_P))
{
$query="update particular set particular_value='$pval' where particular_id='$pid'";
mysqli_query($conn,$query);

$err="<font color='blue'> PARTICULARS VALUE RANGE updated successfully !!</font>";
}


?>
    <link rel='stylesheet' id='iworks_position-css'  href='../css/iworks_position.min.css' type='text/css' media='handheld, projection, screen' />
    <script type='text/javascript' src='../js/iworks_position.min.js'></script>
<!--  ===========================================Main TABLE============================== --> 

            <table class="table table-bordered " >

			          <tr>
			             <td>
                    	<b><?php echo @$err; ?></b>
						</tr>
			             </td>
  

               
            <tr class="success">
                <td>
                        



<!-- ==================================================for loop of criteria ====================================================== -->
                        <?php
$sqlcriteria = mysqli_query($conn, "select * from criteria");



while ($row = $sqlcriteria->fetch_assoc())
    { ?>
                               
                                        
 <!-- ==================================Printing Each Criteria Name =============================== -->                                      
                                        
                                        <b style="padding-left: 250pt;padding-right: 100pt;text-indent: 0pt;text-align: center; color: red;">CRITERIA 
                                            <?php  echo $row['criteria_name']; ?> 
                                        </b>
                                   
 <!-- =======================================foreach of prticular table==================================================== -->                                   
                                        <table class="table table-bordered">

                                     <thead>
                                            <tr>
                                                 <th>SL No.</th>
                                                <th>PARTICULARS</th>
                                                <th>PARTICULARS VALUE RANGE</th>
                                                <th></th>
                                                <th>WEIGHTAGE</th>
                                                
                                            </tr>
                                        </thead>


                                            <?php

    $sqlpart = mysqli_query($conn, "SELECT  P.particular_id ,P.particular_text,P.particular_value ,P.criteria_id ,C.criteria_name, W.weightage_value,W.weightage_id
FROM particular P
LEFT  JOIN weightage W 
ON P.particular_id=W.particular_id and P.criteria_id=W.criteria_id 
LEFT  JOIN criteria C
ON P.particular_id=W.particular_id and C.criteria_id=P.criteria_id 
where P.criteria_id =  '" . $row["criteria_id"] . "'   ");

   

    while ($row1 = $sqlpart->fetch_assoc())
        { ?>


<!-- ==============================================Printing Each Particular Text ========================================= -->

                                                    
													<tr>
													
                                                        <td style="color: blue">

                                                           <b> <?php
        echo $row1['weightage_id']; ?> </b>
                                                        
                                                        <td >
                                                          
 
    <p><?php echo $row1['particular_text']; ?></p>
                  
       
</td>
<form   method="post">   
<!-- ==============================================Displaying weightage Value ========================================= -->
         <td >

         <input value="<?php
        echo $row1["particular_value"]; ?>" class="form-control" id="<?php
        echo $row1["particular_value"]; ?>"  type= "number" name ="pval"/>

            <input value="<?php
        echo $row1["particular_id"]; ?>"  id="<?php
        echo $row1["particular_id"]; ?>" type= "number" name ="pid" hidden />  

         </td>
    <td>
           <input type="submit" class="btn btn-success" value="update" name="Update_P"/>
 

    </td>
</form>


                                                       
                           
<form   method="post">

<!-- ==============================================Displaying weightage Value ========================================= -->
         <td >

         <input value="<?php
        echo $row1["weightage_value"]; ?>" class="form-control" id="<?php
        echo $row1["weightage_value"]; ?>"  min="0" max="20" type= "number" name ="wval"/>

            <input value="<?php
        echo $row1["weightage_id"]; ?>"  id="<?php
        echo $row1["weightage_id"]; ?>" type= "number" name ="wid" hidden />  

         </td>
    <td>
           <input type="submit" class="btn btn-success" value="update" name="Update_W"/>
 

    </td>
</form>

                                                    <?php
        }

?>          
                                                

                                        </td>
                                    </td>
                            </tr>
                                </table> <!-- PARTICULARS TABLE CLOSE-->
                                    
                                    
                                <?php
    }

?>
                                 </td>
                    </tr>
							</table> <!-- Main TABLE CLOSE-->
                       
   
