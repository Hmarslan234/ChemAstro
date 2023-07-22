<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

	<link rel="stylesheet" type="text/css" href="">

</head>
	<body>

		<div class="heading wow bounceInDown">
      <h1>Calculate Volume Fraction...!</h1>
    </div>
		
		<form action="" method="POST">
			<div class="container wow bounceInUp">
				<h4>Write Volume of Solute:</h4>
				<input class="taxt" type="text" name="num1">
			
				<h4>Write Volume of Solution:</h4>
				<input class="taxt" type="text" name="num2"><br><br>

				<button class="btn" type="submit" name="submit">Submit</button>

				<?php

					$sum="";
					if(isset($_POST['submit']))
					{
						$num1=$_POST['num1'];
						$num2=$_POST['num2'];
						$sum=$num1/$num2;
					}

?>

				<h4>Result :</h4>
				<input class="txt" type="text" name="result" value="<?php echo $sum; ?>" >
		</div>
	</form>

		<div class="return">
		<a href="index.php"><h4>Return to main menu</h4></a>
	    </div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>

              <footer
    style="border-top: 1px solid #333;width: 100%; position: fixed; bottom: 0px;text-align: center;height: 40px; line-height: 40px;background: #ff8c00; margin-left: -8px; ">
    Dynamic Developers &copy; <?= date("Y") ?> || All rights reserved
</footer>

	</body>

	<style>

		body{
	
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	background-image: url(includes/1.jpg);
	background-color: rgba(0,0,0,0.6);
	background-blend-mode: overlay;

}

		.return{
			text-align: center;
			text-decoration: underline;
			padding-bottom: 40px;
		}
a{
			text-decoration: none;
			color: white;
		}
		a:hover{
			text-decoration: none;
			color: #ff8c00;
		}


		.heading h1{
  text-align: center;
 
  padding-top: 40px;
  color: #ff8c00;


 
}
		
		.container {
			width: 28%;
			padding: 12px 20px;
			align-self: center;
			margin-right: auto;
			margin-left: auto;
			color: #Ff8c00;
			margin-top: 20px;
			box-sizing: border-box;
			border: 2px solid #Ff8c00;
			outline: none;
			font-size: 25px;
			text-align: center;
			

		}
		.container:hover {
			
			color: white;
			background-color: #Ff8c00;
			border: 1px solid black;
			
			

		}
		@media(max-width: 920px){
			
		
			.container {
			width: 40%;
			
		}
		
		}
		@media(max-width: 640px){
			
		
			.container {
			width: 60%;
			
		}
		
		}
		@media(max-width: 420px){
		
			.container {
			width: 90%;
			
		}
		
		}
		.taxt{

			margin-top: -20px;
			text-align: center;
		}
		.txt{

			margin-top: -20px;
			margin-bottom: 20px;
			text-align: center;

		}
		.btn {
	font-size: 25px;
	text-decoration: none;
	color: white;
	display: block;
	background: #Ff8c00;
	border: 1px solid black;
	margin-left: 34%;

}

.btn:hover{
	color: #Ff8c00;
	background: white;
}


	</style>

</html>



