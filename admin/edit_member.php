<?php include "includes/header.php";?>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <?php include "includes/navigation.php";?>




            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include "includes/sidebar.php";?>









            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to admin
     
                            <small>Subheading</small>
                        </h1>

                        <?php
                            if(isset($_POST['submit'])){
                                $mem_id = $_GET['editmember'];
                                $member_cat_id = $_POST['category_id'];
                                $member_name = $_POST['username'];
                                $member_email = $_POST['email'];
                                $member_pass = $_POST['pass'];
                                $member_image = $_POST['image'];
                                $member_description = $_POST['description'];
                                $member_rate = $_POST['rate'];
                                $member_details = $_POST['details'];
                                //  echo "$member_name,$member_email,$member_pass,$member_description,$member_rate,$member_details,$member_cat_id";
                                $update_member_query = "UPDATE members set mem_cat_id =$member_cat_id,mem_user_name = '$member_name',mem_email='$member_email',mem_pass = '$member_pass',mem_description = '$member_description',mem_rate = '$member_rate',mem_details ='$member_details' WHERE mem_id = $mem_id ";

                                $update_member_query_result = mysqli_query($con,$update_member_query);
                                if($update_member_query_result){
                                    echo "successful";
                                }else{
                                    echo "please try again";
                                }
                            }
                        ?>

                        <?php
                            if(isset($_GET['editmember'])){
                                $edit_mem_id = $_GET['editmember'];
                                $edit_mem_query = "SELECT * FROM members WHERE mem_id = $edit_mem_id";
                                $edit_mem_query_result = mysqli_query($con,$edit_mem_query);
                                while($row = mysqli_fetch_assoc($edit_mem_query_result)){
                                    $edit_cat_id = $row['mem_cat_id'];
                                    $edit_name = $row['mem_user_name'];
                                    $edit_email = $row['mem_email'];
                                    $edit_pass = $row['mem_pass'];
                                    $edit_description = $row['mem_description'];
                                    $edit_rate = $row['mem_rate'];
                                    $edit_details = $row['mem_details'];
                                    //echo "$edit_name";
                        ?>

                        <form action = "" method = 'post'>
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
                                <input type="text" class="form-control" name = "image" >
                            </div>
                            <div class="form-group">
                                <label for="pwd">Short description about user :</label>
                                <textarea type="text" rows = "5" class="form-control" name = "description"> <?php echo($edit_description);?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="pwd">User Rate /Hour:</label>
                                <input type="number" class="form-control" name = "rate" value = "<?php echo($edit_rate);?>">
                            </div>

                            <div class="form-group">
                                <label for="pwd">Details about user :</label>
                                <textarea type="text" rows = "5" class="form-control" name = "details"><?php echo($edit_details);?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="pwd">User Category:</label><br>
                                <?php
                                    $cat_query = "SELECT * FROM category ";
                                    $cat_query_result = mysqli_query($con,$cat_query);
                                    
                                    $selected_mem_cat_query = "SELECT * FROM category WHERE cat_id = $edit_cat_id";
                                    $selected_mem_cat_query_result = mysqli_query($con,$selected_mem_cat_query);
                                    while($row = mysqli_fetch_assoc($selected_mem_cat_query_result)){
                                        $selected_mem_cat_id = $row['cat_id'];
                                        $selected_mem_cat_title = $row['cat_title'];
                                        echo "Selected Category: <input type='radio' name='category_id' value='$selected_mem_cat_id' checked> $selected_mem_cat_title<br>";
                                    }
                
                                    while ($row = mysqli_fetch_assoc($cat_query_result)){
                                        $cat_id = $row['cat_id'];
                                        $cat_title = $row['cat_title'];
                                        echo "<input type='radio' name='category_id' value='$cat_id'> $cat_title<br>";
                                    }
                                ?>
                                
                                

                            </div>
                            <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
                            

                        </form>


                        <?php            
                                }
                            }
                        ?>
                       

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   <?php include "includes/futter.php";?>