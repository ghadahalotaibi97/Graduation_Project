<?php include('header.php'); ?>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://bootswatch.com/flatly/bootstrap.css" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
<script src="js/ie-emulation-modes-warning.js"></script>
<meta charset="UTF-8">
<link href="css/rotating-card.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/anotherDefault.css" rel="stylesheet">
</head>
<body>
<?php include('navbar.php'); ?>
<style>
@import url('https://fonts.googleapis.com/css?family=Caveat+Brush|Courgette|Fredericka+the+Great|Kalam|Permanent+Marker|Poiret+One|Trade+Winds&display=swap');

 The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
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


<div class="container">
	<h3 class="page-header text-center" style="font-family: 'Trade Winds';
font-family: 'Courgette' ;
font-family: 'Poiret One' ;
font-family: 'Caveat Brush' ;
font-family: 'Fredericka the Great';
font-family: 'Permanent Marker' ;
font-family: 'Kalam'; color: #737373;"> Explore the best places for restaurants, cafes and shopping places
and learn about the most important activities in Saudi Arabia </h3>



	<ul class="nav nav-tabs">
		<?php
			$sql="select * from categorytry order by categoryid asc limit 1 ";
			$fquery=$conn->query($sql);
			$frow=$fquery->fetch_array();
			?>
				<li class="active"><a data-toggle="tab" href="#<?php echo $frow['categorytryname'] ?>"><?php echo $frow['categorytryname'] ?></a></li>
			<?php

			$sql="select * from categorytry order by categoryid asc  ";
			$nquery=$conn->query($sql);
			$num=$nquery->num_rows-1;

			$sql="select * from categorytry order by categoryid asc limit 1, $num";
			$query=$conn->query($sql);
			while($row=$query->fetch_array()){
				?>
				<li><a data-toggle="tab" href="#<?php echo $row['categorytryname'] ?>"><?php echo $row['categorytryname'] ?></a></li>
				<?php
			}
		?>
	</ul>

	<div class="tab-content">
		<?php
			$sql="select * from categorytry order by categoryid asc limit 1  ";
			$fquery=$conn->query($sql);
			$ftrow=$fquery->fetch_array();
			?>
				<div id="<?php echo $ftrow['categorytryname']; ?>" class="tab-pane fade in active"  style="margin-top:20px;   height: 100%; width:100%; ">
					<?php

						$sql="select * from try where categoryid='".$ftrow['categoryid']."' and state=1  ";
						$pfquery=$conn->query($sql);
						$inc=4;
						while($pfrow=$pfquery->fetch_array()){
							$inc = ($inc == 4) ? 1 : $inc+1; 
							if($inc == 1) echo "<div class='row'>"; 
							?>
								<div class="col-md-3">
									<div class="panel panel-default">
										<div class="panel-heading text-center">
											<b><?php echo $pfrow['name']; ?></b>
										</div>
										<div class="panel-body">
											<img src="<?php if(empty($pfrow['photo'])){echo "upload/noimage.jpg";} else{echo $pfrow['photo'];} ?>" height="225px;" width="100%">
										</div>
										<div class="panel-footer " style="text-align:left;  height:190px; ">
											 <?php echo $pfrow['detail']; ?>
										</div>


<div class="panel-footer " style="text-align:center;  height:40px; ">
											 City: <?php echo $pfrow['city']; ?>
										</div>

									 <div>
                       	 <a href="<?php if(empty($pfrow['Location'])){echo "";} else{echo $pfrow['Location'];} ?>" class="btn btn-block btn-primary"> Location </a>
										
					</div>

									</div>
								</div>
							<?php
							if($inc == 4) echo "</div>";
						}
						if($inc == 1) echo "<div class='col-md-3'></div><div class='col-md-3'></div><div class='col-md-3'></div></div>"; 
						if($inc == 2) echo "<div class='col-md-3'></div><div class='col-md-3'></div></div>"; 
						if($inc == 3) echo "<div class='col-md-3'></div></div>"; 
					?>
		    	</div>






			<?php

			$sql="select * from categorytry order by categoryid asc  ";
			$tquery=$conn->query($sql);
			$tnum=$tquery->num_rows-1;

			$sql="select * from categorytry order by categoryid asc limit 1, $tnum ";
			$cquery=$conn->query($sql);
			while($trow=$cquery->fetch_array()){
				?>
				<div id="<?php echo $trow['categorytryname']; ?>" class="tab-pane fade" style="margin-top:20px;   height: 100%; width:100%; ">
					<?php

						$sql="select * from try where categoryid='".$trow['categoryid']."' and state=1  ";
						$pquery=$conn->query($sql);
						$inc=4;
						while($prow=$pquery->fetch_array()){
							$inc = ($inc == 4) ? 1 : $inc+1; 
							if($inc == 1) echo "<div class='row'>"; 
							?>
								<div class="col-md-3">
									<div class="panel panel-default">
										<div class="panel-heading text-center">
											<b><?php echo $prow['name']; ?></b>
										</div>
										<div class="panel-body">
											<img src="<?php if($prow['photo']==''){echo "upload/noimage.jpg";} else{echo $prow['photo'];} ?>" height="225px;" width="100%">
										</div>

										<div class="panel-footer " style="text-align:left;  height:190px; ">
											
											 <?php echo $prow['detail']; ?>
										</div>
										<div class="panel-footer " style="text-align:center;  height:40px; ">
											
											City: <?php echo $prow['city']; ?> 
										</div>
										 
									 <div>
                       	 <a href="<?php if(empty($prow['Location'])){echo "";} else{echo $prow['Location'];} ?>" class="btn btn-block btn-primary"> Location </a>
										
					</div>
											
									</div>
								</div>
							<?php
							if($inc == 4) echo "<div class='col-md-3'></div><div class='col-md-3'></div><div class='col-md-3'></div></div>"; 
						}
						if($inc == 1) echo "<div class='col-md-3'></div><div class='col-md-3'></div><div class='col-md-3'></div></div>"; 
						if($inc == 2) echo "<div class='col-md-3'></div><div class='col-md-3'></div></div>"; 
						
						if($inc == 3) echo "<div class='col-md-3'></div></div>"; 
					?>
		    	</div>
				<?php
			}
		?>
	</div>
	


	<br>
<div class="footer1">
   <a href="https://www.facebook.com/ksatourwebsite" class="fa fa-facebook" style="font-size: 20px; color: #737373;" ></a>
  <a href="https://twitter.com/KSATOUR_" class="fa fa-twitter" style="font-size:  20px; color: #737373;"></a>
  <a href="https://www.instagram.com/ksatour_/?hl=en" class="fa fa-instagram"style="font-size:  20px; color: #737373;"></a>
 
</div>
 
</div>
</body>

</html>