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
                                $ser_id = $_GET['edit'];
                                $service_cat_id = $_POST['category_id'];
                                $service_title = $_POST['title'];
                                $service_content = $_POST['content'];
                                $service_image = $_POST['image'];
                                // echo "$service_cat_id, $service_title,$service_content,$ser_id";
                                // $add_service_query = "UPDATE services SET ser_title = '$service_title' WHERE ser_id =$ser_id)";
                                // $add_service_query_result = mysqli_query($con,$add_service_query);
                                // if($add_service_query_result){
                                //     echo "successful";
                                // }else{
                                //     echo "query faild";
                                // }

                                $query = "UPDATE services SET ser_cat_id = $service_cat_id, ser_title = '$service_title',ser_content = '$service_content' WHERE ser_id = $ser_id";
                                $result = mysqli_query($con,$query);
                                if($result){
                                    echo "success";
                                }else{
                                    echo "try again";
                                }
                            }
                        ?>
                        <?php
                            if(isset($_GET['edit'])){
                                $edit_ser_id = $_GET['edit'];
                                $edit_ser_query = "SELECT * FROM services WHERE ser_id = $edit_ser_id";
                                $edit_ser_query_result = mysqli_query($con,$edit_ser_query);
                                while($row = mysqli_fetch_assoc($edit_ser_query_result)){
                                    $edit_ser_cat_id= $row['ser_cat_id'];
                                    $edit_ser_title = $row['ser_title'];
                                    $edit_ser_content = $row['ser_content'];

                                    // echo $edit_ser_content;

                        ?>

                            <form action = "" method = 'post'>
                            <div class="form-group">
                                <label for="pwd">Service title:</label>
                                <input type="text" class="form-control" name = "title" value = "<?php echo($edit_ser_title);?>">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Service image:</label>
                                <input type="text" class="form-control" name = "image">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Service content:</label>
                                <textarea type="text" rows = "5" class="form-control" name = "content"><?php echo($edit_ser_content);?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="pwd">Service Category:</label><br>
                                <?php
                                    $cat_query = "SELECT * FROM category ";
                                    $cat_query_result = mysqli_query($con,$cat_query);
                                    $selected_ser_cat_query = "SELECT * FROM category WHERE cat_id = $edit_ser_cat_id";
                                    $selected_ser_cat_query_result = mysqli_query($con,$selected_ser_cat_query);
                                    while($row = mysqli_fetch_assoc($selected_ser_cat_query_result)){
                                        $selected_ser_cat_id = $row['cat_id'];
                                        $selected_ser_cat_title = $row['cat_title'];
                                        echo "Selected Category: <input type='radio' name='category_id' value='$selected_ser_cat_id' checked> $selected_ser_cat_title<br>";
                                    }
                                    
                
                                    while ($row = mysqli_fetch_assoc($cat_query_result)){
                                        $cat_id = $row['cat_id'];
                                        $cat_title = $row['cat_title'];
                                        echo "<input type='radio' name='category_id' value='$cat_id'> $cat_title<br>";
                                    }
                                ?>
                        
                       <?php
                        }
                                
                            }

                        ?>
                        
                                
                                

                            </div>
                            <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
                            

                        </form>

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