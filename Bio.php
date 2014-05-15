<?php
	$language = trim($_GET['lang']);
	if ($language == "es")
		include("Languages/es.php");
	else if ($language == "fr")
		include("Languages/fr.php");
	else{
		include("Languages/en.php");
	}
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo element3;?></title>
	<?php include ("Structure/Head.html");?>
	<link rel="stylesheet" href="CSS/Slider/flexslider.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="Javascript/Slider/jquery.flexslider.js"></script>
	<script src="Javascript/Slider/jquery.flexslider-min.js"></script>
        
	<script type="text/javascript" charset="utf-8">
      $(window).load(function() {
        $('.flexslider').flexslider();
      });
    </script>
	<script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-38774584-1']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>
</head>

<body>
<div id="contentLayer">
    
   	<div id="logoLayer">
       	<?php include("Structure/Logo.html");?>
    </div>
    
    <div id="capaLinks">
    	<?php include("Structure/Links.html");?>
    </div>
              
    <div id="Menu">
    	<table id="tableMenu">
        	<tr>
                <td><a href="main?lang=<?php echo $language;?>"><?php echo element1;?></a></td>
                <td><span class="space">/</span></td>
                <td id="botonMenuSeleccionado"><a href="Bio?lang=<?php echo $language;?>"><?php echo element3;?></a></td>
                <td><span class="space">/</span></td>
                <td><a href="Projects?lang=<?php echo $language;?>"><?php echo element2;?></a></td>
                <td><span class="space">/</span></td>
                <td><a href="CollaborationsWoman?lang=<?php echo $language;?>"><?php echo element5;?></a></td>
                <td><span class="space">/</span></td>
                <td><a target="_blank" href="http://mariatamames.tumblr.com/"><?php echo element4;?></a></td>
        	</tr>
        </table>
        <!--fin lista menu -->
    </div>
    <!-- fin menu -->
        
    <div id="capaCentro">
        <div id="textLayer"> 
            <div class="separator4"></div>
            <div class="about"><?php echo strtoupper(element3);?></div>
            <p class="textBio"><?php echo textBio;?></p>
            <p class="linkContact"><a style="text-align:left;" href="mailto:info@tamamesmaria.com">info@mariatamames.com</a></p>            
            <div class="separator2"></div>
              	
            <div class="flexslider" style="width:515px; margin-top:-450px;margin-left:350px;">
              <ul class="slides">
                <li>
                  <img src="Images/Bio/1.jpg"/>
                </li>
                <li>
                  <img src="Images/Bio/2.jpg" />
                </li>
                <li>
                  <img src="Images/Bio/3.jpg" />
                </li>
                <li>
                  <img src="Images/Bio/4.jpg" />
                </li>
                <li>
                  <img src="Images/Bio/5.jpg" />
                </li>
                <li>
                  <img src="Images/Bio/6.jpg" />
                </li>
                <li>
                  <img src="Images/Bio/7.jpg" />
                </li>
              </ul>
            </div>
        </div>
        <!-- fin capa texto -->
        <div id="footerLayer">
    		<?php include("Structure/Footer.html");?>      
        </div>
    </div>
    
    </div>
    <!-- fin capa centro -->
       
</div>
<!-- fin capa contenido -->

</body>
</html>
