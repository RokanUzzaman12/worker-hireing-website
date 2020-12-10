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

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">

                    <?php
                        if(isset($_POST['submit'])){
                            $cat_name = $_POST['cat_name'];

                            $cat_query = "INSERT INTO category (cat_title) VALUE ('$cat_name')";
                            $cat_query_result = mysqli_query($con,$cat_query);
                            if($cat_query_result){
                                echo "successful";
                            }else{
                                echo "try again";
                            }
                        }
                    ?>
                        <form action = "" method = "post">
                            <div class="form-group">
                                <label for="pwd">Add Category:</label>
                                <input type="text" class="form-control" name = "cat_name">
                            </div>


                            <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <table class = "table table-bordered table-hover">
                            <tr>
                                <th>Category name</th>
                                <th>Delect</th>
                                
                            </tr>
                            <?php
                                if(isset($_GET['del_cat'])){
                                $del_cat_id = $_GET['del_cat'];
                                $cat_del_query = "DELETE FROM category WHERE cat_id =$del_cat_id";
                                $cat_del_query_result = mysqli_query($con,$cat_del_query);
                                if($cat_del_query_result){
                                    echo ('One category deleted');
                                }
                                else{
                                    echo "Dot deleted";
                                }
                                }
                            ?>
                            <?php
                                $cat_query = "SELECT * FROM category ";
                                $cat_query_result = mysqli_query($con,$cat_query);
            
                                while ($row = mysqli_fetch_assoc($cat_query_result)){
                                    $cat_id = $row['cat_id'];
                                    $cat_title = $row['cat_title'];
                                    
                               ?>
                               
                            <tr>
                                <td><?php echo $cat_title?></td>
                                <td><a href = "category.php?del_cat=<?php echo $cat_id;?>">Delete</a></td>
                                
                             </tr>
                               
                                <?php }
                                                  
                            ?>

                        </table>
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