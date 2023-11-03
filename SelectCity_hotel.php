<!DOCTYPE html>
<html lang="en">

<head>
<title>City</title>
  <meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>

<?php

$servername="localhost";
$username="root";
$password="";
$dbname="ksatour";
$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error) {
	die("Connection failed: " . $conn-> connect_error);
}

$sql = $conn->query("SELECT * FROM cityofhotels");
?>

<style>
@import url('https://fonts.googleapis.com/css?family=Caveat+Brush|Courgette|Fredericka+the+Great|Kalam|Permanent+Marker|Poiret+One|Trade+Winds&display=swap');

.footer1 {

position:absolute;
   left: 4px;
   bottom: -860px;
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


.btn {
border: none;
outline: none;
padding: 15% 100%;
background-color: grey;
cursor: pointer;
text-align: center;

 }

.btn:hover {
background-color: #ddd; }

.btn.active {
background-color: #666;
color: white; }
.btn-primary {
  background-color:#bfbfbf;
  color: black;
 width: 90px;
 
}
.btn-primary:hover {
  background-color:#8c8c8c;
  color: white;
}

/* ------------ end  ------*/
</style>

<body>

<br><br><br>

<div class="row">

<?php while($cityofhotels = mysqli_fetch_assoc($sql)): ?>
    


<table >

  <tr style="height:80px;">


    <td><img src="<?=$cityofhotels['photo'];?>" style="width: 600px;height: 350px; margin-left:180px;"> </td>
   <br>
   <td> </td> 
   <td> </td>
<td style="width: 650px;">
<h2 style=" margin-left:30px;" ><b>  <?=$cityofhotels['NameOfCity'];?></b><h2>

<h5 style=" margin-left:30px;" ><b>  <?=$cityofhotels['d'];?></b><h5>

<br> <br>

<a href="SelectHotels.php?hotels=<?= $cityofhotels['NameOfCity']; ?>" style=" margin-left:30px;" font-size:18px;"> Select Hotels</a> </P>
</td>


  </tr>
    <hr>
   </table> 
<?php endwhile; ?>  

 

</div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	
	
  <!-- Footer -->
  <div class="footer1">
  <a href="https://www.facebook.com/ksatourwebsite" class="fa fa-facebook" style="font-size: 20px; color: #737373;" ></a>
  <a href="https://twitter.com/KSATOUR_" class="fa fa-twitter" style="font-size:  20px; color: #737373;"></a>
  <a href="https://www.instagram.com/ksatour_/?hl=en" class="fa fa-instagram"style="font-size:  20px; color: #737373;"></a>
  </div>

  </body>
</html>