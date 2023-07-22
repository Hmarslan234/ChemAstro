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
  
  $to_value = convert_length($from_value, $from_unit, $to_unit);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert Length</title>
    <link href="Styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div class="heading wow bounceInDown">
      <h1>Convert Length...!</h1>
    </div>

    <div class="abc" id="main-content">

  
      <form action="" method="post">
        
        <div class="entry">
          <label style="color: white;">From:</label>&nbsp;
          <input type="text" name="from_value" value="<?php echo $from_value; ?>" />&nbsp;
          <select name="from_unit">
            <option value="inches"<?php if($from_unit == 'inches') { echo " selected"; } ?>>inches</option>
            <option value="feet"<?php if($from_unit == 'feet') { echo " selected"; } ?>>feet</option>
            <option value="yards"<?php if($from_unit == 'yards') { echo " selected"; } ?>>yards</option>
            <option value="miles"<?php if($from_unit == 'miles') { echo " selected"; } ?>>miles</option>
            <option value="millimeters"<?php if($from_unit == 'millimeters') { echo " selected"; } ?>>millimeters</option>
            <option value="centimeters"<?php if($from_unit == 'centimeters') { echo " selected"; } ?>>centimeters</option>
            <option value="meters"<?php if($from_unit == 'meters') { echo " selected"; } ?>>meters</option>
            <option value="kilometers"<?php if($from_unit == 'kilometers') { echo " selected"; } ?>>kilometers</option>
          </select>
        </div>
        
        <div class="entry">
          <label style="color: white;">To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo float_to_string($to_value); ?>" />&nbsp;
          <select name="to_unit">
            <option value="inches"<?php if($to_unit == 'inches') { echo " selected"; } ?>>inches</option>
            <option value="feet"<?php if($to_unit == 'feet') { echo " selected"; } ?>>feet</option>
            <option value="yards"<?php if($to_unit == 'yards') { echo " selected"; } ?>>yards</option>
            <option value="miles"<?php if($to_unit == 'miles') { echo " selected"; } ?>>miles</option>
            <option value="millimeters"<?php if($to_unit == 'millimeters') { echo " selected"; } ?>>millimeters</option>
            <option value="centimeters"<?php if($to_unit == 'centimeters') { echo " selected"; } ?>>centimeters</option>
            <option value="meters"<?php if($to_unit == 'meters') { echo " selected"; } ?>>meters</option>
            <option value="kilometers"<?php if($to_unit == 'kilometers') { echo " selected"; } ?>>kilometers</option>
          </select>
          
        </div>
        
        <button class="btn" type="submit" name="submit" value="Submit">Submit</button>
      </form>
  
      <br>
      
    </div>

    <div class="return">
    <a href="index.php"><h4>Return to main menu</h4></a>
      </div>

    <footer
    style="border-top: 1px solid #333;width: 100%; position: fixed; bottom: 0px;text-align: center;height: 40px; line-height: 40px;background: #ff8c00; margin-left: -8px; ">
    Dynamic Developers &copy; <?= date("Y") ?> || All rights reserved
</footer>
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
 
  padding-top: 40px;
  color: #ff8c00;


 
}
.entry{
  text-align: center;
  margin-top: 50px;
  margin-bottom: 50px;
  
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
