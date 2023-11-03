
<?php include('navbar.php'); ?>

<br> 
<br> 

<?php
   ob_start();
   session_start();
?>
<style>

.hero-image {
  background-image: url("Scrmm.png");
  background-color: #cccccc;
  height: 890px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

  margin-top:-160px;
}


  h2{
color:white;
  }
  label{
color:white;
  }
  .container5 {
  
    width: 50%;
    background-color: #26262b9e;
    padding-top:5%;
    padding-bottom:5%;
    padding-right:10%;
    padding-left:10%;
   text-align: center;
  position: absolute;
  top: 70%;
  left:500px;
  width: 570px;
  transform: translate(-70%, -70%);
  }


.btn-primary {
  background-color:#bfbfbf;
  color: black;
 width: 90px;
 
}
.btn-primary:hover {
  background-color:#8c8c8c;
  color: white;
}
.footer1 {

position:absolute;
   left: 4px;
   bottom: -120px;
   width: 100%;
   size: 80px;
  background-color:#f2f2f2;
   color: black ;
   text-align:center;
}
.fa {
  padding: 20px;
  font-size: 60px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}




  </style>

<!--
 --> 

  <?php
  include "conn.php";
  if($_POST)
  {
    $email = $_POST['email'];
    $password = $_POST['password'];
  $sql = "SELECT * FROM `register` where email='".$email."' and password='".$password."' ";
    $query =  mysqli_query($conn, $sql);
    if( mysqli_num_rows($query)> 0)
     {
   
 $query=$conn->query($sql);
          while($qry=$query->fetch_array()){

$_SESSION['login']=$email;
    $_SESSION['password']=$password;
     $s=$qry['status'];
	 $f="Owner";
      if(strcmp($s,$f)==0){
        $_SESSION['user'] = $qry;
        $_SESSION['success'] ="You are now logged in";
        header('location:owner/myaccount.php');     
      }else{
        $_SESSION['user'] = $qry;
        $_SESSION['success']  = "You are now logged in";

        header('location: profile.php');
		  } }
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }

  ?> 

<div class="hero-image">
<div class="container5" style="margin-left:370px; margin-top: 50px;">
  <center><h2>Login form</h2></center></br>
  <form class="form-horizontal" method="post" action="">

    <div class="form-group"> 
      <label class="control-label col-sm-2" for="email" ><p style="text-align: center;"> &nbsp; &nbsp;  Email:&nbsp;   </p>  </label> 
      <br> <br> <br>
    
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">  <p style="text-align:center; " > &nbsp; &nbsp; Password:&nbsp;   </p>  </label> 
      <br> <br> <br>
      <div class="col-sm-10">

        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
      </div>
    </div>
    <div class="form-group">
    <br>       
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit"class="btn btn-primary" style="margin-left:-50px;">Login</button>
        <br>  <br>
        <a href="register.php" style="margin-left:-40px;"> Create New account </a>
          <br> 
      </div>
    </div>
  </form>
</div>
</div>
  <br>
<div class="footer1">
  <a href="https://www.facebook.com/ksatourwebsite" class="fa fa-facebook" style="font-size: 20px; color: #737373;" ></a>
  <a href="https://twitter.com/KSATOUR_" class="fa fa-twitter" style="font-size:  20px; color: #737373;"></a>
  <a href="https://www.instagram.com/ksatour_/?hl=en" class="fa fa-instagram"style="font-size:  20px; color: #737373;"></a>
</div>
</body>
</html>
