<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Calculate Chemical Solutions - ChemAstro Software</title>
    <meta name="description" content="Calculate different chemical solutions or convert chemistry formulas with the help of chemastro software by Dynamic Developers.">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    
  </head>
  <body>

    <?php include_once "header.php";?>
    

<div class="heading wow bounceInDown">
      <h1>What you want to find ?</h1>
    </div>

<div class="container wow rotateInDownLeft">
  <a href="no_of_moles.php"><button class="btn btn1" title="Calculate Number of Moles of Chemical Solution">No. of Moles</button></a>
  <a href="ch_mass.php"><button class="btn btn2" title="Calculate Mass of Chemical Solution">Mass</button></a>
  <a href="molarmass.php"><button class="btn btn1" title="Calculate Molar Mass of Solution">Molar Mass</button></a>
  <a href="no_particle.php"><button class="btn btn2" title="Calculate No. of Particles of Chemical Solution">No. of Particles</button></a>

  
  <a href="mole_frac.php"><button class="btn btn2" title="Calculate Mole Fraction of Chemical Solution">Mole Fraction</button></a>
  <a href="molarity.php"><button class="btn btn1" title="Calculate Molarity of Chemical Solution">Molarity (M)</button></a>
  <a href="molality.php"><button class="btn btn2" title="Calculate Molality of Chemical Solution">Molality (m)</button></a>
  <a href="mass_per.php"><button class="btn btn1" title="Calculate Mass Percentage of Chemical Solution">Mass Percentage</button></a>

  <a href="vol_per.php"></style><button class="btn btn1" title="Calculate Volume Percentage of Chemical Solution">Volume Percentage</button></a>
  <a href="vol_frac.php"><button class="btn btn2" title="Calculate Volume Fraction of Chemical Solution">Volume Fraction</button></a>
  <a href="weight_per.php"><button class="btn btn1" title="Calculate Weight Percentage of Chemical Solution">Weight Percentage</button></a>
  <a href="weight_frac.php"><button class="btn btn2" title="Calculate Weight Fraction of Chemical Solution">Weight Fraction</button></a>

  <a href="mods.php"><button class="btn btn1" title="Calculate Molarity of Dilute Solution">Molarity for Dilute Solution</button></a>
  <a href="mms.php"><button class="btn btn2" title="Calculate Molarity of Mixed Solution">Molarity for Mixed Solution</button></a>
  <a href="mnr.php"><button class="btn btn1" title="Calculate Molarity by Neutralization Reaction">Molarity by Nuetralization Reaction</button></a>
  
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


