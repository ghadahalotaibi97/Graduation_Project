
<?php
  require_once('connect.php');

?>
<?php include('header.php'); ?>



<!DOCTYPE html>
<html>
  <head>
   
    <link rel="stylesheet" type="text/css" href="stylesbackup1.css">
 
 
  </head>
 
  <body>
 <?php include('navbar.php'); ?>
    <div class="registerContent">
      <div class="registerDiv">
        <h1>Sign Up (USER)</h1>
        <hr>
        <br>
        <form action="userfinishregister.php" method="post">


          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstName" placeholder="Your name..">

          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastName" placeholder="Your last name..">


          <label for="status">Gender</label>
          <select class="statusSelect" name="gender">
            <option value="M">Male</option>
            <option value="F">Female</option>
          </select>

          <label for="mobileNo">Mobile number</label>
          <input type="text" id="mobileNo" name="mobileNo" placeholder="Your mobileNo..">

          <label for="address">Address</label>
          <input type="address" id="address" name="address" placeholder="Phahonyothin Rd, Tambon Khlong Nung, Amphoe Khlong Luang, Chang Wat Pathum Thani 12120">

          <label for="mail">Email</label>
          <input type="text" id="mail" name="email" placeholder="Your Email">

          <label for="userId">User id</label>
          <input type="text" id="userId" name="userId" placeholder="Your userId">

          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Your password">

          <label for="rePassword">Retype Password</label>
          <input type="password" id="rePassword" name="rePassword" placeholder="Your password">


          <input type="submit" name="userRegisterSubmit" value="Submit">
        </form>
      </div>
    </div>
      <div class="regisImageWrapper">
        <img src="regis.jpg" alt="">
      </div>


  </body>

</html>
