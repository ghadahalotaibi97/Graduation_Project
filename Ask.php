<html>
<head>




<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>



/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #666666;
  color: black;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #c2c2c2;
}

/* Style the container/contact section */
.container {
  border-radius: 2px;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 300px) {
  .column, input[type=submit] {
    width: 50%;
    margin-top: 0;
  }
}

.active {
background-color:rgba(77, 77, 77,0.6);

}
.container {
  border-radius: 5px;
  
  padding: 8px;
}
a {
  color: black;
}



.footer1 {

position:absolute;
   left: 4px;
   bottom: -260px;
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
</head>



<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://bootswatch.com/flatly/bootstrap.css" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>

 <meta charset="UTF-8">

  <!-- Custom styles for this template -->
  <link href="css/rotating-card.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/anotherDefault.css" rel="stylesheet">
</head>
<body>
<?php include('navbar.php'); ?>
  





<div class="container">
<div style="text-align:center">
<h2> <b>Ask Question </b></h2>
</div>
<div class="row">
<div class="column">
<img src="card-01.jpg" style="width:100%; height: 90%;">
</div>
<div class="column">

<form method=post name="questions">

<label for="FirstName">First Name</label>
<input type="text" id="fname" name="FirstName" placeholder="Your name.." pattern="[A-Za-z]+" maxlength="10" title="Please Enter letter " required>


<label for="LastName">Last Name</label>
<input type="text" id="lname" name="LastName" placeholder="Your last name.."pattern="[A-Za-z]+" maxlength="10" title="Please Enter letter " required>


<label  for="Email">Email</label><br> 
<input type="email" id="lname" name="Email" placeholder="Your Email.." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
<br> 
<br>
<label for="PhoneNumber">Phone</label><br>
<input type="tel" id="lname" name="PhoneNumber" placeholder="05******** " pattern="[0-9]{10}" required> <br> <br> 

<label for="question">Enter your question</label>
<textarea id="subject" name="question" placeholder="Write something.." style="height:170px" required></textarea> <br><br>
<input type="submit" value="Submit">
</form>
</div>
</div>
</div>



<?php

include "config.php";

if($_POST)
{
$FirstName=$_POST["FirstName"];
$LastName=$_POST["LastName"];
$Email=$_POST["Email"];
$PhoneNumber=$_POST["PhoneNumber"];
$question=$_POST["question"];
$sql="INSERT INTO ask (FirstName,LastName,Email,PhoneNumber,question) VALUES ('$FirstName','$LastName','$Email','$PhoneNumber','$question')";

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



<br>
<div class="footer1">
 <a href="https://www.facebook.com/ksatourwebsite" class="fa fa-facebook" style="font-size: 20px; color: #737373;" ></a>
  <a href="https://twitter.com/KSATOUR_" class="fa fa-twitter" style="font-size:  20px; color: #737373;"></a>
  <a href="https://www.instagram.com/ksatour_/?hl=en" class="fa fa-instagram"style="font-size:  20px; color: #737373;"></a>
 
</div>
 
</body>
</html>