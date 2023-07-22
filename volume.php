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
  
  $to_value = convert_volume($from_value, $from_unit, $to_unit);
}

$volume_options = array(
  'cubic inches',
  'cubic feet',
  'Imperial gallons',
  'Imperial quarts',
  'Imperial pints',
  'Imperial cups',
  'Imperial ounces',
  'Imperial tablespoons',
  'Imperial teaspoons',
  'US gallons',
  'US quarts',
  'US pints',
  'US cups',
  'US ounces',
  'US tablespoons',
  'US teaspoons',
  'cubic centimeters',
  'cubic meters',
  'liters',
  'milliliters'
);

?>
<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Convert Volume</title>
    <link href="Styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div class="heading wow bounceInDown">
      <h1>Convert Volume...!</h1>
    </div>

    <div class="abc" id="main-content">

  
      <form action="" method="post">
        
        <div class="entry">
          <label style="color: white;">From:</label>&nbsp;
          <input type="text" name="from_value" value="<?php echo $from_value; ?>" />&nbsp;
          <select name="from_unit">
            <?php
            foreach($volume_options as $unit) {
              $opt = optionize($unit);
              echo "<option value=\"{$opt}\"";
              if($from_unit == $opt) { echo " selected"; }
              echo ">{$unit}</option>";
            }
            ?>
          </select>
        </div>
        
        <div class="entry">
          <label style="color: white;">To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo float_to_string($to_value); ?>" />&nbsp;
          <select name="to_unit">
            <?php
            foreach($volume_options as $unit) {
              $opt = optionize($unit);
              echo "<option value=\"{$opt}\"";
              if($to_unit == $opt) { echo " selected"; }
              echo ">{$unit}</option>";
            }
            ?>
          </select>
          
        </div>
        
        <button class="btn" type="submit" name="submit" value="Submit">Submit</button>
      </form>
  
      <br>
      
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
