<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>

<?php 
 
include 'db.php';
?>

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
@import url('https://fonts.googleapis.com/css?family=Caveat+Brush|Courgette|Fredericka+the+Great|Kalam|Permanent+Marker|Poiret+One|Trade+Winds&display=swap');
* {
  box-sizing: border-box;

}


.nn{
	
 	
  width:180px;
  height:100px;
}



body {
  margin: 0px;
  font-family: Arial;
  font-size: 17px;
}

#myVideo {
 position: absolute;
      right: 0;
      top:90px;
      bottom:0;
      min-height: 100%;
      min-width:  100%;
      width: auto;
      height: auto;
      z-index: -100;
  }



.content5 {
  position: absolute;
  bottom: -190px;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}


#myBtn {
  width: 30px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}
 /* ---------- end video -------*/ 
 body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

#myBtn {
  display: none;
  position: absolute;
  bottom:-1100px;
  right: 30px;
  z-index: 99;
  font-size: 15px;
  border: none;
  outline: none;
  background-color: rgba(77, 77, 77,0.6);
  color: white;
  cursor: pointer;
  padding: 10px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
 
.footer1 {

position:absolute;
   left: 4px;
   bottom: -1200px;
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
.all{
	left: 150px;
position: absolute;
bottom: -1120px;
  right: 210px;
  width: 200px;
box-sizing:border-box;
width: 80%;
color:black;
font-size: 15px;
text-align: center;
}
</style>	


<!DOCTYPE html>
<html>
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
<video autoplay muted loop id="myVideo" >
  <source src="videoMP4.mp4" type="video/mp4" >
  Your browser does not support HTML5 video.
</video>

<div class="content5">
  <h1>EVENTS</h1>
  <p> What a beautiful Event </p>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>

<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<h1 style="text-align:center; font-family: 'Sriracha', cursive;">  Concerts, Entertainment, Various Activities, Fireworks, Circus, Plays, And Many Events In Saudi Arabia.</h1>
<br>







<form id="form1" name="form1" action="event.php" method="POST" > 
&nbsp &nbsp &nbsp &nbsp Search: <input type="text" name="city">
<input type="submit" name="submit" value="search" > 
</form>
<br>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ksatour";
$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error) {
	die("Connection failed: " . $conn-> connect_error);
}
if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
	} else {
		$page_no = 1;
        }
	$total_records_per_page = 4;
    $offset = ($page_no-1) * $total_records_per_page;
	$previous_page = $page_no - 1;
	$next_page = $page_no + 1;
	$adjacents = "2"; 
if(isset($_POST['submit'])){
$city=$_POST['city'];
?>
<div class="container">

  <div class="panel with-nav-tabs panel-success">
    <div class="panel-heading">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#nowshowing" data-toggle="tab">Showing Now</a></li>
	
      </ul>
    </div>
    <div class="panel-body">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="nowshowing">


          <?php 
		  $result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM event where city like '%$city%'");
	$total_records = mysqli_fetch_assoc($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; // total page minus 1
    $res = mysqli_query($conn,"SELECT * FROM event where city like '%$city%' LIMIT $offset, $total_records_per_page ");
          $count=0;
           while($row = mysqli_fetch_assoc($res)) {
            $_SESSION['movie']=$row["id"];

            if ($count==4) {
              echo "<div class='row'>";
              $count=0;
            }

           ?> 
            <div class='col-md-3 col-sm-12'>
              <div class='card-container'>
                <div class='card'>
                  <div class='front'>
                    <div class='cover'>
                     <img src='uploadimages/<?php echo $row["image"];?>'/> 
                    </div>
                    <div class='content'>
                      <div class='main'>
                        <h3 class='name'><?php echo $row["Name"];?></h3>

                        <p><b>city: </b><?php echo $row["city"];?></p>
						
						<p><b>date: </b><?php echo $row["date"];?> - <?php echo $row["dateTo"];?></p>
						<p><b>price: </b><?php echo $row["price"]; ?></p>
						
                      </div>
					  
                    </div>
					
                  </div>
                  <!-- end front panel -->
                  <div class='back'>
                    <div class='content'>
                      <div class='main'>
                        <h4 class='text-center'><?php echo $row["Name"];?></h4>
                        <p ><?php echo $row["Description"]; ?> </p>
						<br>
						<h4>location:</h4>
						
					      &nbsp <iframe class='nn'src=<?php echo $row["location"];?> ></iframe>
					


                      </div>
                    </div>
                  </div> <!-- end card -->
                </div> <!-- end card-container -->
              </div>
            </div> <?php

            $count++;
          } ?>


          
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="all">
<ul class="pagination">

	<li style="color:green;" <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
	<a style="color:black;" <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
	</li>
       
    <?php 
	if ($total_no_of_pages <= 10){  	 
		for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
			if ($counter == $page_no) {
		   echo "<li class='active' style='color:green;' ><a>$counter</a></li>";	
				}else{
           echo "<li><a style='color:green;' href='?page_no=$counter'>$counter</a></li>";
				}
        }
	}
	elseif($total_no_of_pages > 10){
		
	if($page_no <= 4) {			
	 for ($counter = 1; $counter < 8; $counter++){		 
			if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}
        }
		echo "<li><a>...</a></li>";
		echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
		echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
		}

	 elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
		echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";
        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
           if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                  
       }
       echo "<li><a>...</a></li>";
	   echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
	   echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
            }
		
		else {
        echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";

        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
          if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                   
                }
            }
	}
?>
    
	<li style="color:green;" <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
	<a style="color:black;" <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
	</li>
</div>
<?php
}
else { ?>
<div class="container">

  <div class="panel with-nav-tabs panel-success">
    <div class="panel-heading">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#nowshowing" data-toggle="tab">Showing Now</a></li>
	
      </ul>
    </div>
    <div class="panel-body">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="nowshowing">


          <?php 
		  $result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM `event`");
	$total_records = mysqli_fetch_assoc($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; // total page minus 1
    $res = mysqli_query($conn,"SELECT * FROM `event` LIMIT $offset, $total_records_per_page ");
          $count=0;
          while($row = mysqli_fetch_assoc($res)){
		  $_SESSION['movie']=$row["id"];

            if ($count==4) {
              echo "<div class='row'>";
              $count=0;
            }

           ?>
            <div class='col-md-3 col-sm-12'>
              <div class='card-container'>
                <div class='card'>
                  <div class='front'>
                    <div class='cover'>
                      <img src='uploadimages/<?php echo $row["image"];?>'/> 
                    </div>
                    <div class='content'>
                      <div class='main'>
                        <h3 class='name'><?php echo $row["Name"];?></h3>

                        <p><b>city: </b><?php echo $row["city"];?></p>
						
						<p><b>date: </b><?php echo $row["date"];?> - <?php echo $row["dateTo"];?></p>
						<p><b>price: </b><?php echo $row["price"]; ?></p>
						
                      </div>
					  
                    </div>
					
                  </div>
                  <!-- end front panel -->
                  <div class='back'>
                    <div class='content'>
                      <div class='main'>
                        <h4 class='text-center'><?php echo $row["Name"];?></h4>
                        <p ><?php echo $row["Description"]; ?> </p>
						<br>
						<h4>location:</h4>
						
					      &nbsp <iframe class='nn'src=<?php echo $row["location"];?> ></iframe>
					


                      </div>
                    </div>
                  </div> <!-- end card -->
                </div> <!-- end card-container -->
              </div>
            </div> <?php

            $count++;
          } 
		  ?>
<div class="all">
<ul class="pagination">

	<li style="color:green;" <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
	<a style="color:black;" <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
	</li>
       
    <?php 
	if ($total_no_of_pages <= 10){  	 
		for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
			if ($counter == $page_no) {
		   echo "<li class='active' style='color:green;' ><a>$counter</a></li>";	
				}else{
           echo "<li><a style='color:green;' href='?page_no=$counter'>$counter</a></li>";
				}
        }
	}
	elseif($total_no_of_pages > 10){
		
	if($page_no <= 4) {			
	 for ($counter = 1; $counter < 8; $counter++){		 
			if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}
        }
		echo "<li><a>...</a></li>";
		echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
		echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
		}

	 elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
		echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";
        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
           if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                  
       }
       echo "<li><a>...</a></li>";
	   echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
	   echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
            }
		
		else {
        echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";

        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
          if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                   
                }
            }
	}
?>
    
	<li style="color:green;" <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
	<a style="color:black;" <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
	</li>
</div>
<?php }
?>



<button onclick="topFunction()" id="myBtn" title="Go to top"><b>↑</b></button>


<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
} 
</script>
<div class="footer1">
 <a href="https://www.facebook.com/ksatourwebsite" class="fa fa-facebook" style="font-size: 20px; color: #737373;" ></a>
  <a href="https://twitter.com/KSATOUR_" class="fa fa-twitter" style="font-size:  20px; color: #737373;"></a>
  <a href="https://www.instagram.com/ksatour_/?hl=en" class="fa fa-instagram"style="font-size:  20px; color: #737373;"></a>
</div>
 

</body>
</html>