
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
  $hotelsID = $_GET['sharinghouses'];
  $select = $conn->query("SELECT * FROM sharinghouses WHERE City = '{$hotelsID}' and state=1");
  $s = $conn->query("SELECT * FROM sharinghouses WHERE City = '{$hotelsID}' and state=1");
####################################################################################
  if(isset($_POST['checkin'])) {
    if( !empty($_POST['fullname']) && !empty($_POST['in_date']) && !empty($_POST['out_date']) && !empty($_POST['phone']) && !empty($_POST['people']) )
    {

        $name = $_POST['fullname'];
        $checkin = $_POST['in_date'];
        $checkout = $_POST['out_date'];
        $phone = $_POST['phone'];
        $people = $_POST['people'];
        $email = $_POST['email'];
        @$address = $_POST['resident'];
        @$kin = $_POST['kin'];
        $r_number = mysqli_fetch_assoc($s);
        $r = $r_number['room_number'];
        $sharinghouses = $_POST['rooms'];
        $current_date = date("Y-m-d");
 
        
        if($checkin >= $current_date){
          if($checkout >= $checkin){
          $insert = "INSERT INTO `reservations` (`id`, `name`, `checkin`, `checkout`, `phone`, `people`, `email`, `room`) VALUES (NULL, '$name', '$checkin', '$checkout', '$phone', '$people', '$email', '$r')";
            #$insert = "INSERT INTO `reservations` ('name`, `checkin`, `checkout`, `phone`, `people`, `email`, `room`, `kin`)
                #            VALUES ('$name', '$checkin', '$checkout', '$phone', '$people', '$email', '$r', '$kin')";
              $_SESSION['hotels_success'] = 'Reservation successfully made!';
              $save = $conn->query($insert); 
                  if($save){
                    $rs = $conn->query("SELECT * FROM sharinghouses WHERE City = '{$hotelsID}' and state = 1 ");
                    $rms = mysqli_fetch_assoc($rs);
                    $newRooms = $rms['rooms'] - $sharinghouses;
                    if($newRooms <= 0){
                      $newRooms = 0;
                    }
                    $update = $conn->query("UPDATE sharinghouses SET `rooms`='$newRooms' WHERE City = '{$hotelsID}' ");
                    header("Location: SelectHouses.php?sharinghouses=$hotelsID");
                  }
          
                  echo "<br /> <br />";
            } else {
              echo '<p class="text-center alert alert-danger">Invalid Check-out date provided. Please avoid using a past date.</p>';
            }

        } else {
          echo '<p class="text-center alert alert-danger">Invalid Check-in date provided. Please avoid using a past date.</p>';
        }

       
    }
    else
    {
        echo '<br /> All fields are required!';
    }
  }

} elseif( !(isset($_GET['sharinghouses'])) || $_GET['sharinghouses']=='' ) {
  header("Location: SelectCity_house.php");
}

?>
<style>
@import url('https://fonts.googleapis.com/css?family=Caveat+Brush|Courgette|Fredericka+the+Great|Kalam|Permanent+Marker|Poiret+One|Trade+Winds&display=swap');


.footer1 {

position:absolute;
   left: 4px;
   bottom: -1160px;
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



/* ------------ end  ------*/

.filterDiv {

  display: none;
}

.show {
  display: block;
}

.container5 {
  margin-top: -5px;
  overflow: hidden;
  margin-left: 120px;

}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
  
</style>


<br /><br /><br /><br />

<div id="myBtnContainer" style="margin-left:120px;">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('rent')"> Rent a House</button>
  <button class="btn" onclick="filterSelection('sharehouse')"> ShareHouse </button>

</div>

     <!-- Room details -->
<div class="container5" >
    <?php while($sharinghouses = mysqli_fetch_assoc($select)): ?>

<div class="filterDiv <?=$sharinghouses['reservationstype'];?>">
<table >

  <tr style="height:30px;">
    <td><img src="<?=$sharinghouses['photo1'];?>" style="width: 600px;height: 350px; margin-left:16px; margin-left:-20%;  ">
   <br>
<section>
<h2 style=" margin-left:20%;" ><b> <?=$sharinghouses['price'];?> </b><h2>
</section>
</td>


    <td  style="font-size:20px; width:100%;">   <h2  align="center margin-left:16px; margin-left:-50%;" align="center"><b> <?=$sharinghouses['type'];?> </b></h2> <br> <br> 
  

      <p style="width:600px; height: 350px; margin-left:-10%;" > <?=$sharinghouses['details'];?>
<br> <br>

<a href="detailsHouses.php?sharinghouses=<?= $sharinghouses['id']; ?>">More Details</a> </P>
</td>
  </tr>
    <hr>
   </table> <!-- end table -->
</div>


         <?php endwhile; ?>
        </div>
   
<br /><br /><br /><br />





<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
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



