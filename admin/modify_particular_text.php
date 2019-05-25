<?php 
if(!isset($_SESSION['admin'])){
  echo 'Please login to view this page!';
  header('Location: login_view.php');
  die();
}
if(isset($_POST['submit']))
 {
  $particular_text = $_POST['text'];
  $particular_id = $_POST['pid'];


  $query="update particular set particular_text='$particular_text' where particular_id='$particular_id'";
   $result =  mysqli_query($conn,$query);

  
  if(!$result)
  {
   echo 'Record Not Saved';
  }
  else
  {
   echo 'Record Saved';
  }
 }

?>
                        
 <table class="table table-bordered" >
                                            <tr>
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
                                            <tr class="success">
                                                 <th>SL No.</th>
                                                <th>PARTICULARS</th>
                                            
                                                
                                            </tr>
                                        </thead>


                                            <?php

    $sqlpart = mysqli_query($conn, "SELECT  particular_id ,particular_text 
FROM particular
where criteria_id =  '" . $row["criteria_id"] . "'   ");

   

    while ($row1 = $sqlpart->fetch_assoc())
        { ?>


<!-- ==============================================Printing Each Particular Text ========================================= -->

                                                    
                                                    <tr><td>
                                                       <?php echo $row1['particular_id']; ?> 



                                                        
                                                        <td>
<form  method="post">
  <textarea name="text" id="<?php echo $row1['particular_id']; ?>"><?php echo $row1['particular_text']; ?></textarea>
  <input value="<?php
        echo $row1["particular_id"]; ?>"  id="<?php
        echo $row1["particular_id"]; ?>" type= "number" name ="pid" hidden />  

  <script>
  CKEDITOR.replace( '<?php echo $row1['particular_id']; ?>' );
  </script>
  <input type="submit" value="Save Changes" name="submit">
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
                               
?>                                  </td>
                                    </tr>
</table> <!-- Criteria Table -->