<html>
<?php
 session_start();  
if ( isset($_SESSION['login']) && isset($_SESSION['password'])){
 include('header.php');
include 'db.php';
?>

<!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
     
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- 
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="ksatour";
$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error) {
  die("Connection failed: " . $conn-> connect_error);
}

$sql = $conn->query("SELECT * FROM register");
?>--> 

<style>

@import url('https://fonts.googleapis.com/css?family=Boogaloo|Caveat|Fredericka+the+Great|Merienda+One|Rock+Salt&display=swap');

 @import url('https://fonts.googleapis.com/css?family=Lemon&display=swap');


body,h1,h2,h3,h4,h5,h6 {
font-family: "Raleway", sans-serif}
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 70%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: rgb(89, 89, 89);
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: rgb(217, 217, 217);
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;

}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
    .nav{
      
      height: 110px;

list-style: none;
margin:13px;
position:absolute;
left: -10px;
   bottom: -40px;
   width: 100%;
   size: 30px;

   color: black ;
   text-align:center;
    }
    .
   .logo{
left: -140px;
  margin: 10px 20px;
  height: 30px;
}

.menu{


list-style: none;
margin:13px;
position:absolute;
left: -140px;
   bottom: -5px;
   width: 100%;
   size: 30px;
 
   color: black ;
   text-align:center;

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


body {
 

padding: 20px;
font-family: Arial;
 margin: 0;
 width: 100%
  background-repeat: no-repeat;
    font-size: 17px;
}

.main {
max-width:800px;
margin: auto;
}


.button {
background-color:#CACFD2 ;
border: none;
color: #17202A ;
padding: 30px 32px;
text-align: center;
text-decoration: none;
display:inline-block;
font-size: 16px;
margin: 6px 2px;
right: 30%;

;

}


 a {
  color: black;

}
/* ----------*/


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
/* -----*/ 

.btn:hover {
  opacity: 1;
} 


* {box-sizing: border-box;}

.input-container {

  display: flex;
  width: 100%;
  margin-bottom: 10px;
}

.icon {
  padding: 10px;
  background: #8c8c8c;
  color: white;
  min-width: 60px;
  text-align: center;
}

.input-field {
  height: 50px;
  width: 400px;
  padding: 10px 10px;
min-width: 60px;
}

.input-field:focus {
  border: 1px solid #8c8c8c;
}

/* Set a style for the submit button */
.btn {
  background-color:#8c8c8c;
  color: white;
  padding: 15px 12px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}


.footer {
position:absolute;
left: -140px;
   bottom: -5px;
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


<body class="w3-light-grey w3-content" style="max-width:1600px">


<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:310px; height: 570px; margin-top:100px; margin-left: -10px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <br> <br>
    <img src="https://i.pinimg.com/originals/a6/58/32/a65832155622ac173337874f02b218fb.png" style="width:45%; margin-left: 60px;" class="w3-round"><br><br>
   
   
  </div>
  <div class="w3-bar-block" >
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding" ><i class="fa fa-user fa-fw w3-margin-right"></i>User Info</a> 
     <a href="Ask.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>Ask Question </a>
	  <a href="answer.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i> InBox </a>
  </div>
  
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header class="navbar navbar-default"   style="height: 100px;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
<div class="navbar-brand" >
  <img class="logo"
       src="images/logoo.png" alt="Logo" style="margin-left: -190px; width: 130px ; height: 80px ; margin-top: -25px; " > </div>
   </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <br>
 <ul class="nav navbar-nav" >
 <li style="font-size:21px;color: black;"><a href="HOOM.php " ><i class="glyphicon glyphicon-home"></i> Home </a></li> 
<li style="font-size:21px; color: black;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class='fas fa-calendar-check'></i> Reservation <span class="caret"></span></a>
          <ul class="dropdown-menu">

            <li style="font-size:21px; color: black; "><a href="flights.php"><i class='fas fa-plane'></i> Flights</a></li>
 <li role="separator" class="divider"></li>
            <li style="font-size:21px; color: black; "><a href="SelectCity_hotel.php"><i class='fas fa-hotel'></i></i> Hotels</a></li>
 <li role="separator" class="divider"></li>
            <li style="font-size:21px; color: black; "><a href="SelectCity_house.php"><i class='fas fa-hotel'></i></i> House</a></li>

             <li role="separator" class="divider"></li>
            <li style="font-size:21px; color: black; "><a href="packag.php"> <i class='fas fa-users'></i> Package</a></li>
</ul>
        </li>


  <li style="font-size:21px;  color: black;"><a href="event.php" > <i class='fas fa-umbrella-beach'></i> Events</a></li> 

      <li style="font-size:21px;  color: black;"><a href="index.php" > <i class='fas fa-mug-hot'></i> Try</a></li>
      
   <li style="font-size:21px;  color: black;"><a href="Transportion.php" > <i class='fas fa-car'></i> Transportion</a></li>

 <li style="font-size:21px;  color: black;"><a href="VISA.php"> <i class='fas fa-passport'></i> Visa</a></li>

           <li style="font-size:21px;  color: black;"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
 <li style="font-size:21px;  black;"> <a>
 

 <?php 

              $email=$_SESSION['login'];
              $password=$_SESSION['password'];
              $res=$conn->query("select * from register where email='$email' and password='$password'");
              $row=$res->fetch_object();

              echo  " <i class='fas fa-user-check' > Hi</i>  ".$row->firstname;
              ?>  
                
              </a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

  </header>

 <br>
  <br> 
  <div class="container">
<div >
<h2 style="margin-left: 25px;"> <b>MY PROFILE</b></h2>
<hr color="black" width="2000 px"/ >
</div>



<div class="container">

  <div style="margin-top:10px;">
    <table class="table table-striped table-bordered" style="width: 950px;">
                <thead>
                         
                    <th>First Name : </th>
                      <th>Last Name : </th>
                  <th>Email : </th>
                  <th>password : </th>
                   <th>Mobile number : </th>
                  <th>Actions</th>
                </tr>
                </thead>
      <tbody style="size: 550px;">
        <?php
          $sql="select * from register where email = '".$email."' and password = '".$password."' ";


          $query=$conn->query($sql);
          while($row=$query->fetch_array()){
            ?>


         <tr>
              
              <td> <?php echo $row['firstname']; ?></td>
                   <td> <?php echo $row['lastname']; ?></td>
          
         

        
              
                <td> <?php echo $row['email']; ?></td>

         
            
             
                <td> <?php echo $row['password']; ?></td>

          
           
             
              <td> <?php echo $row['number']; ?></td>

            
<td>
              <button type="button" class="btn btn-info btn-xs" data-target="#modal_update<?php echo $row['id']?>"data-toggle='modal'><span class='glyphicon glyphicon-pencil'></span> Edit</button>
             </td>
</tr> 
             <div class="modal fade" id="modal_update<?php echo $row['id']?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title">Update My Profile </h3>
                </div>
                <form action="update_expense.php" method="POST" enctype="multipart/form-data" style="height: 100px;">
                <div class="modal-body" style="margin-top: -114px;">
                 <input type="hidden" id="getID" name="getID" value="<?php echo $row['id']?>">

              
            
                      <label>First Name</label>
                      <input type="text" name="firstname" id="name" class="form-control" value="<?php echo $row['firstname']?>" required="">
                    

        
                
                      <label>Last Name</label>
                      <input type="text" name="lastname" id="name" class="form-control" value="<?php echo $row['lastname']?>" required="">
                
             
                   
                      <label>Email</label>
                      <input type="email" name="email" id="email" class="form-control" value="<?php echo $row['email']?>" required="">
        
                      <label>Password</label>
                      <input type="password"  name="password" id="pwd" class="form-control" value="<?php echo $row['password']?>" required="">
          
                      <label>number</label>
                      <input type="tel"  name="number" id="number" class="form-control" value="<?php echo $row['number']?>" required="">
              

                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 80px;">No</button>
                  <input type="submit" id="submit" name="submit"  value="Yes" class="btn" style="width: 80px; height: 50px;" />
                 </div>
                <!-- </div>
               </div> -->
              </form>
              </div>
            </div>
          </div>  
          <?php 
            }
             ob_flush();
          ?>
                        
      </tbody>
    </table>

  </div> 

            



<script>
function myFuncion()
{
	alert("Thanks!");
}
</script>
<br>
<br><br>
    <footer>   
        <div class="footer" style="margin-left:140px;"> 
  <a href="https://www.facebook.com/ksatourwebsite" class="fa fa-facebook" style="font-size: 20px; color: #737373;" ></a>
  <a href="https://twitter.com/KSATOUR_" class="fa fa-twitter" style="font-size:  20px; color: #737373;"></a>
  <a href="https://www.instagram.com/ksatour_/?hl=en" class="fa fa-instagram"style="font-size:  20px; color: #737373;"></a>
 
</div>

  </footer>
  
<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>
<?php 
} else echo '
         <script type="text/javascript">
          alert("Error You must login befor accsess the page !");
          window.location.replace("login.php ");
         </script>';


?> 

</body>
</html>