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

<div class="wrapper bgded overlay gradient" style="background-image:url('348x261.png');">
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->


    <!-- ################################################################################################ -->
  </div>
</div>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 

    <?php
      $email = $_SESSION['useremail'];
      $u_profile_query = "SELECT * FROM users WHERE u_email = '$email' ";
      $u_profile_query_result = mysqli_query($con,$u_profile_query);

      while($row = mysqli_fetch_assoc($u_profile_query_result)){
        $u_id = $row['u_id'];
        $u_name = $row['u_name'];
        $u_email = $row['u_email'];
        $u_pass = $row['u_pass'];
        $u_image = $row['u_image'];

    ?>

      <h1> <?php echo($u_name);?> </h1>
      <h1> <?php echo($u_email);?> </h1>
      <!-- <h1><sup>&#2547;</sup><strong>50</strong><em>/Hour</em></h1> -->
      <!-- <img class="imgr borderedbox inspace-5" src="348x261.png" alt=""> -->
      
      
      <img class="imgl borderedbox inspace-5" src="images/<?php echo $u_image?>" alt="">
      
     
      
  <div class="row">
    

  </div>



    <?php
      }
    ?>
      <!-- ################################################################################################ -->

  <div class="row">

  <div class="col-md-12">
  <div id="comments">
        
       
        
        
        
      </div>
  </div>
  
  </div>
      
     








      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    
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