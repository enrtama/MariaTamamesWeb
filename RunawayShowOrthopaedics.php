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
    <title><?php echo title1;?> - <?php echo element11;?></title>
	<?php include ("Structure/Head.html");?>
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
			<p class="projectTitle"><a href="Orthopaedics?lang=<?php echo $language;?>"><?php echo title1;?></a></p>
            <p class="subtitle"><?php echo subtitle1;?></p>
            <div class="separator3"></div>
            <div id="SubMenu">
        		<table id="tableSubMenu">
                    <tr><td id="botonMenuSeleccionado"><a href="RunawayShow?lang=<?php echo $language;?>"><?php echo element11;?></a></td>
                    <td><a href="VideoOrthopaedics?lang=<?php echo $language;?>"><?php echo element12;?></a></td></tr>
        		</table>
    		</div>   
            
			
            <p><br><iframe width="900" height="450" src="http://www.youtube.com/embed/8Ppog7WclXM" frameborder="0" allowfullscreen></iframe><p>
            <p class="video">Pasarela Castilla y León. Concurso de Jóvenes Diseñadores de la XII Edición.</p>
            <br><br>
            <p class="textImage"><img src="Images/Ortopedias/RunwayShow/4.jpg" alt="Ortopedias" border="0"/>
            <img src="Images/Ortopedias/RunwayShow/3.jpg" alt="Ortopedias" border="0"/></p>
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
