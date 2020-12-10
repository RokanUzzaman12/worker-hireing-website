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
                        <div class="my_table">

                            <?php
                                if(isset($_GET['delete'])){
                                    $delete_ser_id = $_GET['delete'];
                                    $delete_ser_query = "DELETE FROM services WHERE ser_id = $delete_ser_id";
                                    $delete_ser_query_result = mysqli_query($con,$delete_ser_query);
                                }
                            ?>
                            <table class = "table table-bordered table-hover">
                                <tr>
                                    <th>Services ID</th>
                                    <th>Services Title</th>
                                    <th>Services image</th>
                                    <th>Services content</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                                <?php
                                    $ser_query = "SELECT * FROM services";
                                    $ser_query_result = mysqli_query($con,$ser_query);
                                    while($row = mysqli_fetch_assoc($ser_query_result)){
                                        $ser_id = $row['ser_id'];
                                        $ser_cat_id = $row['ser_cat_id'];
                                        $ser_image = $row['ser_image'];
                                        $ser_title = $row['ser_title'];
                                        $ser_content = $row['ser_content'];
                                   ?>
                                    <tr>
                                        <td> <?php echo "$ser_id";?> </td>
                                        <td> <?php echo "$ser_title";?> </td>
                                        <td> <?php echo "$ser_image";?> </td>
                                        <td> <?php echo "$ser_content";?> </td>
                                        <td><?php echo "<a href = 'services.php?delete={$ser_id}'>Delete</a>"?></td>
                                        <td><?php echo "<a href = 'edit_services.php?edit={$ser_id}'>Edit</a>"?></td>
                                    </tr>

                                <?php }?>

                            </table>
                        </div>
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