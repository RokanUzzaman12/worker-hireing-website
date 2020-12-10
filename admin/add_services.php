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
                                $service_cat_id = $_POST['category_id'];
                                $service_title = $_POST['title'];
                                $service_content = $_POST['content'];

                                $service_image = $_FILES['image']['name'];
                                $service_tmp_image = $_FILES['image']['tmp_name'];

                                $folder = '../images/'.$service_image;
                                move_uploaded_file($service_tmp_image,$folder);

                                //$service_image = $_POST['image'];
                                // echo "$service_cat_id, $service_title,$service_content";
                                $add_service_query = "INSERT INTO services (ser_cat_id,ser_title,ser_content,ser_image) VALUE($service_cat_id,'$service_title','$service_content','$service_image')";
                                $add_service_query_result = mysqli_query($con,$add_service_query);
                                if($add_service_query_result){
                                    echo "successful";
                                }else{
                                    echo "please try again";
                                }
                            }
                        ?>
                        <form action = "" method = 'post' enctype = "multipart/form-data">
                            <div class="form-group">
                                <label for="pwd">Service title:</label>
                                <input type="text" class="form-control" name = "title">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Service image:</label>
                                <input type="file" class="form-control" name = "image">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Service content:</label>
                                <textarea type="text" rows = "5" class="form-control" name = "content"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="pwd">Service Category:</label><br>
                                <?php
                                    $cat_query = "SELECT * FROM category ";
                                    $cat_query_result = mysqli_query($con,$cat_query);
                
                                    while ($row = mysqli_fetch_assoc($cat_query_result)){
                                        $cat_id = $row['cat_id'];
                                        $cat_title = $row['cat_title'];
                                        echo "<input type='radio' name='category_id' value='$cat_id'> $cat_title<br>";
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