<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>

<br> 
<br> 

<?php

$servername="localhost";
$username="root";
$password="";
$dbname="ksatour";
$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error) {
	die("Connection failed: " . $conn-> connect_error);
}
?>

<style>
.container5 {
    position: relative;
  width: 100%;
}


.image {
  display: block;
  width: 150%;
  height: 150;
 
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: whit;
}

.container5:hover .overlay {
  opacity: 1;
}
.text {
  color: lightblue;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
 
}
.footer1 {

position:absolute;
   left: 4px;
   bottom: -60px;
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
<div style="margin-left:290px;">

<?php

$sql = $conn->query("SELECT * FROM packags");

?>
     <!--END NAV SECTION -->

    <div ><br />
      <div class="row">

    <?php while($packag = mysqli_fetch_assoc($sql)): ?>
        <div class="col-lg-3 col-md-4 col-sm-6">
          
          <h4 class="text-center"><?= $packag['packag_name']; ?></h4> 
          
         <div style = "margin:auto;" class="container5">          
             
         <img src="<?= $packag['photo']; ?>"  alt="packag" width="100%" height="200px">
           <br> <br>
         <div class="overlay">

         <div class="text"><?= $packag['packag_days']; ?></div>
        
</div>
        </div>
         
          <section   class="container5" class="text-justify">
            <p>
              <?= $packag['details']; ?>
            </p>
          <div>
            <a href="detailspackag.php?packag=<?= $packag['id']; ?>" class="btn btn-block btn-primary">More Details</a>
          </div>
            
          </section>
        </div>
<?php endwhile; ?>

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