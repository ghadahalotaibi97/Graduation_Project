<html>
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

if(isset($_GET['sharinghouses'])) {
  $sharinghousesID = $_GET['sharinghouses'];
  $select = $conn->query("SELECT * FROM sharinghouses WHERE id = '{$sharinghousesID}' and state=1");
  $s = $conn->query("SELECT rooms FROM sharinghouses WHERE id = '{$sharinghousesID}' and state=1");
####################################################################################
  if(isset($_POST['checkin'])) {
    if( !empty($_POST['fullname']) && !empty($_POST['in_date']) && !empty($_POST['out_date']) && !empty($_POST['phone']) && !empty($_POST['people']) )
    {

        $name = $_POST['fullname'];
        $checkin = $_POST['in_date'];
        $checkout = $_POST['out_date'];
        $phone = $_POST['phone'];
        $people = $_POST['people'];
		$numberOfroom = $_POST['roomi'];
        $email = $_POST['email'];
		
        $r_number = mysqli_fetch_assoc($s);
        $r = $r_number['rooms'];
		
        //$hotels = $_POST['rooms'];
        $current_date = date("Y-m-d");
 
        
        if($checkin >= $current_date){ // start if checkin
          if($checkout >= $checkin){
          $insert = "INSERT INTO `reservationshouse` (`id`, `name`, `checkin`, `checkout`, `phone`, `people`, `email`, `room`) VALUES (NULL, '$name', '$checkin', '$checkout', '$phone', '$people', '$email', '$numberOfroom')";
            
              $_SESSION['hotels_success'] = 'Reservation successfully made!';
              $save = $conn->query($insert); 
                  if($save === true){
                    $newRooms = $r - $numberOfroom ; 
                    if($newRooms <= 0){
                      $newRooms = 0;
                    }
                    $update = $conn->query("UPDATE sharinghouses SET `rooms`='$newRooms' WHERE id = '{$sharinghousesID}' ");
                    header("Location:detailsHouses.php?sharinghouses=$sharinghousesID");
					
                  }
          
            
            } 
			
			else {
              echo '<p class="text-center alert alert-danger">Invalid Check-out date provided. Please avoid using a past date.</p>';
            }

        } // end if checkin
    else {
          echo '<p class="text-center alert alert-danger">Invalid Check-in date provided. Please avoid using a past date.</p>'; }

   $checkResult= mysqli_query($conn,  $insert);

    }

if($checkResult){
   echo  "Successfully entered!";

   echo "<meta http-equiv='refresh' content='0; url=detailsHouses.php?sharinghouses=$sharinghousesID'>";
  header("Location:payment1.php");
 }
else{
     echo mysqli_error($conn);
 }
}}

    
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

.footer1 {

position:absolute;
   left: -180px;
   bottom: -220px;
   width: 1525px;
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

p { 

  font-size : 150%
}

}
 font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

td {
  padding: 11px; 
  
  }
  th {
  padding: -20px; 
  
  }


</style>

     <!-- Room details -->
<div class="container">
    <?php while($sharinghouses = mysqli_fetch_assoc($select)): ?>
       <div class="page-header">
         <h2 class="text-center"><?= $sharinghouses['type']; ?></h2>
       </div>

<div class="row">
         <div class="col-md-6">
           
       <table>
<!-- Row1 of pic -->
<tr> 

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 5</div>
    <img src="<?= $sharinghouses['photo1'] ?>" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 5</div>
    <img src="<?= $sharinghouses['photo2'] ?>" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 5</div>
    <img src="<?= $sharinghouses['photo3'] ?>" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 5</div>
    <img src="<?= $sharinghouses['photo4'] ?>" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 5</div>
    <img src="<?= $sharinghouses['photo5'] ?>" style="width:100%">
  </div>
    

  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="<?= $sharinghouses['photo1'] ?>" style="width:100%" onclick="currentSlide(1)">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?= $sharinghouses['photo2'] ?>" style="width:100%" onclick="currentSlide(2)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="<?= $sharinghouses['photo3'] ?>" style="width:100%" onclick="currentSlide(3)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="<?= $sharinghouses['photo4'] ?>" style="width:100%" onclick="currentSlide(4)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="<?= $sharinghouses['photo5'] ?>" style="width:100%" onclick="currentSlide(5)" >
    </div>    
 
    </div>
  </div>
</div>


<br>
<br>
<br>
<br>
<br>
         
<table>
<tr style="height:80px;">
    <td><p><b>Type: </b> <?= $sharinghouses['type']; ?></p></td>
</tr>

<tr style="height:80px;">
    <td><p><b>Price (per night): </b> <?= $sharinghouses['price']; ?></p></td>
</tr>

<tr style="height:80px;">
    <td><p><b>Available Rooms: </b> <?= $sharinghouses['rooms']; ?></p></td>
</tr>

<tr style="height:80px;">
    <td><p style="width: 1170px;"><b>details: </b> <?= $sharinghouses['details']; ?></p></td>
</tr>

<tr >
    <td><?=($sharinghouses['rooms'] <= 0)?'<p class="text-danger">reservations have been closed on this room!</p>':'';?></td>
</tr>

<tr style="height:80px;">
    <td><h3><p style='font-size:100%'><b>Amenities:</b><br><h3/>
        <i class='fas fa-bed'></i>
        <i class='fas fa-bath'></i>
        <i class='fas fa-smoking-ban'></i>
      <i class='fas fa-wifi'></i> 
      <i class='fas fa-utensils' style='font-size:24px'></i> </p></td>
</tr>

   </table> <!-- end table -->


       <!-- row for Booking form -->
       
     <br>
  <h1 ><b> Booking details </b></h1>   
  
  
  <table align="center;" 
  style= "margin-left:30%; font-family: Trebuchet MS, Arial, Helvetica, sans-serif; border-collapse: collapse;  width:800px; background-color: #f2f2f2;">
         <form action="detailsHouses.php?sharinghouses=<?=$sharinghousesID?>" method="POST">

  <tr style="height:80px;">
    <td><label class="form-control-label">Full name:</label> </td>
  <td> <input type="text" class="form-control" name="fullname" placeholder="Full Name" style="margin-left:-100px; width: 450px;" required> </td>
  </tr>
  
    <tr style="height:80px;">
    <td><label class="form-control-label">Check-in date:</label> </td>
  <td><input type="date" class="form-control" name="in_date"style="margin-left:-100px; width: 450px;"required></td>
  </tr>
  
    <tr style="height:80px;">
    <td><label class="form-control-label">Check-out date:</label></td>
  <td><input type="date" class="form-control" name="out_date"style="margin-left:-100px; width: 450px;"required></td>
  </tr>
  
    <tr style="height:80px;">
    <td><label class="form-control-label">Phone Number:</label></td>
  <td><input type="text" class="form-control" name="phone" placeholder="Phone number..."style="margin-left:-100px; width: 450px;"required></td>
  </tr>
  
      <tr style="height:80px;">
    <td><label class="form-control-label">People:</label></td>
  <td><input type="number" class="form-control" max="5" name="people"style="margin-left:-100px; width: 450px;"required></td>
  </tr>
 
 
     <tr style="height:80px;">
    <td><label class="form-control-label">Number of Rooms:</label></td>
  <td> <input type="number" class="form-control" name="roomi"style="margin-left:-100px; width: 450px;"required></td>
  </tr>
 
 
     <tr style="height:80px;">
    <td><label class="form-control-label">Email Address:</label></td>
  <td><input type="email" class="form-control" name="email" placeholder="email address"style="margin-left:-100px; width: 450px;"required></td>
  </tr>
 
 
     <tr style="height:80px;">
  <td colspan= 2><input type="submit"  onclick="window.location.href = 'payment1.php';" class="form-control btn btn-primary" value="Make Reservation" name="checkin"  style="margin-left:310px; width: 150px;"></td>

  </tr>
 
  
  
  
   </form>
   </table> <!-- end table -->   
     
     
     
   
     
     
         <?php endwhile; ?>
        </div>
   
<br /><br /><br /><br />
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

</script>

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
