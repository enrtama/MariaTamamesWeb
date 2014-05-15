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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js" type="text/javascript" charset="utf-8"></script>
    <script src="Javascript/text.js" type="text/javascript" charset="utf-8"></script> 	
	<?php include ("Structure/Head.html");?>
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
                <td><a href="Projects?lang=<?php echo $language;?>"><?php echo element2;?></a></td>
                <td><span class="space">/</span></td>
                <td id="botonMenuSeleccionado"><a href="CollaborationsWoman?lang=<?php echo $language;?>"><?php echo element5;?></a></td>
                <td><span class="space">/</span></td>
                <td><a target="_blank" href="http://mariatamames.tumblr.com/"><?php echo element4;?></a></td>
        	</tr>
        </table>
        <!--fin lista menu -->
    </div>
    <!-- fin menu -->
        
    <div id="capaCentro">
        <div id="textLayer">
            
            <div class="separator1"></div>
			<p class="projectTitle"><a href="CollaborationsWoman?lang=<?php echo $language;?>"><?php echo title9;?></a></p>
            <p class="subtitle"><?php echo subtitle7;?></p>
            <div class="separator3"></div>
            <div id="SubMenu">
        		<table id="tableSubMenu">
                    <tr><td><a href="CollaborationsWoman?lang=<?php echo $language;?>"><?php echo element17;?></a></td>
                    <td id="botonMenuSeleccionado"><a href="CollaborationsMan?lang=<?php echo $language;?>"><?php echo element18;?></a></td></tr>
        		</table>
    		</div>   
            <div class="row" id="maincontent">
                <div class="textePlus clickOnly expand" id="projet" style="margin:1px 0px 0px 1px;">
                    <a id="info" onClick="expandText()" href="#" title="Expandir">TEXT +<span class="icon"></span></a>
                </div><!-- fin#textePlus -->
            	<div class="text slideToggle" id="projet-over" style="margin-left:1px;width:896px;">
                	<h2><?php echo title9;?></h2>
                	<h3><?php echo subtitle7;?></h3>                    
                	<p><?php echo textColaboracion1;?><p>
                	<p><?php echo textColaboracion3;?><p>
                    <p><a href="http://www.jeanpaulknott.com" target="_blank">>www.jeanpaulknott.com<</a><p>
        		</div><!-- fin.row -->
    		</div> <!-- /container -->             
            <p><img src="Images/Colaboraciones/5.jpg" class="photoframe" alt="Colaboracion 5" border="0" height="auto" width="435"/>
            <img src="Images/Colaboraciones/6.jpg" class="photoframe" alt="Colaboracion 6" border="0" height="auto" width="435" align="right"/></p>
            <p><img src="Images/Colaboraciones/7.jpg" class="photoframe" alt="Colaboracion 7" border="0" height="auto" width="435"/>            
            <img src="Images/Colaboraciones/8.jpg" class="photoframe" alt="Colaboracion 8" border="0" height="auto" width="435" align="right"/></p>
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
