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
    <title><?php echo title2;?></title>
	<link rel="stylesheet" href="CSS/Slider/flexslider.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="Javascript/Slider/jquery.flexslider.js"></script>
	<script src="Javascript/Slider/jquery.flexslider-min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js" type="text/javascript" charset="utf-8"></script>
    <script src="Javascript/text.js" type="text/javascript" charset="utf-8"></script>
    <?php include ("Structure/Head.html");?>  
    
	<script type="text/javascript" charset="utf-8">
      $(window).load(function() {
        $('.flexslider').flexslider();
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
			<p class="projectTitle"><a href="Resilience?lang=<?php echo $language;?>"><?php echo title2;?></a></p>
            <p class="subtitle"><?php echo subtitle2;?></p>
            <div class="separator3"></div>
            <div id="SubMenu">
        		<table id="tableSubMenu">
                    <td><a href="VideoResilience?lang=<?php echo $language;?>"><?php echo element12;?></a></td></tr>
        		</table>
    		</div>   
            
            <div class="row" id="maincontent">
                <div class="textePlus clickOnly expand" id="projet">
                    <a id="info" onClick="expandText()" href="#" title="Expandir">TEXT +<span class="icon"></span></a>
                </div><!-- fin#textePlus -->
            	<div class="text slideToggle" id="projet-over">
                	<h2><?php echo title2;?></h2>
                	<h3><?php echo subtitle2;?></h3>                    
                	<p><?php echo textResiliencia1;?><p>
                	<p><?php echo textResiliencia2;?><p>
                	<p><?php echo textResiliencia3;?><p>
                    <p><?php echo textResiliencia4;?><p>
                	<p><?php echo textResiliencia5;?><p>
        		</div><!-- fin.row -->
    		</div> <!-- /container -->
            
            <div class="flexslider">
              <ul class="slides">
                <li>
                  <img src="Images/Resiliencia/Deconst/1.jpg" />
                </li>
                <li>
                  <img src="Images/Resiliencia/Deconst/2.jpg" />
                </li>
                <li>
                  <img src="Images/Resiliencia/Deconst/3.jpg" />
                </li>
              </ul>
            </div>
 
            <p><img src="Images/Resiliencia/Campaign/1.jpg" alt="Resiliencia 1" border="0" height="auto" width="435"/>
            <img src="Images/Resiliencia/Campaign/2.jpg" alt="Resiliencia 2" border="0" height="auto" width="435" align="right"/></p>
            <p><img src="Images/Resiliencia/Campaign/7.jpg" alt="Resiliencia 3" border="0" height="auto" width="900"/></p>            
            <p><img src="Images/Resiliencia/Campaign/4.JPG" alt="Resiliencia 4" border="0" height="auto" width="435"/>
            <img src="Images/Resiliencia/Campaign/6.jpg" alt="Resiliencia 5" border="0" height="auto" width="435" align="right"/></p>            
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
