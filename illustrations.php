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
    <title><?php echo title3;?></title>
	<?php include ("Structure/Head.html");?>
    <link rel="stylesheet" type="text/css" href="CSS/jQueryLightbox/jquery.lightbox-0.5.css" media="screen"/>
    <script type="text/javascript" src="Javascript/jQueryLightbox/jquery.js"></script>
    <script type="text/javascript" src="Javascript/jQueryLightbox/jquery.lightbox-0.5.js"></script>
	<script type="text/javascript" src="http://assets.pinterest.com/js/pinit.js"></script>
	<script type="text/javascript">
		$(function() {
			$('.textImage a').lightBox();
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
                <td><a href="Bio?lang=<?php echo $language;?>"><?php echo element3;?></a></td>                
                <td><span class="space">/</span></td>                
                <td id="botonMenuSeleccionado"><a href="Projects?lang=<?php echo $language;?>"><?php echo element2;?></a></td>
                <td><span class="space">/</span></td>
                <td><a href="CollaborationsWoman?lang=<?php echo $language;?>"><?php echo element5;?></a></td> 
                <td><span class="space">/</span></td>
                <td><a target="_blank" href="http://mariatamames.tumblr.com/"><?php echo element4;?></a></td>                       	
            </tr>
        </table>
        <!--fin lista menu -->
    </div>
        
    <div id="capaCentro">
        <div id="textLayer">
        
            <div class="separator1"></div>
			<p class="projectTitle"><a href="illustrations?lang=<?php echo $language;?>"><?php echo title3;?></a></p>
            <p class="subtitle"><?php echo subtitle3;?></p>
            <div class="separator3"></div>
        
        	<p class="text" style="margin:0px 110px 0px 110px;"><?php echo textDecadencia2;?></p><br><br>
    		<p class="textImage">
            <a href="Images/Illustrations/1.jpg" title="">
            <img src="Images/Illustrations/1.jpg" width="190" height="280" alt="Ortopedias"/></a>
            <a href="Images/Illustrations/2.jpg" title="">
            <img src="Images/Illustrations/2.jpg" width="190" height="280" alt="Ortopedias"/></a>
            <a href="Images/Illustrations/3.jpg" title="">
            <img src="Images/Illustrations/3.jpg" width="190" height="280" alt="Ortopedias"/></a>
            <a href="Images/Illustrations/4.jpg" title="">
            <img src="Images/Illustrations/4.jpg" width="190" height="280" alt="Ortopedias"/></a>
            <a href="Images/Illustrations/5.jpg" title="">
            <img src="Images/Illustrations/5.jpg" width="190" height="280" alt="Ortopedias"/></a>
            <a href="Images/Illustrations/6.jpg" title="">
            <img src="Images/Illustrations/6.jpg" width="190" height="280" alt="Ortopedias"/></a>
            <a href="Images/Illustrations/7.jpg" title="">
            <img src="Images/Illustrations/7.jpg" width="190" height="280" alt="Ortopedias"/></a>
            <a href="Images/Illustrations/8.jpg" title="">
            <img src="Images/Illustrations/8.jpg" width="190" height="280" alt="Ortopedias"/></a>           
            <a href="Images/Illustrations/9.jpg" title="">
            <img src="Images/Illustrations/9.jpg" width="190" height="280" alt="Ortopedias"/></a>
            <a href="Images/Illustrations/10.jpg" title="">
            <img src="Images/Illustrations/10.jpg" width="190" height="280" alt="Ortopedias"/></a>
            <a href="Images/Illustrations/11.jpg" title="">
            <img src="Images/Illustrations/11.jpg" width="190" height="280" alt="Ortopedias"/></a>
            <a href="Images/Illustrations/12.jpg" title="">
            <img src="Images/Illustrations/12.jpg" width="190" height="280" alt="Ortopedias"/></a>
            </p>        
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
