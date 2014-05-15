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
    <title>María Tamames</title>
	<?php include ("Structure/Head.html");?>    
	<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script> 
	<script src="//connect.facebook.net/en_US/all.js"></script>  

	<script type='text/javascript'>
	(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
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
                <td id="botonMenuSeleccionado"><a href="main?lang=<?php echo $language;?>"><?php echo element1;?></a></td>
                <td><span class="space">/</span></td>
                <td><a href="Bio?lang=<?php echo $language;?>"><?php echo element3;?></a></td>  
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
            <div class="photo">
                <img src="Images/home.jpg" alt="Fashion Image" border="0"/>
            </div>
        </div>
        <!-- fin capa texto -->

		<div id="redesSociales">
			<div class="fb-like" data-href="http://facebook.com/pages/MariaTamames/370380732988210" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false" data-font="arial"></div>
        	<div class="sharertwitter"><a href="http://twitter.com/mariatamames" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow</a></div>
        </div>
        
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
