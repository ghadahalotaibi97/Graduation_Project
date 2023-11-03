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
  <br>
 <div class="registerContent">
      <div class="registerDiv">
        <h1 style="margin-left:500px; margin-right: 20px; ">Sign In (USER)</h1>
       
        <br>
        <form action="userchecklogin.php" method="post" style="margin-left:500px;">


          <label for="userId" >username</label>
          <input type="text" id="userId" name="userId" placeholder="userId">

          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Your password">



          <input type="submit" name="userSignInSubmit" value="SignIn">
        </form>
      </div>
</div>



</body>

</html>


