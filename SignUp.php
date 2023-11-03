<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body, html {
 background-image:url("https://www.cntravellerme.com/sites/default/files/styles/1920px_900px_wide_landscape/public/images/2019/08/05/Edge-of-the-World-%281%29.jpg?itok=zNoIrfNj&c=209e108c1249ed303f756e24e16a22ad");

  overflow: auto;
    min-height: 720px;
  background-repeat: no-repeat;
  background-size: cover;

  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.active {
background-color:rgba(77, 77, 77,0.6);

}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 560px;
  margin-left:333px;
  max-width: 300px;
  padding: 30px;
  background-color:rgba(153, 153, 153,0.4);
  
}

.container3 {
  position: absolute;
  right:70px;
  margin-left:-500px;
  max-width: 300px;
  padding: 30px;
 
  
}

.topnav {
  overflow: hidden;
  background-color:#0d9e3d
;
}
/* Full-width input fields */
input[type=text], input[type=password] , input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus ,input[type=number]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  
  color: black;
  padding: 5px 5px;

  background-color:rgba(153, 153, 153,0.4);
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  border: 2px solid #000000;
}
form{
  
            text-align: center;

        }
.btn:hover {
  opacity: 1;
}

a {
  color: black;
}

img .logo{
  position: absolute;
  
 
  align-items: center;
}
   .nav{
      background:rgb(217, 217, 217);
      height: 110px;
    }
    .
   .logo{

  margin: 10px 20px;
  height: 30px;
}

.menu{

left: -4px;
list-style: none;
margin:20px;

}
.menu li{

  display: inline-block;
  margin: 5px 15px;


 
}
.menu li a{

  text-decoration:none;
  color:black;
  padding:5px 15px;
  font-family: sans-serif;
  letter-spacing:4px;
font-size: 16px;


}
.menu a:hover {
 background-color:rgba(77, 77, 77,0.6);

}

/* ---------- start login -------*/ 


input[type=Email], input[type=password] {
  width: 100%;
  padding: 12px 15px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}


button {
  
  color: black ;
  padding: 10px;
  font-size: 19px;
display: inline-block;
background:rgb(217, 217, 217);
border: none;
  font-family: sans-serif;

}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
  text-align: center;
  margin-left: 20px;
}

span.psw {
  float: right;

}

/* The Modal (background) */
.modal {
  display: all;
  /* Hidden by default */
 position:fixed;
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100% ;/* Full width */
  height: 100%;/* Full height */
  overflow: auto; /* Enable scroll if needed */
 /* Black w/ opacity */
  padding-top: 90px;

}

/* Modal Content/Box */
.modal-content {

  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width:30%;
  height: 84%;
/* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
/* ---------- end login -------*/ 


.dropbtn {

  color: black ;
  padding: 10px;
  font-size: 19px;
display: inline-block;
background-color:rgba(77, 77, 77,-1);
border: none;
  font-family: sans-serif;
}

.dropdown {
  position: relative;
  
}

.dropdown-content {
    font-family: sans-serif;
  display: none;
  position: absolute;
  background-color:rgba(77, 77, 77,0.6);
  min-width: 190px;
  
  z-index: 1;
}

.dropdown-content a {
  color: black;
 padding: 5px 10px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
   background-color:rgba(77, 77, 77,0.6);
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
 background-color:rgba(77, 77, 77,0.6);
}
.footer {
   position:absolute;
   left: 4px;
   bottom: -60px;
   width: 100%;
   size: 30px;
  background-color:rgba(153, 153, 153,0.4);
   color: black ;
   text-align:center;

  
}
.fa {
  padding: 20px;
  font-size: 30px;
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
</head>
<body>

<header>

<div class="nav">
  <img class="logo" src="logoo.png" alt="Logo" style="float:left; width: 200px ; height: 110px ;  " > 
  <ul class="menu">
    <li> <a href="home.html"></i> <i class="glyphicon glyphicon-home"></i>  Home </a></li>
<li>
<div class="dropdown">
  <button class="dropbtn"> <i class='fas fa-calendar-check'></i> Reservation</button>
  <div class="dropdown-content">
  <a href="aboutus.html"></i><i class='fas fa-plane'></i>  Flights</a> 
 <a href="http://192.168.64.2/Car/Contactus2.php"><i class='fas fa-hotel'></i></i> Hotels </a> 
 <a href="CarPac10.html"> <i class="glyphicon glyphicon-home"></i> House</a>
<a href="CarPac10.html"> <i class='fas fa-users'></i> Package</a>
  </div>
</div>

 </li>

      <li> <a  href="event.html"> <i class='fas fa-umbrella-beach'></i> Events</a>  </li>
    <li> <a href="Transportion.html"> <i class='fas fa-car'></i>Transportion</a></li>
    <li> <a href="visa.html"><i class='fas fa-passport'></i> Visa</a></li>
 
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;


 <!--
      <li>  <a href="Ask.html"> 
<i class='fas fa-question-circle'></i> Ask Question </a></li>
      -->
       <!-- <li>  <a href="Login1.php" > <i class="glyphicon glyphicon-user"></i> </a> </li> -->

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> <i class='fas fa-user-alt'></i></button>

<div id="id01" class="modal" >
  
  <form method=post name="UserAccounts" class="modal-content animate">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="https://cdn3.iconfinder.com/data/icons/business-avatar-1/512/4_avatar-512.png" alt="Avatar" class="avatar">
    </div>

    <div class="container3" style="margin-left:-200px;">

      <label for="Email" ><b>Email</b></label>  
      <br> 
      <input type="Email" placeholder="Enter Email" name="Email" required style="width:200px; height: 30px;">
<br> 
<br>
      <label for="psw"><b>Password</b></label> 
      <br> 
      <input type="Password" placeholder="Enter Password" name="psw" required style="width: 200px; height: 30px;">
        <br> 
        <br>
      <button type="submit">Login</button>
    <br> 
    <br>
      <label>

        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
   
<br>

  <div style="text-align: center;" >
<a href="http://192.168.64.2/KSA/home.php" ><u> SignUp </u></a> 
</div>
 </div>
  </form>
</div>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ksatour";

$conn = new mysqli($servername, $username, $password,$database);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$Email=$_POST['Email'];
$Password=$_POST['Password'];


$sql = "SELECT * FROM SignUp WHERE Email='".$Email."' AND  Password='".$Password."'limit 1";

$resut =$conn->query($sql);
if ( $resut->num_rows >0) {
  while($row = $resut->fetch_assoc()){

  echo " WELCOME";
 



}}
else{
  echo "Invalid email or password";
 
}
$conn->close();
?> 



  </ul>
</div>


</header>



<br> 

<div class="bg-img">

<form method=post name="UserAccounts" class="container">


<p><b style="color: black;">Email</b></p> 
<input type="email" placeholder="Enter Email" name="Email"><br/></p>
<p><b style="color: black;">Password</b></p> 
<input type="password" placeholder="Enter Password" name="Password" maxlength="8"><br/></p>

<span style="color: black;">Already have an account?<a href="Login.php"> Login</a></span>
<br><br>
<p><button type="submit" class="btn"><a href="http://192.168.64.2/KSA/home.php" > Sign Up </a></button>
<br><br>
<!--<button type="submit" class="btn">Cancle</button></p>-->
</form>
</div>

<script>
function myFuncion()
{
	alert("Thanks");
}
</script>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ksatour";
$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error) {
	die("Connection failed: " . $conn-> connect_error);
}


$Email=$_POST["Email"];
$Password=$_POST["Password"];

$sql="INSERT INTO SignUp(Email,Password) VALUES ('$Email','$Password')";

if ($conn->query($sql) === true) {
	echo '<script>myFuncion()</script>';
} else 
{ echo "";
}
$conn->close(); 
?> 

<br>
<br>
<div class="footer">
  <a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-instagram"></a>
 
</div>


</body>
</html>