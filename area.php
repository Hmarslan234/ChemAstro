<?php

require_once('includes/functions.php');

$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if(isset($_POST['submit'])) {
  $from_value = $_POST['from_value'];
  $from_unit = $_POST['from_unit'];
  $to_unit = $_POST['to_unit'];
  
  $to_value = convert_area($from_value, $from_unit, $to_unit);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Convert Area - ChemAstro Software by Dynamic Developers</title>
    <meta name="description" content="Convert area to any unit by using chemastro software by dynamic developers. find area, area units, area formula, area calculator software. ">
    <link href="Styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>
      
      <?php include_once "header.php";?>

    <div class="heading wow bounceInDown">
      <h1>Convert Area...!</h1>
    </div>

    <div class="abc" id="main-content">
  
      <form action="" method="post">
        
        <div class="entry">
          <label style="color: white;">From:</label>&nbsp;
          <input type="text" name="from_value" value="<?php echo $from_value; ?>" />&nbsp;
          <select name="from_unit">
            <option value="square_inches"<?php if($from_unit == 'square_inches') { echo " selected"; } ?>>square inches</option>
            <option value="square_feet"<?php if($from_unit == 'square_feet') { echo " selected"; } ?>>square feet</option>
            <option value="square_yards"<?php if($from_unit == 'square_yards') { echo " selected"; } ?>>square yards</option>
            <option value="square_miles"<?php if($from_unit == 'square_miles') { echo " selected"; } ?>>square miles</option>
            <option value="square_millimeters"<?php if($from_unit == 'square_millimeters') { echo " selected"; } ?>>square millimeters</option>
            <option value="square_centimeters"<?php if($from_unit == 'square_centimeters') { echo " selected"; } ?>>square centimeters</option>
            <option value="square_meters"<?php if($from_unit == 'square_meters') { echo " selected"; } ?>>square meters</option>
            <option value="square_kilometers"<?php if($from_unit == 'square_kilometers') { echo " selected"; } ?>>square kilometers</option>
            <option value="acres"<?php if($from_unit == 'acres') { echo " selected"; } ?>>acres</option>
            <option value="hectares"<?php if($from_unit == 'hectares') { echo " selected"; } ?>>hectares</option>
          </select>
        </div>
        
        <div class="entry">
          <label style="color: white;">To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo float_to_string($to_value); ?>" />&nbsp;
          <select name="to_unit">
            <option value="square_inches"<?php if($to_unit == 'square_inches') { echo " selected"; } ?>>square inches</option>
            <option value="square_feet"<?php if($to_unit == 'square_feet') { echo " selected"; } ?>>square feet</option>
            <option value="square_yards"<?php if($to_unit == 'square_yards') { echo " selected"; } ?>>square yards</option>
            <option value="square_miles"<?php if($to_unit == 'square_miles') { echo " selected"; } ?>>square miles</option>
            <option value="square_millimeters"<?php if($to_unit == 'square_millimeters') { echo " selected"; } ?>>square millimeters</option>
            <option value="square_centimeters"<?php if($to_unit == 'square_centimeters') { echo " selected"; } ?>>square centimeters</option>
            <option value="square_meters"<?php if($to_unit == 'square_meters') { echo " selected"; } ?>>square meters</option>
            <option value="square_kilometers"<?php if($to_unit == 'square_kilometers') { echo " selected"; } ?>>square kilometers</option>
            <option value="acres"<?php if($to_unit == 'acres') { echo " selected"; } ?>>acres</option>
            <option value="hectares"<?php if($to_unit == 'hectares') { echo " selected"; } ?>>hectares</option>
          </select>
          
        </div>
        <br>
        
        <button class="btn" type="submit" name="submit" value="Submit">Submit</button><br>
      </form>
     
    </div>
     <div class="return">
    <a href="index.php"><h4>Return to main menu</h4></a>
      </div>
      
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
.abc {
      width: 40%;
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
    .abc:hover {
      
      color: white;
      background-color: #Ff8c00;
      border: 1px solid black;
    
    }

    @media(max-width: 920px){
      
    
      .abc {
      width: 60%;
      
    }
    
    }
    @media(max-width: 640px){
      
    
      .abc {
      width: 70%;
      
    }
    
    }
    @media(max-width: 420px){
    
      .abc {
      width: 90%;
      
    }
    
    }
    
.heading h1{
  text-align: center;
 
  padding-top: 50px;
  color: #ff8c00;


 
}
.entry{
  padding-top: 40px;
  text-align: center;
  
  
}
.submit{
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
  text-align: center;
  margin-top: 20px;
  margin-left: auto;
  margin-right: auto;

}

.btn:hover{
  color: #Ff8c00;
  background: white;
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


  </style>
  
</html>
