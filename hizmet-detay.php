<?php  include("admin/include/site_db.php");?><!DOCTYPE html>
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
	<meta name="description" content="<?=$db->VeriOkuTek("hizmetlerimiz", "description", "url", $_GET["url"]);?>">
	<meta name="keywords" content="<?=$db->VeriOkuTek("hizmetlerimiz", "keywords", "url", $_GET["url"]);?>">
	<meta name="author" content="Gölal Yapı">
	<!-- Page Title -->
	<title>Gölal Yapı - Hizmet Detay</title>
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
<?php include("ust.php")?>		<main id="main">
			<!-- start of page header -->
			<header style=" background-image: url(resimler/golalyapi-kurumsal.jpg);   padding: 135px 0 77px;"  class="page-header bg-full overlay overlay-light" >
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h1 class="heading text-uppercase"><?=$db->VeriOkuTek("hizmetlerimiz", "isim", "url", $_GET["url"]);?></h1>
							<!-- start of breadcrumbs -->
							<ul class="breadcrumbs list-inline">
								<li><a href="index">Anasayfa</a></li>
								<li><a href="hizmetlerimiz">Hizmetlerimiz</a></li>
								<li><?=$db->VeriOkuTek("hizmetlerimiz", "isim", "url", $_GET["url"]);?></li>
							</ul><!-- end of breadcrumbs -->
						</div>
					</div>
				</div>
			</header>
			<div class="container pad-t-md">
				<div class="row">
					<div class="col-xs-12 col-md-9">
						<!-- start of post post5 post6 detail -->
						<div class="post post5 post6 detail">
							<header class="header">
								<h3><?=$db->VeriOkuTek("hizmetlerimiz", "isim", "url", $_GET["url"]);?></h3>
								<ul class="list-unstyled post-nav">
 								</ul>
							</header>
							<div class="img-holder">
								<img src="upload/<?=$db->VeriOkuTek("hizmetlerimiz", "resim", "url", $_GET["url"]);?>" alt="Gölal Yapı" class="img-responsive">
							</div>
							<div class="post-info">
								<p><?=$db->VeriOkuTek("hizmetlerimiz", "aciklama", "url", $_GET["url"]);?><p>
								</div>
							 </div><!-- start of post post5 post6 detail --><br>
						<!-- start of comment-section -->
					 </div>
					 <br><br><br>
					<aside class="col-xs-12 col-md-3">
					 
						<!-- widget widget-categories -->
						<section class="widget widget-categories">
							<h3 class="text-uppercase">Diğer Hizmetlerimiz</h3>
							<ul class="list-unstyled categories-list">
							<?php
if($db->veriSaydir("hizmetlerimiz", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("hizmetlerimiz", array(), array(), "id", "desc",10);
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
 ?>   
 								<li><a href="hizmet-<?=$rows->url;?>.html"><span class="txt"><?=$rows->isim;?></span></a></li>
								<?php }} ?>
							</ul>
						</section>
					 
					</aside>
				</div>
			</div>
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