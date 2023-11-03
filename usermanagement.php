<?php
require_once('connect.php');
session_start();
 ?>

<?php include('header.php'); ?>

<?php include('navbar.php'); ?>



<!DOCTYPE html>
<html>
  <head>
   
    <link rel="stylesheet" type="text/css" href="stylesbackup1.css">

  </head>
  
  
  <body>

    <div class="row">
    <div class="content">
<!-- if(isset($_SESSION['userStatus']) && (($_SESSION['userStatus']=="STAFF") || ($_SESSION['userStatus']=="ADMIN"))){ -->
    <?php
      if(isset($_SESSION['memberUserId']) ){
    ?>
        <div class="boxWrapper">

          <div class="box1">
            <div class="profileWrapper">
              <img class="profileImg" src="person.png" border="0" />
            </div>
            <div class="pofileText">
              <?php
              echo "Hello"."&nbsp".$_SESSION['userFirstName']."&nbsp".$_SESSION['userLastName']."<br>"."<br>"."Status:".$_SESSION['memberType']."<br><br>"."Bonus points:".$_SESSION['bonusPoint'];
              ?>
              <br>
              <br>
              <a href="HOOM.php ">Logout</a>
            </div>

          </div>
          <div class="box2">

              <div class="rightSecondRow">
                <a href="trackservice.php">
                  <div class="regisItemWrapper">
                    <h1>Track Service Process</h1>
                  </div>
                </a>

              </div>
              <div class="rightSecondRow">
                <a href="benefit.php">
                  <div class="viewHistorymWrapper">
                    <h1>View benefit of bonus point</h1>
                  </div>
                </a>

              </div>

          </div>


      </div>
    <?php }
      else {
        ?>
        <div class="boxWrapper">

          <div class="box1">
            <div class="profileWrapper">
              <img class="profileImg" src="person.png" border="0" />
            </div>
            <div class="pofileText">
              <?php
              echo "Hello"."&nbsp"."Guest"."<br>"."<br>"."Please Signup or login<br>"."to receive the bonus";
              ?>
              <br>
              <br>

            </div>

          </div>
          <div class="box2">

              <div class="rightSecondRow">
                <a href="trackservice.php">
                  <div class="regisItemWrapper">
                    <h1>Track Service Process</h1>
                  </div>
                </a>

              </div>

          </div>


      </div>
  <?php  } ?>

    </div>
  </div>

  
  </body>

</html>
