<?php
	$language = trim($_GET['lang']);
	if ($language == "es")
		include_once("Languages/es.php");
	else if ($language == "fr")
		include_once("Languages/fr.php");
	else{
		include_once("Languages/en.php");
	}
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo title7;?></title>
	<?php include ("Structure/Head.html");?> 
	<link rel="stylesheet" href="CSS/LightBox/lightbox.css" type="text/css" media="screen"/>     
	<script type="text/javascript" src="Javascript/Lightbox/jquery.smooth-scroll.min.js"></script>
    <script type="text/javascript" src="Javascript/Lightbox/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="Javascript/Lightbox/jquery-ui-1.8.18.custom.min.js"></script>
    <script type="text/javascript" src="Javascript/Lightbox/lightbox.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js" type="text/javascript" charset="utf-8"></script>
    <script src="Javascript/text.js" type="text/javascript" charset="utf-8"></script> 
    <script>
	  jQuery(document).ready(function($) {
		  $('a').smoothScroll({
			speed: 1000,
			easing: 'easeInOutCubic'
		  });
	  });
	</script>
    <script>
		function expandText() {
			if (document.getElementById('info').getAttribute("title") == "Expandir"){
				document.getElementById('info').setAttribute("title","Encoger");												
				document.getElementById('info').innerHTML ="TEXT -";
			}else{
				document.getElementById('info').setAttribute("title","Expandir");																
				document.getElementById('info').value = "";
				document.getElementById('info').value ="TEXT +";											
				document.getElementById('info').innerHTML ="TEXT +";			
			}
		}
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
       	<?php include_once("Structure/Logo.html");?>
    </div>
    
    <div id="capaLinks">
    	<?php include_once("Structure/Links.html");?>
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
                <td><a target="_blank" href="/http://mariatamames.tumblr.com/"><?php echo element4;?></a></td>                
        	</tr>
        </table>
        <!--fin lista menu -->
    </div>      
        
    <div id="capaCentro">
        <div id="textLayer">

            <div class="separator1"></div>
			<p class="projectTitle"><a href="FeltedThought?lang=<?php echo $language;?>"><?php echo title7;?></a></p>
            <p class="subtitle"><?php echo subtitle5;?></p>
            <div class="separator3"></div>  
            
            <div class="row" id="maincontent">
                <div class="textePlus clickOnly expand" id="projet">
                    <a id="info" onClick="expandText()" href="#" title="Expandir">TEXT +<span class="icon"></span></a>
                </div><!-- fin#textePlus -->
            	<div class="text slideToggle" id="projet-over">
                	<h2><?php echo title7;?></h2>
                	<h3><?php echo subtitle5;?></h3>                    
                	<p><?php echo textEnfieltrado1;?><p>
                    <p><?php echo textEnfieltrado2;?><p>
        		</div><!-- fin.row -->
    		</div> <!-- /container -->
            <p><a href="Images/GeometriaTextil/1.jpg" rel="lightbox[group]">
            <img src="Images/GeometriaTextil/1.jpg" alt="" border="0" height="auto" width="435"/></a>
            <a href="Images/GeometriaTextil/2.jpg" rel="lightbox[group]">
            <img src="Images/GeometriaTextil/2.jpg" alt="" border="0" height="auto" width="435" align="right"/></a></p>
            <p><a href="Images/GeometriaTextil/3.jpg" rel="lightbox[group]">
            <img src="Images/GeometriaTextil/3.jpg" alt="" border="0" height="auto" width="435"/></a>
            <a href="Images/GeometriaTextil/4.jpg" rel="lightbox[group]">
            <img src="Images/GeometriaTextil/4.jpg" alt="" border="0" height="auto" width="435" align="right"/></a></p> 
            <p><a href="Images/GeometriaTextil/5.jpg" rel="lightbox[group]">
            <img src="Images/GeometriaTextil/5.jpg" alt="" border="0" height="auto" width="435"/></a>
            <a href="Images/GeometriaTextil/6.jpg" rel="lightbox[group]">
            <img src="Images/GeometriaTextil/6.jpg" alt="" border="0" height="auto" width="435" align="right"/></a></p> 
            <p><a href="Images/GeometriaTextil/7.jpg" rel="lightbox[group]">
            <img src="Images/GeometriaTextil/7.jpg" alt="" border="0" height="auto" width="435"/></a>
            <a href="Images/GeometriaTextil/8.jpg" rel="lightbox[group]">
            <img src="Images/GeometriaTextil/8.jpg" alt="" border="0" height="auto" width="435" align="right"/></a></p> 
            <p><a href="Images/GeometriaTextil/9.jpg" rel="lightbox[group]">
            <img src="Images/GeometriaTextil/9.jpg" alt="" border="0" height="auto" width="435"/></a>
            <a href="Images/GeometriaTextil/10.jpg" rel="lightbox[group]">
            <img src="Images/GeometriaTextil/10.jpg" alt="" border="0" height="auto" width="435" align="right"/></a></p>
            <p><a href="Images/GeometriaTextil/11.jpg" rel="lightbox[group]">
            <img src="Images/GeometriaTextil/11.jpg" alt="" border="0" height="auto" width="435"/></a>
            <a href="Images/GeometriaTextil/12.jpg" rel="lightbox[group]">
            <img src="Images/GeometriaTextil/12.jpg" alt="" border="0" height="auto" width="435" align="right"/></a></p>
        </div>
        <!-- fin capa texto -->
        
        <div id="footerLayer">
    		<?php include_once("Structure/Footer.html");?>
        </div>
    </div>
    
    </div>
    <!-- fin capa centro -->
    
</div>
<!-- fin capa contenido -->

</body>
</html>
