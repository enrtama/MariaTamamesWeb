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
    <title><?php echo element4;?></title>
	<?php include ("/Structure/Head.html");?>    
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
                <td><a href="Projects?lang=<?php echo $language;?>"><?php echo element2;?></a></td>
				<td><span class="space">/</span></td>
                <td><a href="CollaborationsWoman?lang=<?php echo $language;?>"><?php echo element5;?></a></td> 
                <td><span class="space">/</span></td>
                <td id="botonMenuSeleccionado"><a target="_blank" href="http://mariatamames.tumblr.com/"><?php echo element4;?></a></td>
            </tr>
        </table>
        <!--fin lista menu -->
    </div>
    <!-- fin menu -->
        
    <div id="capaCentro">
        <div id="textLayer">
        
            <br><br><p class="onlineShop">COMING SOON</p><br><br><br><br><br><br><br><br><br><br><br><br>
   
        </div>
        <!-- fin capa texto -->
        
        <div id="footerLayer">
    		<?php include("Structure/Footer.html");?>
        </div>
        <!-- fin capa pie pagina -->
    </div>
    <!-- fin capa centro -->
</div>
<!-- fin capa contenido -->

</body>
</html>
