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
if(!$_SESSION['username']){
  include "includes/slider.php";
}
?>
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
        $ser_query = "SELECT * FROM services";
        $ser_query_result = mysqli_query($con,$ser_query);

        while($row = mysqli_fetch_assoc($ser_query_result)){
          $ser_image = $row['ser_image'];
          $ser_title = $row['ser_title'];
          $ser_content = $row['ser_content'];
          $ser_cat_id = $row['ser_cat_id'];
          $ser_id = $row['ser_title'];
          // $ser_title = $row['ser_title'];
      ?>  
      
      
      <li class="one_third">
        <article>
          <!-- <i class="fas fa-deaf red"></i> -->
          <h6 class="heading"><?php echo "$ser_title";?></h6>
          <img src = "images/<?php echo $ser_image; ?>"  style="height:200px; width:200px"/>
          <p><?php echo "$ser_content";?></p>
          
          <footer><a class="btn" href="selected_category.php?selected_cat=<?php echo($ser_cat_id);?>">Details</a></footer>
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
<div class="wrapper coloured">
  <article class="hoc cta clear"> 
    <!-- ################################################################################################ -->
    <h6 class="three_quarter first">Visit our official facebook page</h6>
    <footer class="one_quarter"><a class="btn" href="#">Click here</a></footer>
    <!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section id="latest" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Our official Staff</h6>
      
    </div>
    <ul class="nospace group">
      <li class="one_third">
        <figure><a class="imgover" href="#"><img src="images/rashni.jpg" style="height:250px; width:400px" alt=""></a>
          <figcaption>Sheher Jahan</figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a class="imgover" href="#"><img src="images/misti.jpg" style="height:250px; width:400px" alt=""></a>
          <figcaption>Tellus lectus nec</figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a class="imgover" href="#"><img src="images/demo/348x261.png" style="height:250px; width:400px" alt=""></a>
          <figcaption>Pede suspendisse</figcaption>
        </figure>
      </li>

    </ul>
    <footer class="block center"><a class="btn" href="#">Tortor molestie</a></footer>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <div class="hoc container testimonial clear"> 
    <!-- ################################################################################################ -->
    <article><img src="images/demo/100x100.png" alt="">
      <blockquote>porta volutpat sit amet scelerisque sit amet leo morbi sem magna viverra quis sollicitudin quis consectetuer quis magna integer consectetuer tellus sed dui nullam.</blockquote>
      <h6 class="heading font-x1">A. Doe</h6>
      <em>justo massa adipiscing</em></article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section id="cta" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <ul class="nospace clear">
      <li class="one_quarter first">
        <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +00 (123) 456 7890</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> support@domain.com</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Monday - Saturday:</strong> 08.00am - 18.00pm</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Come visit us:</strong> Directions to <a href="#">our location</a></span></div>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->



<?php include "includes/futter.php";?>