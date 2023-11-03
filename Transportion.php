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
@import url('https://fonts.googleapis.com/css?family=Caveat+Brush|Courgette|Fredericka+the+Great|Kalam|Permanent+Marker|Poiret+One|Trade+Winds&display=swap');

.footer1 {
   position:absolute;
   left: 4px;
   bottom: -220px;
   width: 100%;
   size: 80px;
   background-color:#f2f2f2;
   color: black ;
   text-align:center;}
.fa {
  padding: 20px;
  font-size: 60px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;}

.fa:hover {opacity: 0.7;}
</style>

<div class="container">
		<h3 class="page-header text-center" style="font-family: 'Trade Winds';
font-family: 'Courgette' ;
font-family: 'Poiret One' ;
font-family: 'Caveat Brush' ;
font-family: 'Fredericka the Great';
font-family: 'Permanent Marker' ;
font-family: 'Kalam'; color: #737373;"> A first-rate transportation system connects Saudi Arabia’s provinces and cities, serving millions of people each day,Some of the modes of transport include:</h3>
	<br>
	<ul class="nav nav-tabs">

		

		<?php
			$sql="select * from categorytransportion order by categorytraid asc limit 1 ";
			$fquery=$conn->query($sql);
			$frow=$fquery->fetch_array();
			?>
				<li class="active"><a data-toggle="tab" href="#<?php echo $frow['CategoryTransportionName'] ?>"><?php echo $frow['CategoryTransportionName'] ?></a></li>
			<?php

			$sql="select * from categorytransportion order by categorytraid asc  ";
			$nquery=$conn->query($sql);
			$num=$nquery->num_rows-1;
			$sql="select * from categorytransportion order by categorytraid asc limit 1, $num   ";
			$query=$conn->query($sql);
			while($row=$query->fetch_array()){
				?>
				<li><a data-toggle="tab" href="#<?php echo $row['CategoryTransportionName'] ?>"><?php echo $row['CategoryTransportionName'] ?></a></li>
				<?php }?>
	</ul>
	<div class="tab-content">
		<?php
			$sql="select * from categorytransportion order by categorytraid  asc limit 1 ";
			$fquery=$conn->query($sql);
			$ftrow=$fquery->fetch_array();
			?>
				<div id="<?php echo $ftrow['CategoryTransportionName']; ?>" class="tab-pane fade in active"  style="margin-top:20px;   height: 30%; width:100%; ">
					<?php
						$sql="select * from transportion where categorytraid='".$ftrow['categorytraid']."'  and state=1 ";
						$pfquery=$conn->query($sql);
						$inc=4;
						while($pfrow=$pfquery->fetch_array()){
							$inc = ($inc == 4) ? 1 : $inc+1; 
							if($inc == 1) echo "<div class='row'>"; ?>
								<div class="col-md-3">
									<div class="panel panel-default">
										<div class="panel-heading text-center">
											<b><?php echo $pfrow['transportionname']; ?></b>
										</div>
										<div class="panel-body">
											<img src="<?php if(empty($pfrow['photo'])){echo "upload/noimage.jpg";} else{echo $pfrow['photo'];} ?>" height="225px;" width="100%">
										</div>
										<div class="panel-footer "style="text-align:left;  height:100px; ">
											 <?php echo $pfrow['detail']; ?>
											    	
										</div>
					 <div><a href="<?php if(empty($pfrow['linkk'])){echo "";} else{echo $pfrow['linkk'];} ?>" class="btn btn-block btn-primary">Book Now</a></div> </div></div>
							<?php if($inc == 4) echo "</div>";}
						if($inc == 1) echo "<div class='col-md-3'></div><div class='col-md-3'></div><div class='col-md-3'></div></div>"; 
						if($inc == 2) echo "<div class='col-md-3'></div><div class='col-md-3'></div></div>"; 
						if($inc == 3) echo "<div class='col-md-3'></div></div>"; ?></div>


			<?php

			$sql="select * from categorytransportion order by categorytraid asc ";
			$tquery=$conn->query($sql);
			$tnum=$tquery->num_rows-1;
			$sql="select * from categorytransportion  order by categorytraid asc limit 1, $tnum   ";
			$cquery=$conn->query($sql);
			while($trow=$cquery->fetch_array()){
				?>
				<div id="<?php echo $trow['CategoryTransportionName']; ?>" class="tab-pane fade"  style="margin-top:20px;   height:30%; width:100%; ">
					<?php
						$sql="select * from transportion where categorytraid='".$trow['categorytraid']."'  and state=1 ";
						$pquery=$conn->query($sql);
						$inc=4;
						while($prow=$pquery->fetch_array()){
							$inc = ($inc == 4) ? 1 : $inc+1; 
							if($inc == 1) echo "<div class='row'>"; 
							?>
								<div class="col-md-3">
									<div class="panel panel-default">
										<div class="panel-heading text-center">
											<b><?php echo $prow['transportionname']; ?></b>
										</div>
										<div class="panel-body">
											<img src="<?php if($prow['photo']==''){echo "upload/noimage.jpg";} else{echo $prow['photo'];} ?>" height="225px;" width="100%">
										</div>

										<div class="panel-footer "style="text-align:left;  height:100px; ">
											
											 <?php echo $prow['detail']; ?>
										
										</div><div > <a href="<?php if(empty($prow['linkk'])){echo "";} else{echo $prow['linkk'];} ?>"  class="btn btn-block btn-primary">Book Now</a></div></div></div>
							<?php if($inc == 4) echo "<div class='col-md-3'></div><div class='col-md-3'></div><div class='col-md-3'></div></div>"; }
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