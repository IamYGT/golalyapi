<?php  include("admin/include/site_db.php"); ?>
<!DOCTYPE html>
<html lang="tr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the apple mobile web app capable -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<!-- set the HandheldFriendly -->
	<meta name="HandheldFriendly" content="True">
	<!-- set the apple mobile web app status bar style -->
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<!-- set the description -->
	<meta name="description" content="Gölal Yapı - Architecture, Construction Building Company">
	<meta name="keywords" content=" architect, architecture, building, contractor, creative, desginer, engineer, estate, home, house, minimal, multi purpose, portfolio, property, real estate ">
	<meta name="author" content="Gölal Yapı - Architecture, Construction Building Company">
	<!-- Page Title -->
	<title>Gölal Yapı - İletişim</title>
	<!-- include the site stylesheet -->
	<link href="https://fonts.googleapis.com/css?family=Exo+2:300,400,500,600,700,800,900" rel="stylesheet">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css\bootstrap.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css\icon-fonts.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css\plugins.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="style.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css\colors.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css\responsive.css">
</head>
<body>
	<!-- main container of all the page elements -->
	<div id="wrapper">
	<?php include("ust.php")?>
<!-- end of search popup -->		
<main id="main">
			<header style=" background-image: url(resimler/iletisim-golal.jpg);   padding: 135px 0 77px;"  class="page-header bg-full overlay overlay-light" >
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h1 class="heading text-uppercase"><span>İletişim Formu</span></h1>
							<!-- start of breadcrumbs -->
							<ul class="breadcrumbs list-inline">
								<li><a href="index">Anasayfa</a></li>
								<li>İletişim</li>
							</ul><!-- end of breadcrumbs -->
						</div>
					</div>
				</div>
			</header>
			<!-- start of contact-sec style2 -->
			<section class="contact-sec style2 container pad-t-md">
				<div class="row">
					<div class="col-xs-12">
						<h2 class="title">İletişim Detayları</h2>
						<p>Bu formu kullanarak bizimle iletişime geçebilirsiniz.</p>
					</div>
				</div>
				<div class="row pad-t-sm pad-b-xs">
					<div class="col-xs-12 col-sm-4 text-center mar-b-xs">
						<div class="blog-post style2 active">
							<span class="icon"><img src="images\svg\map.svg" alt="map"></span>
							<h3 class="text-capitalize">Adres</h3>
							<address><?=$db->ayarlar("value" , "adres");?></address>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 text-center mar-b-xs">
						<div class="blog-post style2 active">
							<span class="icon"><img src="images\svg\mobile.svg" alt="map"></span>
							<h3 class="text-capitalize">Bizi Arayın!</h3>
							<a href="tel: <?=$db->ayarlar("value" , "tel");?>"> <?=$db->ayarlar("value" , "tel");?>  </a><br>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 text-center mar-b-xs">
						<div class="blog-post style2 active">
							<span class="icon"><img src="images\svg\envelope.svg" alt="map"></span>
							<h3 class="text-capitalize">E-Mail Adresimiz</h3>
							<a href="mailto:<?=$db->ayarlar("value" , "mail");?>"><?=$db->ayarlar("value" , "mail");?></a>
						</div>
					</div>
				</div>
			</section><!-- end of contact-sec style2 -->
			<!-- start of contact-sec -->
			<section class="contact-sec container mar-b-md">
				<div class="row">
					<div class="col-xs-12">
						<h4 class="text-uppercase">İletişim Formu</h4>
						<form method="POST" action="mail.php"  method="post" class="contact-form form2">
							<fieldset>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Adınız">
								</div>
								<div class="form-group col">
									<input type="text" class="form-control" placeholder="Konu">
								</div>
								<div class="form-group email">
									<input type="email" id="email" class="form-control" placeholder="E-Mail Adresiniz">
								</div>
								<textarea placeholder="Mesajınız"></textarea>
								<button type="submit" class="btn btn2">Gönder <i class="icon-right-arrow"></i></button>
							</fieldset>
						</form>
					</div>
				</div>
			</section><!-- end of contact-sec -->
			<!-- start of map-holder -->
			<div class="map-holder mar-zero"> 
				<div class="map" data-lat="41.022618" data-lng="28.663863" data-zoom="16">
					<div class="map-info">
            			<h2>Gölal Yapı</h2>
            			<p>Yeşil Kent Mah. 1866. Sokak . No: 11/ A  Esenyurt - İSTANBUL</p>
        			</div>
        		</div>
 <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyAvQc498taVViH-tTcAEQwzws-9dRzjiLg&sensor=false"></script>

 </div><!-- end of map-holder -->
			<!-- start of subscribe holder -->
			<!-- end of subscribe holder -->
		</main>
		<!-- start footer of the page -->
		 

<?php include("alt.php")?>

	</div>
	<!-- include jQuery -->
	<script src="js\jquery.js" defer=""></script>
	<!-- include plugins jQuery -->
	<script src="js\plugins.js" defer=""></script>
	<!-- include jQuery main -->
	<script src="js\jquery.main.js" defer=""></script>
	 
</body>

</html>