<?php  include("admin/include/site_db.php"); ?><!DOCTYPE html>
<html lang="tr">

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
	<title>Gölal Yapı - Hizmetlerimiz</title>
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
	<?php include("ust.php")?>	<main id="main">
			<!-- start of page header -->
			<header class="page-header bg-full overlay overlay-light" style="background-image: url(resimler/golal-yapi-hizmetlerimiz.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h1 class="heading text-uppercase"> <span>Hizmetlerimiz</span></h1>
							<!-- start of breadcrumbs -->
							<ul class="breadcrumbs list-inline">
								<li><a href="index">Anasayfa</a></li>
								<li>Hizmetlerimiz</li>
							</ul><!-- end of breadcrumbs -->
						</div>
					</div>
				</div>
			</header><!-- end of page header -->
			<!-- start of top banner -->
			<div class="top-banner bg-grey2">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="main-heading no-border style2">
								<h2 class="heading text-uppercase">- <span class="clr">Hizmetlerimiz</span></h2>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 text-right">
							<!-- start of social -->
							<ul class="list-inline social text-center">
								<li><a href="<?=$db->ayarlar("value" , "facebook");?>"><i class="fa fa-facebook"></i></a></li>
								<li><a href="<?=$db->ayarlar("value" , "twitter");?>"><i class="fa fa-twitter"></i></a></li>
								<li><a href="<?=$db->ayarlar("value" , "instagram");?>"><i class="fa fa-instagram"></i></a></li>
 							</ul><!-- end of social -->
						</div>
					</div>
				</div>
			</div><!-- end of top banner -->
			<div class="container pad-t-sm">
				<!-- start of services section -->
				<div class="row mar-b-sm">
				<?php
if($db->veriSaydir("hizmetlerimiz", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("hizmetlerimiz", array(), array(), "row", "ASC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
 ?>   
					<div class="col-xs-12 col-sm-6 mar-b-xs">
						<!-- start of post post 9 -->
						<div class="post post9">
							<a href="hizmet-<?=$rows->url;?>.html">
								<div class="img-holder">
									<img src="upload/<?=$rows->resim;?>" alt="Gölal Yapı" class="img-responsive2">
								</div>
								<div class="txt-holder">
									<header class="header text-center">
										<h3 class="text-uppercase"><?=$rows->isim;?></h3>
									</header>
								</div>
							</a>
						</div><!-- end of post post 9 -->
					</div>
				<?php }} ?>
				</div>
			</div>
			<!-- start of partner sec -->
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
	<div id="style-changer" data-src="inc/style-changer.html"></div>
</body>

</html>