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

$sql = $conn->query("SELECT * FROM cityofhotels");




if(isset($_GET['hotels'])) {
  $hotelsID = $_GET['hotels'];
  //$select = $db->query("SELECT * FROM hotels WHERE NameOfCity = '{$hotelsID}' ");
  //$s = $db->query("SELECT * FROM hotels WHERE NameOfCity = '{$hotelsID}'");


############################### NO. OF PAGE ########################################################
if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
	} else {
		$page_no = 1;
        }

	$total_records_per_page = 3;
    $offset = ($page_no-1) * $total_records_per_page;
	$previous_page = $page_no - 1;
	$next_page = $page_no + 1;
	$adjacents = "2"; 
	$result_count = $conn->query("SELECT COUNT(*) As total_records FROM hotels WHERE NameOfCity = '{$hotelsID}' and state=1 ");
	$total_records = mysqli_fetch_assoc($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; // total page minus 1
    $res = $conn->query("SELECT * FROM hotels WHERE NameOfCity = '{$hotelsID}' LIMIT $offset, $total_records_per_page ");


	?>	

<head>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://bootswatch.com/flatly/bootstrap.css" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style>
@import url('https://fonts.googleapis.com/css?family=Caveat+Brush|Courgette|Fredericka+the+Great|Kalam|Permanent+Marker|Poiret+One|Trade+Winds&display=swap');

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

.footer1 {

position:absolute;
   left: 4px;
   bottom: -1220px;
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
padding: 20% 320%;
background-color: grey;
cursor: pointer; }

.btn:hover {
background-color: #ddd; }

.btn.active {
background-color: #666;
color: white; }


/* ------------ end  ------*/
</style>	
     
<body>	 
	 
	 
	 <!-- Room details -->
<div class="container">


    <?php 
	//if ($res->num_rows > 0) {
	//while($hotels = mysqli_fetch_assoc($select)): 
	$count=0;
	while($hotels = mysqli_fetch_assoc($res)){
		$_SESSION['hotels']=$hotels["NameOfCity"];
		      
			  if ($count==3) {
              echo "<div class='row'>";
              $count=0;
            }

	?>


<table >

  <tr style="height:80px;">
    <td><img src="<?=$hotels['Photo1'];?>" style="width: 600px;height: 350px; margin-left:16px; margin-left:-20%; ">
   <br>
<section>
<h2 style=" margin-left:20%;" ><b> <?=$hotels['price'];?> </b><h2>
</section>
</td>


    <td  style="font-size:20px; width:100%;">  <br> <br> <h2 align="center; margin-left:-20%;" ><b> <?=$hotels['HotelsName'];?> </b></h2> <br> <br> 
  

      <p style="width:600px; height: 350px; margin-left:-10%;"> <?=$hotels['details'];?>
<br> <br>

<a href="detailsHotel.php?hotels=<?= $hotels['id']; ?>">More Details</a> </P>
</td>
  </tr>
    <hr>
   </table> <!-- end table -->

	<?php 
	    $count++;
		} ?>
		
        </div>
   
<br /><br /><br /><br />
</div>


<div class="all">
<ul class="pagination">

	<li style="color:green;" <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
	<a style="color:black;" <?php if($page_no > 1){ echo "href='?page_no=$previous_page&hotels=$hotelsID'"; } ?>>Previous</a>
	</li>
       
    <?php 
	if ($total_no_of_pages <= 10){  	 
		for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
			if ($counter == $page_no) {
		   echo "<li class='active' style='color:green;' ><a>$counter</a></li>";	
				}else{
           echo "<li><a style='color:green;'href='?page_no=$counter&hotels=$hotelsID'>$counter</a></li>";
				}
        }
	}
	elseif($total_no_of_pages > 10){
		
	if($page_no <= 3) {			
	 for ($counter = 1; $counter < 8; $counter++){		 
			if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter&hotels=$hotelsID'>$counter</a></li>";
				}
        }
		echo "<li><a>...</a></li>";
		echo "<li><a href='?page_no=$second_last&hotels=$hotelsID'>$second_last</a></li>";
		echo "<li><a href='?page_no=$total_no_of_pages&hotels=$hotelsID'>$total_no_of_pages</a></li>";
		}

	 elseif($page_no > 3 && $page_no < $total_no_of_pages - 3) {		 
		echo "<li><a href='?page_no=1&hotels=$hotelsID'>1</a></li>";
		echo "<li><a href='?page_no=2&hotels=$hotelsID'>2</a></li>";
        echo "<li><a>...</a></li>";
        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
           if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter&hotels=$hotelsID'>$counter</a></li>";
				}                  
       }
       echo "<li><a>...</a></li>";
	   echo "<li><a href='?page_no=$second_last&hotels=$hotelsID'>$second_last</a></li>";
	   echo "<li><a href='?page_no=$total_no_of_pages&hotels=$hotelsID'>$total_no_of_pages</a></li>";      
            }
		
		else {
        echo "<li><a href='?page_no=1&hotels=$hotelsID'>1</a></li>";
		echo "<li><a href='?page_no=2&hotels=$hotelsID'>2</a></li>";
        echo "<li><a>...</a></li>";

        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
          if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter&hotels=$hotelsID'>$counter</a></li>";
				}                   
                }
            }
	}
?>
    
	<li style="color:green;" <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
	<a style="color:black;" <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page&hotels=$hotelsID'"; } ?>>Next</a>
	</li>
	</ul>
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
<?php 
 } else
	 echo "aaa";
  // header("Location:SelectHotels.php");
 ?>
  </body>
</html>