<?php include "includes/header.php";?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->


<?php include 'includes/top_navigation.php';?>





<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->


<?php include "includes/navigation.php";?>

<?php
if(!$_SESSION['username']){
  include "includes/slider.php";
}
?>



<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- <div class="wrapper bgded overlay gradient" style="background-image:url('images/demo/backgrounds/01.png');">
  <div id="pageintro" class="hoc clear"> 
  

    <article>
      <p>Welcome to All IN One</p>
      <h3 class="heading">Hair people to us</h3>
      <p>Hair people according to your need</p>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="#">Login</a></li>
          <li><a class="btn inverse" href="#">Register</a></li>
        </ul>
      </footer>
    </article>

  </div>
</div> -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Our popular servises</h6>
      <p>Hire what you want</p>
    </div>
    <ul class="nospace group prices">
      <?php
        $mem_query = "SELECT * FROM members";
        $mem_query_result = mysqli_query($con,$mem_query);

        while($row = mysqli_fetch_assoc($mem_query_result)){
          $mem_id = $row ['mem_id'];
          $member_cat_id = $row['mem_cat_id'];
          $member_name = $row['mem_user_name'];
          $member_email = $row['mem_email'];
          $member_pass = $row['mem_pass'];
          $member_image = $row['mem_image'];
          $member_description = $row['mem_description'];
          $member_rate = $row['mem_rate'];
          $member_details = $row['mem_details'];
          
      ?>  
      
      
      <li class="one_third">
        <article>
          <!-- <i class="fas fa-deaf red"></i> -->
          <img src = "images/<?php echo($member_image);?>" style="height:200px; width:200px"></img>
          <h6 class="heading"><?php echo "$member_name";?></h6>
          <p><?php echo "$member_description";?></p>
          <p><sup>&#2547;</sup><strong><?php echo "$member_rate";?></strong><em>/Hour</em></p>
          <footer><a class="btn" href="selected_member.php?sel_member=<?php echo($mem_id);?>">Details</a></footer>
          
          
        </article>
      </li>

      <?php  }?>






    </ul>
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