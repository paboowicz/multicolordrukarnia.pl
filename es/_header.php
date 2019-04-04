<?

$title['index.php'] = "Drukarnia Multicolor";
$title['ctp.php'] = "Studio DTP z naświetlarnią CtP - Drukarnia Multicolor";
$title['oferta.php'] = "Oferta - Drukarnia Multicolor";
$title['kalkulacja.php'] = "Kalkulacja - Drukarnia Multicolor";
$title['logistyka.php'] = "Logistyka - Drukarnia Multicolor";
$title['kontakt.php'] = "Kontakt - Drukarnia Multicolor";

$description['index.php'] = "Oferujemy usługi w zakresie druku offsetowego, cyfrowego a także przetwarzania druku w pełnym zakresie prac introligatorskich jak i projektowania graficznego.";
$description['oferta.php'] = "Świadczymy usługi: druk offsetowy, druk wielkoformatowy, usługi introligatorskie, projektujemy, drukujemy i dostarczamy";
$description['ctp.php'] = "Nasza drukarnia posiada własne studio DTP wraz z naświetlarnią CtP. Operujemy nowoczesnym systemem CtP, dzięki czemu mają Państwo pewność, że wydruki u nas będą zawsze najwyższej jakości.";
$description['kalkulacja.php'] = "Prace wyceniamy indywidualnie poprzez kontakt osobisty, pocztę e-mail lub telefonicznie";
$description['logistyka.php'] = "Gotowe wydruki dostarczamy transportem własnym lub spedycją";
$description['kontakt.php'] = "ZAKŁAD WIELOBRANŻOWY DRUKARNIA MULTICOLOR, 37-500 Jarosław, ul. Chmielna 4, 37-500 Jarosław, ul. Siemieńskiego 18";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title><?=$title[basename($_SERVER['SCRIPT_FILENAME'])]?></title>
	
	<meta name="description" content="<?=$description[basename($_SERVER['SCRIPT_FILENAME'])]?>" >
	
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link rel="stylesheet" type="text/css" href="../css/layout.css" />
	<link rel="stylesheet" type="text/css" href="../css/magnific-popup.css" />
	<link rel="stylesheet" type="text/css" href="../css/jquery.bxslider.css" />
	
	
	<script type="text/javascript">var baseUrl = '';</script>
	<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="../js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="../js/jquery.bxslider.js"></script>
	
	
	
	<script type="text/javascript" src="../js/frontend.js"></script>
 	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'/>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'/>
</head>
<body>
	<div class="lan" >
		<a href="http://www.multicolordrukarnia.pl"><img src="../image/pl_50.png" /></a>
	</div>
	<div class="header">		
		<div class="wrapper">
			<div class="panL">
				<div class="logo"><a href="" title=""><img src="../image/logo.png" alt="" /></a></div>
				<div class="menu">
					<ul>
						<li><a href="">druk ekologiczny</a></li>
						<li><a href="">ftp</a></li>
						<li><a href="">parametry techniczne</a></li>
						<li><a href="">warunki współpracy</a></li>
					</ul>
				</div>
			</div>
			<div class="panR"><img src="../image/header.jpg" alt=""/></div>
			<div class="clear"></div>
		</div>
	</div>
	
	
	
	<div class="main">
		<div class="wrapper">
		<div class="mainMenu">
			<div class="panL"></div>
			<div class="panR">
			<ul>
				<li <?if(basename($_SERVER['SCRIPT_FILENAME'])=="index.php"):?>class="active"<?endif;?>><a href="index.php">INICIO</a></li>
				<li <?if(basename($_SERVER['SCRIPT_FILENAME'])=="oferta.php"):?>class="active"<?endif;?>><a href="oferta.php">OFERTA </a></li>
				<li <?if(basename($_SERVER['SCRIPT_FILENAME'])=="ctp.php"):?>class="active"<?endif;?>><a href="ctp.php">CTP</a></li>
				<li <?if(basename($_SERVER['SCRIPT_FILENAME'])=="kalkulacja.php"):?>class="active"<?endif;?>><a href="kalkulacja.php">Precios </a></li>
				<!--<li <?if(basename($_SERVER['SCRIPT_FILENAME'])=="przetargi.php"):?>class="active"<?endif;?>><a href="przetargi.php">Przetargi</a></li> -->
				<li <?if(basename($_SERVER['SCRIPT_FILENAME'])=="kontakt.php"):?>class="active"<?endif;?>><a href="kontakt.php">Contacto </a></li>
			</ul>
			</div>
			<div class="clear"></div>
		</div>
		</div>
		
		<div class="wrapper">
			<div class="mainContent customContent">
				<div class="banners">
					<? for($i=0; $i<2; $i++):?><div class="item"><img width="300" src="../image/banner/data_<?=$i+1?>.jpg" alt="banner" /></div><? endfor;?>
				</div>
				
				