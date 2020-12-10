<?php include "includes/header.php";?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->


<?php include 'includes/top_navigation.php';?>





<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->


<?php include "includes/navigation.php";?>


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="myclass">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <?php
                if(isset($_POST['submit'])){
                    $u_id = $_GET['edituser'];
                    
                    $u_name = $_POST['username'];
                    $u_email = $_POST['email'];
                    $u_pass = $_POST['pass'];
                    // if(!$_FILES['image']){
                    //     $u_image = $_POST['image1'];
                        
                    // }
                    // else{
                    //    print_r($_FILES['image']) ;
                    // }
                    

                    //   echo "$u_name,$u_email,$u_pass";
                    $update_u_query = "UPDATE users set u_name = '$u_name',u_email='$u_email',u_pass = '$u_pass' WHERE u_id = $u_id";

                    $update_u_query_result = mysqli_query($con,$update_u_query);
                    if($update_u_query_result){
                        echo "successful";
                    }else{
                        echo "please try again";
                    }
                }
            ?>

            <?php
                if(isset($_GET['edituser'])){
                    $edit_u_id = $_GET['edituser'];
                    $edit_u_query = "SELECT * FROM users WHERE u_id = $edit_u_id";
                    $edit_u_query_result = mysqli_query($con,$edit_u_query);
                    while($row = mysqli_fetch_assoc($edit_u_query_result)){
                        $edit_id = $row['u_id'];
                        $edit_name = $row['u_name'];
                        $edit_email = $row['u_email'];
                        $edit_pass = $row['u_pass'];
                        $edit_image = $row['u_image'];
                      
                        //echo "$edit_name";
            ?>

            <form action = "" method = 'post' enctype = "multipart/form-data">
                <div class="form-group">
                    <label for="pwd">User Name:</label>
                    <input type="text" class="form-control" name = "username" value = "<?php echo($edit_name);?>">
                </div>
                <div class="form-group">
                    <label for="pwd">User Email :</label>
                    <input type="text" class="form-control" name = "email" value = "<?php echo($edit_email);?>">
                </div>
                <div class="form-group">
                    <label for="pwd">User Password :</label>
                    <input type="password" class="form-control" name = "pass" value = "<?php echo($edit_pass);?>">
                </div>
                <div class="form-group">
                    <label for="pwd">User image:</label>
                    <img src = 'images/<?php echo($edit_image);?>' width = '100' height = '100'/><br>
                    

                    
                    
                </div>




                <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
                

            </form>


            <?php            
                    }
                }
            ?>
                       

        </div>
        <div class="col-md-3"></div>
    </div>
    
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->



<?php include "includes/futter.php";?>