<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <!-- ################################################################################################ -->
      <h1><a href="index.php">We Care</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->

      <ul class="clear">
            <li class=""><a href="index.php">Home</a></li>
            <li class=""><a href="members.php">All members</a></li>
            <li><a class="drop" href="#">Service</a>
              <ul>
                  <?php 
                    $cat_query = "SELECT * FROM category ";
                    $cat_query_result = mysqli_query($con,$cat_query);

                    while ($row = mysqli_fetch_assoc($cat_query_result)){
                        $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];
                        echo "<li class='active'><a href='./selected_category.php?selected_cat=$cat_id'>{$cat_title}</a></li>";
                    }
                  ?>
                </ul>
            </li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>

            <li><a class="drop" href="#"><i class="fa fa-user"></i> <?php
              if($_SESSION['username']){
                echo $_SESSION['username'];
              }else{
                echo "<li class='active'><a href='./login.php'> Login </a></li>";;
              }
            ?></a>
              <ul>
                  <?php 
                        if($_SESSION['author'] === 'member'){
                          $user_id = $_SESSION['userid'];

                          echo "<li class='active'><a href='./profile.php'> Profile </a></li>";
                          echo "<li class='active'><a href='./edit_member_profile.php?editmember=$user_id'> Edit Profile </a></li>";
                          echo "<li class='active'><a href='./logout.php'> Logout </a></li>";

                        }
                        
                        
                        
                        elseif($_SESSION['author'] === 'admin'){
                          echo "<li class='active'><a href='./admin'> admin </a></li>";
                          echo "<li class='active'><a href='./logout.php'> Logout </a></li>";

                        }
                        elseif($_SESSION['author']==='user'){
                          $user_id = $_SESSION['userid'];
                          echo "<li class='active'><a href='./user_profile.php'> Profile </a></li>";
                          echo "<li class='active'><a href='./edit_user_profile.php?edituser=$user_id'> Edit Profile </a></li>";
                          echo "<li class='active'><a href='./logout.php'> Logout </a></li>";
                        }
                        else{
                          echo "<li class='active'><a href='./login.php'> Login </a></li>";
                        }
                    
                    
                  ?>
                </ul>
            </li>

 
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </header>
</div>