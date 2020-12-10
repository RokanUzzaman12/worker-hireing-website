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

<div class="wrapper bgded overlay gradient" style="background-image:url('images/background.jpg');">
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
      $mem_profile_query = "SELECT * FROM members WHERE mem_email = '$email' ";
      $mem_profile_query_result = mysqli_query($con,$mem_profile_query);

      while($row = mysqli_fetch_assoc($mem_profile_query_result)){
        $mem_cat_id = $row['mem_cat_id'];
        $mem_name = $row['mem_user_name'];
        $mem_email = $row['mem_email'];
        $mem_pass = $row['mem_pass'];
        $mem_description = $row['mem_description'];
        $mem_rate = $row['mem_rate'];
        $mem_details = $row['mem_details'];
        $mem_image = $row['mem_image'];
    ?>

      <h1> <?php echo($mem_name);?> </h1>
      <!-- <h1><sup>&#2547;</sup><strong>50</strong><em>/Hour</em></h1> -->
      <!-- <img class="imgr borderedbox inspace-5" src="348x261.png" alt=""> -->
      <p> <?php echo($mem_description);?></p>
      
      <img class="imgl borderedbox inspace-5" src="images/<?php echo $mem_image;?>" alt="">
      
      <p><?php echo($mem_details);?></p>
      
  <div class="row">
    <div class="col-md-12"><h1> <a href = "#">Hire him <sup>&#2547;</sup><strong><?php echo($mem_rate);?></strong><em>/Hour</em></a></h1></div>

  </div>



    <?php
      }
    ?>
      <!-- ################################################################################################ -->

  <div class="row">

  <div class="col-md-12">
  <div id="comments">
        <h2>Comments</h2>
        <ul>
 
          
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                By <a href="#">A Name</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
              </header>
              <div class="comcont">
                <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
              </div>
            </article>
          </li>
        </ul>
        <h2>Write A Comment</h2>
        <form action="#" method="post">
          <div class="one_third first">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="name" id="name" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="email">Mail <span>*</span></label>
            <input type="email" name="email" id="email" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="url">Website</label>
            <input type="url" name="url" id="url" value="" size="22">
          </div>
          <div class="block clear">
            <label for="comment">Your Comment</label>
            <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
          </div>
          <div>
            <input type="submit" name="submit" value="Submit Form">
            &nbsp;
            <input type="reset" name="reset" value="Reset Form">
          </div>
        </form>
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