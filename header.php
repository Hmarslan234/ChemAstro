<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <title>ChemAstro Software - A Project by Dynamic Developers Software House</title>
        <meta name="description" content="ChemAtro is a web-based user-friendly software, by Dynamic Developers Software House, in which we can find out different kinds of chemical 
         solutions and we can calculate different numerical related to the field on chemistry and physics.">
        <link rel="stylesheet" href="includes/slicknav.min.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald:400" rel="stylesheet"> 
        <style>
           body{background: transparent;font-family: 'Titillium Web', sans-serif;font-size: 15px;font-weight: 400; line-height: 1.5em;}
            .inner_main_menu {margin: 20px auto; width: 970px;}    
            .inner_main_menu ul{margin: 0; padding: 80px 0 0; list-style: none;text-align: right;}    
            .inner_main_menu ul li{float: none; display: inline-block;position: relative}    
            .inner_main_menu ul li:nth-child(1){float: left;}    
            .inner_main_menu ul li:nth-child(2){float: left;}    
              
            .inner_main_menu ul li a{color: white; font-size: 20px; text-transform: uppercase;text-decoration: none; display: block;padding: 10px 20px;}    
            .inner_main_menu ul li a:hover{color: #ff8c00;}  
             
            .slicknav_menu {
              background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
              font-size: 16px;
              padding: 5px;
              display: none;    
              position: fixed;
              right: 0;
              width: 100%;
              z-index: 99999;
            }
            ul.slicknav_nav {
              background: #262626 none repeat scroll 0 0;
              left: 0;
              position: absolute;
              top: 0;
              width: 80%;
            }
            .slicknav_btn {top: 35px;}
            #main_menu{width: 100%; position: relative;}
            .logo_area{width: 300px; height: 300px; position: absolute; left: 50%; top: 0; content: ""; margin-left:-150px; text-align: center; }
            @media only screen and (min-width: 200px) and (max-width: 767px) { 
                .slicknav_menu{display: block;}
                .inner_main_menu{display: none;}
                .logo_area {height: auto;left: 0;margin-left: 20px;position: relative;top: 0;width: 130px;}
                .logo_area img{height: auto;width: 100%; margin-top: 20px;}









            }
        </style>
    </head>
    <body>
        <div id="main_menu">
            <div class="logo_area">
                <a href=""><img src="includes/chemastro1.png" width="150px" alt="ChemAstro Software Logo" title="ChemAstro Logo"></a>
            </div>
            <div class="inner_main_menu">
                <ul id="menu">
                    <li><a href="index.php" title="ChemAstro Home Page">Home</a></li>
                    <li><a href="chemical.php" title="Find Chemical Solutions">Chemical Solutios</a></li>
                    <li><a href="conversions.php" title="Convert Physics Units">Conversions</a></li>
                    <li><a href="about.php" title="Know About Creators">About Us</a></li>
                </ul>
            </div>
        </div>
        
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="includes/jquery.slicknav.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#menu').slicknav();
        });
    </script>
    </body>
</html>