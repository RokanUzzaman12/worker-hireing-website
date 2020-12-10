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
                                $member_cat_id = $_POST['category_id'];
                                $member_name = $_POST['username'];
                                $member_email = $_POST['email'];
                                $member_pass = $_POST['pass'];
                                //$member_image = $_POST['image'];
                                $member_description = $_POST['description'];
                                $member_rate = $_POST['rate'];
                                $member_details = $_POST['details'];

                                $member_filename = $_FILES['image']['name'];
                                $member_tmpname = $_FILES['image']['tmp_name'];

                                $folder = 'images/'.$member_filename;
                                move_uploaded_file($member_tmpname,$folder);
                                
                                //  echo "$member_name,$member_email,$member_pass,$member_description,$member_rate,$member_details,$member_cat_id";
                                $add_member_query = "INSERT INTO members (mem_cat_id,mem_user_name,mem_email,mem_pass,mem_description,mem_rate,mem_details,mem_image) VALUE($member_cat_id,'$member_name','$member_email','$member_pass','$member_description','$member_rate','$member_details','$member_filename')";

                                $add_member_query_result = mysqli_query($con,$add_member_query);
                                if($add_member_query_result){
                                    echo "successful";
                                }else{
                                    echo "please try again";
                                }
                            }
                        ?>
                        <form action = "" method = 'post' enctype = "multipart/form-data">
                            <div class="form-group">
                                <label for="pwd">User Name:</label>
                                <input type="text" class="form-control" name = "username">
                            </div>
                            <div class="form-group">
                                <label for="pwd">User Email :</label>
                                <input type="text" class="form-control" name = "email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">User Password :</label>
                                <input type="password" class="form-control" name = "pass">
                            </div>
                            <div class="form-group">
                                <label for="pwd">User image:</label>
                                <input type="file" class="form-control" name = "image">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Short description about user :</label>
                                <textarea type="text" rows = "5" class="form-control" name = "description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="pwd">User Rate /Hour:</label>
                                <input type="number" class="form-control" name = "rate">
                            </div>

                            <div class="form-group">
                                <label for="pwd">Details about user :</label>
                                <textarea type="text" rows = "5" class="form-control" name = "details"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="pwd">User Category:</label><br>
                                <?php
                                    $cat_query = "SELECT * FROM category ";
                                    $cat_query_result = mysqli_query($con,$cat_query);
                
                                    while ($row = mysqli_fetch_assoc($cat_query_result)){
                                        $cat_id = $row['cat_id'];
                                        $cat_title = $row['cat_title'];
                                        echo "<input type='radio' name='category_id' value='$cat_id'> {$cat_title}";
                                    }
                                ?>
                                
                                

                            </div>
                            <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
                            

                        </form>
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