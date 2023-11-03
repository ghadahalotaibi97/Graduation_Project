<?php include('navbar.php'); ?>
<?php
 session_start();  
if ( isset($_SESSION['login']) && isset($_SESSION['password'])){
 include('header.php');
include 'db.php';
?>

<br> 
<br> 


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  
  background-image: url('jeed1.jpg');
  background-size: cover;
  background-position: center;
  background-repeat:no-repeat;
  
}
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container5 {
  background-color: rgba(0, 0, 0, 0.4);
  padding: 5px 20px 15px 20px;
  
 
  width: 550px;
  margin-left:450px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: white;
   color: white;
}

.icon-container5 {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #8c8c8c ;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #cccccc;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>


<div class="row">
  <div class="col-75">
    <div class="container5">
      <form method=post action="HOOM.php">
      
        <div class="row">
          <div class="col-50">
            <h3 style=" color: white;">Payment</h3>

            <label for="Name"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="Name" placeholder=" Enter Full Name " pattern="[A-Za-z]+" maxlength="10" title="Please Enter letter " required>
            <label for="Email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="Email" placeholder="xxxx@example.com"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
         
            <label for="City"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="City" placeholder="Enter Your  City "pattern="[A-Za-z]+" maxlength="10" title="Please Enter letter " required>

  <label for="NameCard">Name on Card</label>
            <input type="text" id="cname" name="NameCard" placeholder="Enter Name on Card "  required>
            <div class="row">
              <div class="col-50">
                <label for="State">State</label>
                <input type="text" id="state" name="State" placeholder="NY"required >
              </div>

              <div class="col-50">
                <label for="Zip">Zip</label>
                <input type="text" id="zip" name="Zip" placeholder="10001" required>
              </div>
            </div>
          </div>

          <div class="col-50">
          <br> <br> <br> <br> <br><br> <br>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container5">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
         
            <label for="Creditcardnumber">Credit card number</label>
            <input type="text" id="ccnum" name="Creditcardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="ExpMonth">Exp Month</label>
            <input type="text" id="expmonth" name="ExpMonth" placeholder="September" required>
            <div class="row">
              <div class="col-50">
                <label for="ExpYear">Exp Year</label>
                <input type="text" id="expyear" name="ExpYear" placeholder="2020" required>
              </div>
              <div class="col-50">
                <label for="CVV">CVV</label>
                <input type="text" id="cvv" name="CVV" placeholder="352"  maxlength="3" required>
              </div>
            </div>
          </div>
          
        </div>
       
        <input type="submit" value="Continue to checkout" class="btn"  style="margin-left:150px; width: 190px;">
      </form>
    </div>
  </div>
  
<?php

include "config.php";

if($_POST)
{
$Name=$_POST["Name"];
$Email=$_POST["Email"];
$City=$_POST["City"];
$NameCard=$_POST["NameCard"];
$State=$_POST["State"];
$Zip=$_POST["Zip"];
$Creditcardnumber=$_POST["Creditcardnumber"];
$ExpMonth=$_POST["ExpMonth"];
$ExpYear=$_POST["ExpYear"];
$CVV=$_POST["CVV"];

$sql="INSERT INTO `payment`( `Name`, `Email`, `City`, `NameCard`, `State`, `Zip`, `Creditcardnumber`, `ExpMonth`, `ExpYear`, `CVV`) VALUES ('$Name','$Email','$City','$NameCard','$State','$Zip','$Creditcardnumber',
'$ExpMonth','$ExpYear','$CVV')";



  $query = mysqli_query($conn,$sql);
  if($query=== true)
  {
 
   echo '<script type="text/javascript">

          window.onload = function () { alert("Thanks!"); }

</script>';
  }
  else
  {
    echo "!";
  }
  $conn->close(); 
  }
?>
<!--
 <?php 

              $email=$_SESSION['login'];
              $password=$_SESSION['password'];
              $res=$conn->query("select * from register where email='$email' and password='$password'");
              $row=$res->fetch_object();

              echo "Hi".$row->name;
              ?>  --> 
</div>

  <br>
<?php 
} else  echo '<script type="text/javascript">
          alert("You must be login!");
          window.location.replace("login.php");
         </script>';
?> 
</body>
</html>
