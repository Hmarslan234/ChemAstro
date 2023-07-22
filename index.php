
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="ChemAtro is a web-based user-friendly software, by Dynamic Developers Software House, in which we can find out different kinds of chemical solutions and we can calculate different numerical related to the field on chemistry and physics.">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ChemAstro Software - A Project by Dynamic Developers Software House</title>

	<link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

	<link rel="stylesheet" href="style.css">
	
	<link rel="icon" href="includes/chemastro1.png" alt="ChemAstro Software">
	
</head>
<body>

	<?php include_once "header.php";?>

<div class="mainContent">
		
	<a href="chemical.php">
		<div class="card wow rotateInDownLeft" title="Find Chemical Solutions">
			
			<div class="icon">

				<i class="material-icons">invert_colors</i>

			</div>
			<p class="title">Chemical Solutions</p>
			<p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

		</div>
	</a>

		
	<a href="conversions.php">
		<div class="card wow bounceInDown" title="Convert Physics Units">
			
			<div class="icon">

				<i class="material-icons">sync</i>

			</div>
			<p class="title">Conversions</p>
			<p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

		</div>
	</a>

	<a href="about.php">
		<div class="card wow rotateInDownRight" title="Know About Developers">
			
			<div class="icon">

				<i class="material-icons">account_circle</i>

			</div>
			<p class="title">About Us</p>
			<p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

		</div>
	</a>

	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>

              <footer
    style="border-top: 1px solid #333;width: 100%; position: fixed; bottom: 0px;text-align: center;height: 40px; line-height: 40px;background: #ff8c00; font-weight:bold; ">
    <a href="https://www.dynamicdevelopers.com.pk" style="color:black;">Dynamic Developers</a> &copy; <?= date("Y") ?> || All rights reserved
</footer>

</body>
<style >
	

	*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Titillium Web', sans-serif;

}
body{
	
	background-size: cover;
	background-position: center;
	
	background-image: url(includes/1.jpg);
	background-color: rgba(0,0,0,0.6);
	background-blend-mode: overlay;

}
.mainContent{
	width: 100%;
	max-width: 1024px;
	padding: 0 0%;
	padding-top: 50px;
	padding-bottom: 60px;

	margin: 0 auto;
	display: flex;
	justify-content: center;
	align-items: center;
}
a{
	text-decoration: none;
}
.card{
	width: 100%;
	max-width: 300px;
	min-width: 200px;
	height: 250px;
	background-color: #2c2c40;
	margin: 10px;
	border-radius: 10px;
	box-shadow: 0px 2px 10px rgba(0,0,0,0.24);
	border: 2px solid rgba(7,7,7,0.12);
	font-size: 17px;
	transition: all 0.3s ease;
	position: relative;
	display: flex;
	align-items: center;
	flex-direction: column;
	cursor: pointer;
	transition: all 0.3s ease;
	border: 2px solid #ff8c00;
}
.icon{
	margin: 20px auto 0 auto;
	width: 100%;
	height: 80px;
	max-width: 80px;
	background: linear-gradient(90deg, #ff8c00, #ff8c00 40%, rgba(0,0,0,0.28)59%);
	display: flex;
	border-radius: 100%;
	justify-content: center;
	align-items: center;
	color: #fff;
	background-position: 0px;
	background-size: 200px;

}
.material-icons{
	font-size: 37px;
}
.card .title{
	width: 100%;
	margin: 0;
	text-align: center;
	margin-top: 30px;
	color: #fff;
	font-weight: 400px;
	text-transform: uppercase;
	letter-spacing: 3px;
}
.card .text{
	width: 80%;
	margin: 0 auto;
	font-size: 13px;
	text-align: center;
	margin-top: 20px;
	color: #fff;
	font-weight: 200;
	letter-spacing: 2px;
	opacity: 0;
	max-height: 0;
	transition: all 0.3s ease;
}
.card:hover{
	height: 270px;

}
.card:hover .text{
	transition: all 0.3s ease;
	opacity: 1;
	max-height: 125px;
}
.card:hover .icon{
	background-position: -120px;
	transition: all 0.3s ease;
	background-color: #000;
	color: #fff;
}
@media(max-width: 800px){
	.mainContent{flex-direction: column;}
	.card{width: 100%; max-width: 300px; margin: 10px 0;}
}
</style>

</html>
