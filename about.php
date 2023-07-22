<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>About Us - Developers of ChemAstro Software</title>
	<meta name="description" content="Chemstro in software for chemical and physical calculations and problem solving. We can calculate basic chemical formulas by using 
	this software, we can also able to convert some physics unit as well. This software is designed and developed by Hafiz M. Arslan.">

	<link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">

	<link rel="stylesheet" href="style.css">
</head>
<body>

	<?php include_once "header.php";?>



	<div class="about-section wow bounceInDown">
        <div class="inner-container">
            <h1>About Us</h1>
            <p class="text">
                Chemstro in software for chemical and physical calculations and problem solving. We can calculate basic chemical formulas by using this software, we can also able to convert some physics unit as well.<br>
                This software is designed and developed by Hafiz M. Arslan.
            </p>
            <div class="skills">
                <a href="https://www.dynamicdevelopers.com.pk" target="blank" title="Visit Dynamic Developers Website"><h3>Visit Our Website</h3></a>
                
            </div>
           
        </div>
    </div>

    

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>

<footer
    style="border-top: 1px solid #333;width: 100%; position: fixed; bottom: 0px;text-align: center;height: 40px; line-height: 40px;background: #ff8c00; ">
    Dynamic Developers &copy; <?= date("Y") ?> || All rights reserved
</footer>
    
</body>

<style >

	a{
			text-decoration: underline;
			
			color: #white;
		}
		a:hover{
			text-decoration: underline;
			color: green;
		}

	

	body{
	background-size: cover;
	background-position: center;

	background-image: url(includes/1.jpg);
	background-color: rgba(0,0,0,0.6);
	background-blend-mode: overlay;

}
.about-section{
     background: url(includes/222.png) no-repeat left;
    background-size: 55%;
   
    overflow: hidden;

    padding: 10px 0;
    margin-top: 70px;
    margin-bottom: 60px;
    box-sizing: border-box;
    border: 3px solid yellow;


}
@media(max-width: 620px){
	.about-section{
    background: url(includes/222.png) ;
    padding: 10px 0;
    
   display: flex;
    
  flex-direction: column;


}
}
.about-section:hover{
    
border: 3px solid #ff8c00;

}

.inner-container{
    width: 55%;
    float: right;
    background-color: darkgray;
    padding: 60px;
    margin-top: 0px;
    box-sizing: border-box;
    border: 3px solid white;
    
}
@media(max-width: 620px){
	.inner-container{
    width: 90%;
 
    align-self: center;
    background-color: #ff8c00;
  
  
    
}
}
.inner-container:hover{
    
    background-color: #ff8c00;
    
    
    border: 3px solid yellow;
    
}

.inner-container h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
    color: white;
}
.inner-container p{
	color: white;
}

.text{
    font-size: 13px;
    color: #545454;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
}

.skills{
    display: flex;
    justify-content: space-between;
    font-weight: 700;
    font-size: 13px;
}



*{
    margin: 0;
    padding: 0;
    font-family: "Open Sans",sans-serif;
    box-sizing: border-box;
}
</style>

</html>