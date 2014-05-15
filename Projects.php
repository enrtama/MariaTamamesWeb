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
    <title><?php echo element2;?></title>
	<?php include ("Structure/Head.html");?>
	<link href="CSS/ImageOverlay.css" rel="stylesheet" type="text/css">    
	<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.js"></script>
	
	<script type="text/javascript">
        $(document).ready(function(){
            $('.boxgrid.captionfull').hover(function(){
                $(".cover", this).stop().animate({top:'185px'},{queue:false,duration:0});
            }, function() {
                $(".cover", this).stop().animate({top:'0px'},{queue:false,duration:0});
            });
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
    <!-- fin menu -->
        
    <div id="capaCentro">
        <div id="textLayer">
            <br><br>
            <a href="#"><div class="boxgrid captionfull">
                <img class="cover" src="Images/intromutacion.jpg"/>
                    <h3><?php echo title10;?></h3>
                    <p>Comming Soon</p>
            </div></a>
            <a href="#"><div class="boxgrid captionfull">
                <img class="cover" src="Images/intromoody.jpg"/>
                    <h3><?php echo title11;?></h3>
                    <p>Comming Soon</p>
            </div></a>
            <a href="FeltedThought?lang=<?php echo $language;?>"><div class="boxgrid captionfull">
                <img class="cover" src="Images/GeometriaTextil/intro.jpg"/>
                    <h3><?php echo title7;?></h3>
                    <p><?php echo mainText7;?></p>
            </div></a>
            <a href="CapillarityHumidity?lang=<?php echo $language;?>"><div class="boxgrid captionfull">
                <img class="cover" src="Images/HumanidadCapilaridad/intro.jpg"/>
                    <h3><?php echo title8;?></h3>
                    <p><?php echo mainText8;?></p>
            </div></a>
            <a href="Inert?lang=<?php echo $language;?>"><div class="boxgrid captionfull">
                <img class="cover" src="Images/Inerte/intro.jpg"/>
                    <h3><?php echo title5;?></h3>
                    <p><?php echo mainText5;?></p>
            </div></a> 
            <a href="Mercy?lang=<?php echo $language;?>"><div class="boxgrid captionfull">
                <img class="cover" src="Images/Merced/intro.jpg"/>
                    <h3><?php echo title6;?></h3>
                    <p><?php echo mainText6;?></p>
            </div></a>
            <div class="boxgrid captionfull" style="cursor:pointer;" onClick="javascript:window.open('http://www.pinapardo.com','_blank');">
                <img class="cover" src="Images/PinaPardo/intro.jpg"/>
                    <h3><?php echo title4;?></h3>
                    <p><?php echo mainText4;?></p>
            </div>
            <a href="illustrations?lang=<?php echo $language;?>"><div class="boxgrid captionfull">
                <img class="cover" src="Images/Illustrations/intro.jpg"/>
                    <h3><?php echo title3;?></h3>
                    <p><?php echo mainText3;?></p>
            </div></a>                                                         
            <a href="Orthopaedics?lang=<?php echo $language;?>"><div class="boxgrid captionfull">
                <img class="cover" src="Images/Ortopedias/intro.jpg"/>
                    <h3><?php echo title1;?></h3>
                    <p><?php echo mainText1;?></p>
            </div></a>
            <a href="Resilience?lang=<?php echo $language;?>"><div class="boxgrid captionfull">
                <img class="cover" src="Images/Resiliencia/intro.jpg"/>
                    <h3><?php echo title2;?></h3>
                    <p><?php echo mainText2;?></p>
            </div></a>
            <br><br><br>
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
