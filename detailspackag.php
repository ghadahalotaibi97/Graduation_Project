
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

if(isset($_GET['packag'])) {
 $packagID = $_GET['packag'];
  $select = $conn->query("SELECT * FROM packags  WHERE id = '{$packagID}' ");
  //$s = $conn->query("SELECT rooms FROM hotels WHERE id = '{$hotelsID}' and state=1");
####################################################################################
if(isset($_POST['checkin'])) {

    if( !empty($_POST['fullname']) && !empty($_POST['in_date']) && !empty($_POST['out_date']) && !empty($_POST['phone']) && !empty($_POST['people']) )
    {
  
      //$packagID =$_POST['id'];
     $name = $_POST['fullname'];
        $checkin = $_POST['in_date'];
        $checkout = $_POST['out_date'];
        $phone = $_POST['phone'];
        $people = $_POST['people'];
        $email = $_POST['email'];

      
        $current_date = date("Y-m-d");

    //$insert = "INSERT INTO `packagR` (`id`, `namee`, `checkin`, `checkout`, `phone`, `people`, `email` ) VALUES (NULL, '$name', '$checkin', '$checkout', '$phone', '$people', '$email')";

$sql="Insert into packagR 
(`id`, `namee`, `checkin`, `checkout`, `phone`,
 `people`, `email` ) VALUES 
 (NULL, '$name', '$checkin', '$checkout', 
 '$phone', '$people', '$email')";
//ec//ho $sql;
$checkResult= mysqli_query($conn,  $sql);

    }

if($checkResult){
   echo  "Successfully entered!";

   echo "<meta http-equiv='refresh' content='0; url=detailspackag.php?packag=$packagID'>";
  header("Location:payment1.php");
 }
else{
     echo mysqli_error($conn);
 }
}}
 //echo $name;
//echo $checkin;
 //echo $checkout;
// echo $phone;
//echo $people;
//echo $email;

    
?>

<div class="container">
    <?php while($packags = mysqli_fetch_assoc($select)): ?>
       <div class="page-header">
         <h2 class="text-center"><?= $packags['packag_name']; ?></h2>
       </div>
       

         <div id="myCarousel" class="carousel slide container-fluid" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>

</ol>


         <div  style = "margin:auto;" class="carousel-inner" role="listbox">
<div class="item active">
<img src="<?= $packags['photo1']; ?>" style = "width:150%; height:350px;" />
</div>

<div class="item">
<img src="<?= $packags['photo2']; ?>" style = "width:150%; height:350px;"  />
</div>

<div class="item">
<img src="<?= $packags['photo3']; ?>"style = "width:150%; height:350px;" />
</div>




</div>
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a> 
</div>










         
         <!-- Right collumn for details -->
         <div class="col-md-6">
           <hr />
           <p><b>Days <i class='fas fa-calendar-check'> </i></b> <?= $packags['days']; ?></p>
           <p><b>Cost:</b> <?= $packags['price']; ?></p>
           <p><b>City of arrival:</b> <?= $packags['city']; ?></p>
           <p><b>The package includes: <i class='fas fa-plane'></i>  <i class='fas fa-hotel'> </i>  <i class='fas fa-umbrella-beach'></i> <i class='fas fa-car'></i></b> </p>
           

           <style>
.footer1 {

position:absolute;
   left: 4px;
   bottom: -1800px;
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


.containerr {
  position: absolute;
  margin-left:15%; 
  margin-right:0%;
}
.day1{
  position: absolute;
  top: 8px;
  left: 16px;
  color: white;
  font-size: 16px;
}
.day2{
  position: absolute;
  top: 22%;
  left: 3%;
 color: white;
  font-size: 16px;
}
.day3 {
  position:absolute;
  top: 40%;
  left: 2%;
  color: white;
  font-size: 16px;
}
.day4 {
  position: absolute;
  top: 55%;
  left: 3%;
  color: white;
 
  font-size: 16px;
}
.day5 {
  position: absolute;
  top: 70%;
  left: 3%;
  color: white;
 
  font-size: 16px;
}
.day6 {
  position: absolute;
  top: 85%;
  left: 3%;
  color: white;
 
  font-size: 16px;
}



img { 
  width: 140%;
  height: 900px;
  opacity: 100.0;
  right:50%;
}
</style>

        <h3>   <p><b>Package information:</b> </h3>
           
  <div class="containerr">
 <img style=" " src="<?= $packags['backgraond']; ?>"  alt="packag" width="100%" height="350px">
 <h4 class="day1"><?= $packags['packag_informationday1']; ?></h4> 
  <h4 class="day2"><?= $packags['packag_informationday2']; ?></h4> 
  <h4 class="day3"><?= $packags['packag_informationday3']; ?></h4> 
  <h4 class="day4"><?= $packags['packag_informationday4']; ?></h4> 
  <h4 class="day5"><?= $packags['packag_informationday5']; ?></h4> 
  <h4 class="day6"><?= $packags['packag_informationday6']; ?></h4> 

         
        
</div>
 

          <br><br><br><br><br> <br><br> <br><br>
          </p>

        
      

           
         </div>
       </div>
     
       <!-- row for Booking form -->
       



      
       <br><br><br><br><br> <br><br> <br><br><br><br><br><br><br> <br><br> <br><br>
       <br><br><br><br><br> <br><br> <br><br><br><br><br><br><br> <br><br> <br><br>
       <br><br><br><br><br> <br><br> 
   


       <body>
<div> <h1 style="color: black;   text-align: center;"><p> Booking details: </p></h1> </div>
     
    <div class="container"   >
    
    
        <thead>
           
     
<table  style= "margin-left:0%; font-family: Trebuchet MS, Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%; background-color: #f2f2f2;">
         <form action="detailspackag.php?packag=<?=$packagID?>" method="post">

  <tr style="height:80px;">
    <td><label class="form-control-label">Full name:</label> </td>
<td> <input type="text" class="form-control" name="fullname" required> </td>
  </tr>
  
    <tr style="height:80px;">
    <td><label class="form-control-label">Check-in date:</label> </td>
<td><input type="date" class="form-control" name="in_date" required></td>
  </tr>
  
    <tr style="height:80px;">
    <td><label class="form-control-label">Check-out date:</label></td>
<td><input type="date" class="form-control" name="out_date" required></td>
  </tr>
  
    <tr style="height:80px;">
    <td><label class="form-control-label">Phone Number:</label></td>
<td><input type="text" class="form-control" name="phone" placeholder="05******** " pattern="[0-9]{10}" required></td>
  </tr>
  
      <tr style="height:80px;">
    <td><label class="form-control-label">People:</label></td>
<td><input type="number" class="form-control" max="5" name="people" required></td>
  </tr>
 
 
     <tr style="height:80px;">
    <td><label class="form-control-label">Email Address:</label></td>
<td><input type="email" class="form-control" name="email" placeholder="email@hotmail.com" required></td>
  </tr>
 
<div  style="color: green; margin-left: 40%; " >
     <tr >
<td    colspan= 2><input type="submit"   class="form-control btn btn-primary" value="Make Reservation" name="checkin"></td>
  </tr>
</div>
  
  
  
   </form>

        
        
      
            <?php 
                //include_once"conn.php";
               // $sql=mysqli_query($conn,"SELECT * FROM packagR");

               // while($row=mysqli_fetch_assoc($sql)){
                   

           ?>

        </thead>
      <tbody>
           
            <?php 
               // }
            ?>
           
        </tbody>
    </table>
    
    </div>
  <!-- Footer -->
  <div class="footer1">
   <a href="https://www.facebook.com/ksatourwebsite" class="fa fa-facebook" style="font-size: 20px; color: #737373;" ></a>
  <a href="https://twitter.com/KSATOUR_" class="fa fa-twitter" style="font-size:  20px; color: #737373;"></a>
  <a href="https://www.instagram.com/ksatour_/?hl=en" class="fa fa-instagram"style="font-size:  20px; color: #737373;"></a>
  </div>
  
  </body>
</html>
   
        

<br /><br /><br /><br />
<script>
function myFuncion()
{
alert("Thanks! Your reservation have been ");
}
</script>
<?php endwhile; ?>
