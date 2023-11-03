<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>

<br> 
<br> 
<head>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://bootswatch.com/flatly/bootstrap.css" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style>


 body{


  

 }


.hero-image {
  background-image: url("bac.jpg");
  background-color: #cccccc;
  height: 730px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

  margin-top:-130px;
}

  h2{
color:white;
  }
  label{
color:white;
  }
  .container5 {
  
  
    background-color: #26262b9e;
    


      text-align: center;
  position: absolute;
  top: 60%;
  left:500px;
  width: 670px;
  transform: translate(-70%, -70%);
  }



.btn-primary {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
}

.footer1 {

position:absolute;
   left: 4px;
   bottom: -90px;
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

<div class="hero-image">
<div class="container5" style="margin-left:370px; margin-top: 50px;">

  <center><h2>Registration form</h2></center></br>
  <form class="form-horizontal" method="post" action="add_user.php">

    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="name"> Frist Name:</label>
	  
      <div class="col-sm-5">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="firstname"  pattern="[A-Za-z]+" maxlength="10" title="Please Enter letter " required>
      </div>
    </div>

  <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="name"> Last Name:</label>
	  
      <div class="col-sm-5">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="lastname"  pattern="[A-Za-z]+" maxlength="10" title="Please Enter letter " required>
      </div>
    </div>


	<div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="email">Email:</label>
	  
      <div class="col-sm-5">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="pwd">Password:</label>
      <div class="col-sm-5">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
      </div>
    </div>


	 <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="number"> Phone :</label> &nbsp; &nbsp;
      <div class="col-sm-5">
        <input type="tel" class="form-control" id="number" placeholder=" Ex : 05x-xxx-xxxx" name="number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
      </div>
    </div>
	
 <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="number">Type account :</label> &nbsp; &nbsp;
      <div class="col-sm-5">
      <select name="status" id="number" class="form-control" required>
<option disabled selected>Chooes </option>
<option >Owner</option>
<option >User</option>
</select>
      </div>
    </div>
    
    <div class="form-group">        
      <div style="  text-align: center;">
        <button type="submit" class="btn btn-primary" >Sign Up</button>
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
