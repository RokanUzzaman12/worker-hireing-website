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


<?php
    if(isset($_POST['submit'])){
        $email = $_POST['email'];  
        $password = $_POST['password'];
        $author = $_POST['author'];
        
        if($author =='user'){
            $query = "SELECT * FROM users WHERE u_email = '$email' AND u_pass = '$password'";
            $result_query = mysqli_query($con,$query);


            while($row = mysqli_fetch_assoc($result_query)){
                $_SESSION['userid'] = $row['u_id'];
                $_SESSION['username'] = $row['u_name'];
                $_SESSION['useremail'] = $row['u_email'];
                $_SESSION['userpass'] = $row['u_pass'];
                $_SESSION['userimage'] = $row['u_image'];
                $_SESSION['author'] = 'user';
                // echo $_SESSION['username'] ;
                header('Location:index.php');
                // header('Location:index.php');

                
                
            }
        }

        elseif($author == 'member'){
            $query = "SELECT * FROM members WHERE mem_email = '$email' AND mem_pass = '$password'";
            $result_query = mysqli_query($con,$query);


            while($row = mysqli_fetch_assoc($result_query)){
                $_SESSION['userid'] = $row['mem_id'];
                $_SESSION['username'] = $row['mem_user_name'];
                $_SESSION['useremail'] = $row['mem_email'];
                $_SESSION['userpass'] = $row['mem_pass'];
                $_SESSION['author'] = 'member';
                // echo $_SESSION['userpass'] ;
                // header('Location:index.php');
                header('Location:index.php');

                
                
            }
        }

        elseif($author == 'admin'){
            $query = "SELECT * FROM admin WHERE admin_email = '$email' AND admin_pass = '$password'";
            $result_query = mysqli_query($con,$query);


            while($row = mysqli_fetch_assoc($result_query)){
                $_SESSION['username'] = $row['admin_name'];
                $_SESSION['useremail'] = $row['admin_email'];
                $_SESSION['userpass'] = $row['admin_pass'];
                $_SESSION['author'] ='admin';
                // echo $_SESSION['userpass'] ;
                // header('Location:index.php');
                header('Location:index.php');

                
                
            }
        }


    }
?>

<section class="hoc container clear"> 
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form action = "" method = "post">
            <div class="form-group">
                <label for="pwd">Email:</label>
                <input type="text" class="form-control" name = "email" required>
            </div>
            <div class="form-group">
                <label for="pwd">password:</label>
                <input type="text" class="form-control" name = "password" required>
            </div>

            <div class="form-group">
                <label for="pwd">Login as a :</label>
                <select name = "author">
                    <option>Loin as a </option>
                    <option value = "user">User</option>
                    <option value = "member">Member</option>
                    <option value = "admin">Admin</option>

                </select>
            
            </div>


            <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
        </form>
    </div>
    <div class="col-md-3"></div>
</div>
</section>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->



<?php include "includes/futter.php";?>