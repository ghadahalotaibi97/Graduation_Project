<!DOCTYPE html>
<html lang="en">

<head>
<title>Flight</title>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<style>
* {
    padding: 0;
    margin: 0;
    border: 0;
}

.section {
	position: relative;
	height: 100vh;
}

.section .section-center {
	position: absolute;
	top: 35%;
	left: 0;
	right: 0;
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
}

body {
	
	font-family: 'PT Sans', sans-serif;
	background-image: url('background.jpeg');
	background-size: cover;
  
}

.booking-form {
	background: rgba(0, 0, 0, 0.7);
	padding: 40px;
	border-radius: 6px;
}

.booking-form .form-group {
	position: relative;
	margin-bottom: 20px;
}

.booking-form .form-control {
	background-color: #fff;
	height: 50px;
	color: #191a1e;
	border: none;
	font-size: 16px;
	font-weight: 400;
	-webkit-box-shadow: none;
	box-shadow: none;
	border-radius: 40px;
	padding: 0px 25px;
}

.booking-form .form-control::-webkit-input-placeholder {
	color: rgba(82, 82, 84, 0.4);
}

.booking-form .form-control:-ms-input-placeholder {
	color: rgba(82, 82, 84, 0.4);
}

.booking-form .form-control::placeholder {
	color: rgba(82, 82, 84, 0.4);
}

.booking-form input[type="date"].form-control:invalid {
	color: rgba(82, 82, 84, 0.4);
}

.booking-form select.form-control {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
}

.booking-form select.form-control+.select-arrow {
	position: absolute;
	right: 10px;
	bottom: 6px;
	width: 32px;
	line-height: 32px;
	height: 32px;
	text-align: center;
	pointer-events: none;
	color: rgba(0, 0, 0, 0.3);
	font-size: 14px;
}

.booking-form select.form-control+.select-arrow:after {
	content: '\279C';
	display: block;
	-webkit-transform: rotate(90deg);
	transform: rotate(90deg);
}

.booking-form .form-label {
	display: block;
	margin-left: 20px;
	margin-bottom: 5px;
	font-weight: 400;
	text-transform: uppercase;
	line-height: 24px;
	height: 24px;
	font-size: 12px;
	color: #fff;
}

.booking-form .form-checkbox input {
	position: absolute !important;
	margin-left: -9999px !important;
	visibility: hidden !important;
}

.booking-form .form-checkbox label {
	position: relative;
	padding-top: 4px;
	padding-left: 30px;
	font-weight: 400;
	color: #fff;
}

.booking-form .form-checkbox label+label {
	margin-left: 15px;
}

.booking-form .form-checkbox input+span {
	position: absolute;
	left: 2px;
	top: 4px;
	width: 20px;
	height: 20px;
	background: #fff;
	border-radius: 50%;
}

.booking-form .form-checkbox input+span:after {
	content: '';
	position: absolute;
	top: 50%;
	left: 50%;
	width: 0px;
	height: 0px;
	border-radius: 50%;
	background-color: #006400;
	-webkit-transition: 0.2s all;
	transition: 0.2s all;
	-webkit-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
}

.booking-form .form-checkbox input:not(:checked)+span:after {
	opacity: 0;
}

.booking-form .form-checkbox input:checked+span:after {
	opacity: 1;
	width: 10px;
	height: 10px;
}

.booking-form .form-btn {
	margin-top: 27px;
}

.booking-form .submit-btn  {
	color: #fff;
	background-color: #006400;
	font-weight: 400;
	height: 50px;
	font-size: 14px;
	border: none;
	width: 100%;
	border-radius: 40px;
	text-transform: uppercase;
	-webkit-transition: 0.2s all;
	transition: 0.2s all;
}

.booking-form .submit-btn:hover,
.booking-form .submit-btn:focus {
	opacity: 0.9;
}
h2{
color: #fff;
}


table {
box-sizing:border-box;
width: 100%;
color:black;
font-family: monospace;
font-size: 14px;
text-align: center;
 border: 1px solid black;
  border-collapse: collapse;
   
}
th {
background-color: #588c7e;	
}
th , td {

color: black;
text-align: center;
 border: 1px solid black;
  padding: 8px;
}
tr:nth-child(even) {
	background-color: #fff;
	}
div.submit1 {
margin-top: 5px;
margin-left: 270px;
  color: #fff;
	background-color: #006400;
	font-weight: 400;
	height: 50px;
	font-size: 14px;
	border: none;
	width: 100%;
	border-radius: 40px;
	text-transform: uppercase;
	-webkit-transition: 0.2s all;
	transition: 0.2s all;
}
div.submit {
margin-top: -50px;
margin-left: 270px;
  color: #fff;
	background-color: #006400;
	font-weight: 400;
	height: 50px;
	font-size: 14px;
	border: none;
	width: 100%;
	border-radius: 40px;
	text-transform: uppercase;
	-webkit-transition: 0.2s all;
	transition: 0.2s all;
}

.footer1 {

position:absolute;
   left: 4px;
 
   bottom: -300px;
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


<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>
	



<br><br><br><br><br>

<div id="booking" class="section">
<div class="section-center">
<center><b><h2 style="color:white"> Reservation Flight </h2></b></center>		
<div class="container">
<div class="row">
<div class="booking-form">

<form action="" method="post">
<div class="form-group">
<div class="form-checkbox">
<label for="roundtrip">
<input type="radio" id="roundtrip" name="flight-type" value="Roundtrip" required>
<span></span>Roundtrip
</label>
<label for="one-way">
<input type="radio" id="one-way" name="flight-type" value="one-way" required >
<span></span>One way
</label>
</div>
</div>

<div class="row">

<div class="col-md-6">
<div class="form-group">
<span class="form-label">Flying from</span>
<select class="form-control" name="origin" required>
<option></option>
<option>LON</option>
<option>BOM</option>
<option>IST</option>
<option>MXP</option>
<option>LEB</option>
<option>BCN</option>
<option>CAI</option>
<option>MUN</option>
</select>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<span class="form-label">Flyning to</span>
<select class="form-control" name="destination" required>
<option>  </option>
<option onclick="myFunction2()">RUH</option>
<option onclick="myFunction1()" >JED</option>
<option onclick="myFunction3()">DMM</option>
</select>
</div>
</div>

</div>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<span class="form-label">Departing</span>
<input class="form-control" type="date" name="date_a" >
</div>
</div>
<div class="col-md-3">
<div class="ret" class="form-group">
<span class="form-label">Returning</span>
<input class="form-control" type="date" name="return" >
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<span class="form-label">Passengers</span>
<select class="form-control" name="Passengers" required>
<option></option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
</select>
<span class="select-arrow"></span>
</div>
</div>
</div>
							
<div class="row">
<div class="col-md-3">
<div class="form-group">
<span class="form-label">Travel class</span>
<select class="form-control" name="classtype">
<option></option>
<option>Economy</option>
<option>Business</option>
<option>First</option>
</select>
<span class="select-arrow"></span>
</div>
</div>	
					
<div class="col-md-3">
<div class="form-btn">

<button type="button" class="btn btn-info btn-lg submit-btn" data-toggle="modal" data-target="#myModal" >Show All Flights</button>

<div class="submit"><button name="submit" class="btn btn-info submit-btn submit" value="Search roundtrip" data-toggle="modal" data-target="#submit">Search roundtrip</button></div>
<div class="submit1"><button name="submit1" class="btn btn-info submit-btn submit" value="Search one way" data-toggle="modal" data-target="#submit1">Search one way</button></div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

<script>
$(document).ready(function() {
    $("input[id$='one-way']").click(function() {
        var test = $(this).val();

        $("div.ret").hide();
        $("#one-way" + test).show();
	
    });
	
});

</script>

<script>
$(document).ready(function() {
    $("input[id$='roundtrip']").click(function() {
        var test = $(this).val();

        $("div.ret").show();
        $("#one-way" + test).show();
    });
});
</script>
<script>
$(document).ready(function() {
    $("input[id$='one-way']").click(function() {
        var test = $(this).val();

        $("div.submit1").show();
        $("#one-way" + test).show();
    });
});
</script>
<script>
$(document).ready(function() {
    $("input[id$='roundtrip']").click(function() {
        var test = $(this).val();

        $("div.submit").show();
        $("#one-way" + test).show();
    });
});
</script>
<script>
$(document).ready(function() {
    $("input[id$='roundtrip']").click(function() {
        var test = $(this).val();

		$("div.submit1").hide();
        $("#one-way" + test).show();
	
    });
	
});
</script>
<script>
$(document).ready(function() {
    $("input[id$='one-way']").click(function() {
        var test = $(this).val();

		$("div.submit").hide();
        $("#one-way" + test).show();
	
    });
	
});
</script>
<script>
function myFunction1() {
    document.body.style.backgroundImage = "url('JEED1.jpg')";

}
function myFunction2() {
    document.body.style.backgroundImage = "url('rio1.jpg')";
}
function myFunction3() {
    document.body.style.backgroundImage = "url('dmm2.jpeg')";
}
</script>

<div class="modal" id="myModal" role="dialog" >
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Flights List</h4>
</div>
<div class="modal-body">
<table><tr>
<th>Flight Number</th>
<th>Flights Type </th>
<th>From</th>
<th>Destination Date</th>
<th>Destination Time</th>
<th>To</th>
<th>Return Date</th>
<th>Return Time</th>
<th>Class Type</th>
<th>price (SAR)</th>
<th>Reservation!</th>
</tr>
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="ksatour";
$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error) {
	die("Connection failed: " . $conn-> connect_error);
}

$sql = "SELECT * FROM flight";

$res = $conn->query($sql);
if ($res->num_rows > 0) {

   while($row = $res->fetch_assoc()) {
        echo "
		<tr>
		<td>".$row["flightno"]."</td>
		<td>".$row["flight_type"]."</td>
		<td>".$row["origin"]."</td>
		<td>".$row["date_a"]."</td>
		<td>".$row["a_time"]."
		".$row["a_thetime"]."</td>
		<td>".$row["destination"]."</td>
		<td>".$row["r_return"]."</td>
		<td>".$row["r_time"]."
		".$row["r_thetime"]."</td>
		<td>".$row["classtype"]."</td>
		<td>".$row["price"]."</td>
	<td>"."<button  onclick=\"location.href='payment1.php'\">buy</button>"."</dt>
		</tr>";
		
    }
echo"</table>";
} else {
    echo "0 results";
}
 
?>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<?php
 if(isset($_POST['submit'])){
	?>
<div class="modal" id="submit" role="dialog" >
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Flights List</h4>
</div>
<div class="modal-body">
<table><tr>
<th>Flight Number</th>
<th>Flights Type </th>
<th>From</th>
<th>Destination Date</th>
<th>Destination Time</th>
<th>To</th>
<th>Return Date</th>
<th>Return Time</th>
<th>Class Type</th>
<th>price (SAR)</th>
<th>Reservation!</th>
</tr>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ksatour";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error) {
	die("Connection failed: " . $conn-> connect_error);
}
 
$origin=$_POST["origin"];
$destination=$_POST["destination"];
$date_a=$_POST["date_a"];
$r_return=$_POST["r_return"];
$classtype=$_POST["classtype"];
$Passengers=$_POST["Passengers"];

$sql="select * from flight where origin like '%$origin%' AND destination like '%$destination%' 
AND date_a like '%$date_a%' AND classtype like '%$classtype%'";

$res=$conn->query($sql);
		if ($res->num_rows > 0) {
        while($row=$res->fetch_assoc()){
		
$total = $Passengers * $row["price"];
	
echo "<tr>
     <td>".$row["flightno"]."</td>
		<td>".$row["flight_type"]."</td>
		<td>".$row["origin"]."</td>
		<td>".$row["date_a"]."</td>
		<td>".$row["a_time"]."
		".$row["a_thetime"]."</td>
		<td>".$row["destination"]."</td>
		<td>".$row["r_return"]."</td>
		<td>".$row["r_time"]."
		".$row["r_thetime"]."</td>
		<td>".$row["classtype"]."</td>
		<td>".$row["price"]."</td>
	<td>"."<button  onclick=\"location.href='payment1.php'\">buy</button>"."</dt>
		</tr>";
		
		}
		echo"</table>";
 }  else 
    echo "0 results";
 }	

 
?>
</div>
</div>
</div>
</div>

<?php
 if(isset($_POST['submit1'])){
	?>
<div class="modal" id="submit1" role="dialog" >
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Flights List</h4>
</div>
<div class="modal-body">
<table><tr>
<th>Flight Number</th>
<th>Flights Type </th>
<th>From</th>
<th>Destination Date</th>
<th>Destination Time</th>
<th>To</th>
<th>Class Type</th>
<th>price (SAR)</th>
<th>Reservation!</th>
</tr>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ksatour";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error) {
	die("Connection failed: " . $conn-> connect_error);
}
 
$origin=$_POST["origin"];
$destination=$_POST["destination"];
$date_a=$_POST["date_a"];
$r_return=$_POST["r_return"];
$classtype=$_POST["classtype"];
$Passengers=$_POST["Passengers"];

$sql="select * from flight where origin like '%$origin%' AND destination like '%$destination%' 
AND date_a like '%$date_a%' AND classtype like '%$classtype%'";

$res=$conn->query($sql);
		if ($res->num_rows > 0) {
        while($row=$res->fetch_assoc()){
		
$total = $Passengers * $row["price"];
	
echo "<tr>
     <td>".$row["flightno"]."</td>
		<td>".$row["flight_type"]."</td>
		<td>".$row["origin"]."</td>
		<td>".$row["date_a"]."</td>
		<td>".$row["a_time"]."
		".$row["a_thetime"]."</td>
		<td>".$row["destination"]."</td>
		<td>".$row["classtype"]."</td>
		<td>".$row["price"]."</td>
	<td>"."<button  onclick=\"location.href='payment1.php'\">buy</button>"."</dt>
		</tr>";
		
		}
		echo"</table>";

 }  else 
    echo "0 results";
 }		
 
?>
</div>

</div>
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