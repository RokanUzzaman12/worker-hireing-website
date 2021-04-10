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
                           
                                <div class="my_table">
                                
                                <table class = "table table-bordered table-hover">
                                <tr>
                                    <th>Member Name</th>
                                    <th>Member Email</th>
                                    <th>Member password</th>
                                    <th>Member image</th>
                                    <th>Member description</th>
                                    <th>Member Rate</th>
                                    <th>Member details</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                                <?php
                                    $mem_query = "SELECT * FROM members";
                                    $mem_query_result = mysqli_query($con,$mem_query);

                                    while($row = mysqli_fetch_assoc($mem_query_result)){
                                        $mem_id = $row['mem_id'];
                                        $member_cat_id = $row['mem_cat_id'];
                                        $member_name = $row['mem_user_name'];
                                        $member_email = $row['mem_email'];
                                        $member_pass = $row['mem_pass'];
                                        $member_image = $row['mem_image'];
                                        $member_description = $row['mem_description'];
                                        $member_rate = $row['mem_rate'];
                                        $member_details = $row['mem_details'];
                                   ?>
                                    <tr>
                                        <td> <?php echo "$member_name";?> </td>
                                        <td> <?php echo "$member_email";?> </td>
                                        <td> <?php echo "$member_pass";?> </td>
                                        <td> <?php echo "$member_image";?> </td>
                                        <td> <?php echo "$member_description";?> </td>
                                        <td> <?php echo "$member_rate";?> </td>
                                        <td> <?php echo "$member_details";?> </td>
                                        <td><?php echo "<a href = 'see_all_members.php?deletemember={$mem_id}'>Delete</a>"?></td>
                                        <td><?php echo "<a href = 'edit_member.php?editmember={$mem_id}'>Edit</a>"?></td>
                                    </tr>

                                <?php }?>

                            </table>
                                </div>

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