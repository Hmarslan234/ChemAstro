<!DOCTYPE html>

<html  lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculate Conversions - Convert Physics Units</title>
<meta name="description" content="Calculate & convert different units and conversions with chemastro software by dynamic developers. find physics units.">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

</head>

<body>

<?php include_once "header.php";?>

	<div class="heading wow bounceInDown">
			<h1>Select Your Conversion !</h1>
		</div>

	<div class="container wow rotateInDownLeft">
		
		
			<a href="temperature.php"><button class="btn btn1" title="Convert different units of temperature">Temperature</button></a>
			
			<a href="mass.php"><button class="btn btn2" title="Convert different units of mass">Mass</button></a>
			<a href="volume.php"><button class="btn btn1" title="Convert different units of volume and capacity">Volume and Capacity</button></a><br>
			
	
		
	
			<a href="area.php"><button class="btn btn1" title="Convert different units of area">Area</button></a>
			
			<a href="speed.php"><button class="btn btn2" title="Convert different units of speed">Speed</button></a>
			<a href="length.php"><button class="btn btn1" title="Convert different units of speed">Lenght and Distance</button></a>
			
			
		
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>

              <?php include_once "./includes/footer.php";?>

</body>

<style>




	body{
  
  background-size: cover;
  background-position: center;
 
  background-image: url(includes/1.jpg);
  background-color: rgba(0,0,0,0.6);
  background-blend-mode: overlay;
}

.container{
  text-align: center;
  margin-top: 30px;
  margin-bottom: 60px;

 
}
.heading h1{
  text-align: center;
  margin-top: 60px;
  padding-top: 30px;
  color: #ff8c00;


 
}
.btn{
  border: 1px solid #ff8c00;
  background: none;
  padding: 10px 30px;
  font-size: 20px;
  font-family: "montserrat";
  cursor: pointer;
  margin: 10px;
  transition: 0.8s;
  position: relative;
  overflow: hidden;
}
.btn1,.btn2{
  color: #ff8c00;
}
.btn3,.btn4{
  color: #fff;
}
.btn1:hover,.btn2:hover{
  color: #fff;
}
.btn3:hover,.btn4:hover{
  color: #ff8c00;
}
.btn::before{
  content: "";
  position: absolute;
  left: 0;
  width: 100%;
  height: 0%;
  background: #ff8c00;
  z-index: -1;
  transition: 0.8s;
}
.btn1::before,.btn3::before{
  top: 0;
  border-radius: 0 0 50% 50%;
}
.btn2::before,.btn4::before{
  bottom: 0;
  border-radius: 50% 50% 0 0;
}
.btn3::before,.btn4::before{
  height: 180%;
}
.btn1:hover::before,.btn2:hover::before{
  height: 180%;
}
.btn3:hover::before,.btn4:hover::before{
  height: 0%;
}

</style>

</html>
