<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php 
if(defined('DEFAULT_CHARSET')) { echo DEFAULT_CHARSET; } else 

{ echo 'utf-8'; }?>" /> 
<link rel="stylesheet" type="text/css" media="screen,projection,print" href="<?php  echo TEMPLATE_DIR; ?>/screen.css" />
<link rel="shortcut icon" href="../media/recursos/favicon.ico" type="image/x-icon"/>
<meta name="robots" content="index, follow" />
<meta name="lang" content="es" />
<meta name="locality" content="Guatemala, Guatemala" />
<link rel="shortcut icon" href="../../media/favicon.ico" type="image/x-icon" />
<meta name="description" content="<?php  page_description(); ?>" />
<meta name="keywords" content="<?php  page_keywords(); ?>" />
<title><?php page_title(' - ', '[WEBSITE_TITLE][SPACER][PAGE_TITLE]'); ?></title>
<meta name="google-site-verification" content="PDKK_cuiLErgL5AD2mHkDCuzZMlKWBrc-Qmr5toj8pU" />

<script type="text/javascript">


var winName = "titulo"

function Abrir_Ventana(theURL,w,h) {

var windowprops ="top=0,left=0,toolbar=no,location=no,status=no, menubar=no,scrollbars=no, resizable=no,width=" + w + ",height=" + h; 

window.open(theURL,winName,windowprops);

} 





</script>



<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>

<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-15458646-1");
pageTracker._trackPageview();
} catch(err) {}
</script>

<script language="javascript" type="text/javascript" src="http://us3.listen2myradio.com:2199/system/streaminfo.js"></script>



</head>


<body>

<div id="div-01">
	<div id="cab1">
    
    <a href="<?php echo WB_URL; ?>/" id="logo"><img src="<?php echo WB_URL; ?>/media/recursos/logomt.jpg" width="291" height="158" /></a>
    
    <div id="cuadro-menu-players">
	<div id="cuadro-players">
    	<div id="titulo-escuchanos"><?php section_ID(35); ?></div>
    	<div id="players"><?php section_ID(6); ?></div>
    </div>
	<!-- CUADRO DONDE ESTA EN EL MENU -->    
        <div id="paraMenu">
            <div id="cuadro-menu">
                <div id="navimain">
                <?php show_menu2(1, SM2_ROOT, SM2_ALL, SM2_ALL,false,"\n</li>",false, false, false, '<ul id="header_menu" class="menu"><li>'); ?>
                </div>
            </div>         
        </div>
	<!-- FINALIZA DONDE ESTA EN EL MENU -->        
    </div>
    
    </div>	

</div>





<div id="mt01">


<div id = "cuadro-problemas">
<?php section_ID(42); ?>
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f303da0095a16d3"></script>
<!-- AddThis Button END -->
</div>

    <div id="cuadro-flash-vivo">

    	<div id="cuadro100"><?php  section_ID(13); ?></div> 

        <div id="slide-flash">		
		[[jQueryInclude?preset=coin-slider]]
		
		<div id="coin-slider"> 
		<a href="http://www.metanoiaradio.com" target="_blank"> <img src="<?php echo WB_URL; ?>/media/images/simple_img_1.jpg" alt="" /> </a> 
		<a href="http://www.metanoiaradio.com"  target="_blank"> <img src="<?php echo WB_URL; ?>/media/images/simple_img_2.jpg" alt="" /> </a> 
		<a href="http://www.metanoiaradio.com"  target="_blank"> <img src="<?php echo WB_URL; ?>/media/images/simple_img_3.jpg" alt="" /> </a> 
		</div>
        </div>

    </div>

</div>







<div id="mt02">

	<div id="con-up"></div>
    
    <div id="cuadro-contenido">
    <div id="contenido"> <?php  page_content(); ?>

    </div>
    <div style="clear:both;"></div>         	
    </div>    
    

	<div id="contenido-mt">



    	<div id="div-somos"><?php section_ID(8); ?></div>

    	<div id="div-multimedia">

			<?php section_ID(9); ?>

			<div id="div-linea"></div>

			<?php section_ID(10); ?>                          

        </div>

        <div id="div-interes">

            <div class="cuadro-buscador-menu">
        <div id="divBuscador">
                <div id="buscar1">
                <?php if(SHOW_SEARCH) { ?>
                <form action="<?php echo WB_URL.'/search/index'.PAGE_EXTENSION; ?>" method="post">
                <input class="cerca" value="Buscar:" onfocus="if (this.value == 'Buscar:') this.value = '';" onblur="if (this.value == '') this.value = 'Buscar:';" type="text" name="string" />
                <input class="buttonsearch" name="Cerca2" type="submit"  id="Cerca2" value="<?php if(isset($TEXT['SUBMIT'])) { echo $TEXT['SEARCH'];} else { echo ''; } ?>" />
                </form>
                <?php } ?>
                </div> 
         </div>         
        
        
            </div>	<!-- FINALIZA BUSCADOR -->        
        
			<div id="twitter-wid"><?php section_ID(34); ?></div>

         </div>

		<div style="clear:both;"></div>                        

    </div>

    <div id="con-abajo"></div>

</div>



<!-- Inicia pie -->





<div id="pre_todo">

	<div id="div-pie">

    	<div id="div-red">

        	<h1>Siguenos</h1>

            <a id="red1" href="http://twitter.com/MetanoiaRadio"><img src="../media/recursos/img-tw.jpg" /></a>

            <a id="red1" href="http://www.facebook.com/pages/Metanoia-Radio/111121272252959"><img src="../media/recursos/img-fb.jpg" /></a>

         </div>

    	<div id="div-reserva">

	<p>MetanoiaRadio.com 2011&nbsp;|&nbsp;Derechos Reservados</p>

	<p>Creado por: <a href="http://www.orlandoreynoso.com">www.orlandoreynoso.com</a></p>

        </div>        

    

    </div>



</div>



<!-- Finaliza Pie -->



[[jQueryInclude?preset=scrolltotop]]

<a id="toTop" href="#">^ Ir al principio </a>



</body>

<script language="javascript" type="text/javascript" src="http://premiumca1.listen2myradio.com/system/streaminfo.js"></script>
<script language="javascript" type="text/javascript" src="http://premiumca1.listen2myradio.com/js.php/metanoia/streaminfo/rnd0"></script>

</html>

