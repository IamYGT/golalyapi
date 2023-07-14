<?php  include("admin/include/site_db.php"); ?><!DOCTYPE html>
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
	<meta name="description" content="<?=$db->VeriOkuTek("kurumsal", "description", "url", $_GET["url"]);?>">
	<meta name="keywords" content="<?=$db->VeriOkuTek("kurumsal", "keywords", "url", $_GET["url"]);?>">
	<meta name="author" content="Memsidea">
	<!-- Page Title -->
	<title>Gölal Yapı - <?=$db->VeriOkuTek("kurumsal", "isim", "url", $_GET["url"]);?></title>
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
	 

<?php include("ust.php")?><!-- end of search popup -->		<main id="main">
			<!-- start of page header -->
			<header style=" background-image: url(upload/<?=$db->VeriOkuTek("kurumsal", "resim", "url", $_GET["url"]);?>);   padding: 135px 0 77px;"  class="page-header bg-full overlay overlay-light" >
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h1 class="heading text-uppercase"><?=$db->VeriOkuTek("kurumsal", "isim", "url", $_GET["url"]);?></h1>
							<!-- start of breadcrumbs -->
							<ul class="breadcrumbs list-inline">
								<li><a href="index">Anasayfa</a></li>
								<li><a>Kurumsal</a></li>
								<li><?=$db->VeriOkuTek("kurumsal", "isim", "url", $_GET["url"]);?></li>
							</ul><!-- end of breadcrumbs -->
						</div>
					</div>
				</div>
			</header>
			<!-- start of aboutus-sec -->
			<section class="aboutus-sec inner pad-t-md pad-b-xs">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-9">
							<div class="row">
								<div class="col-xs-12">
									<header class="main-heading no-border style2 mar-b-sm">
										<h2 class="heading text-uppercase"><?=$db->VeriOkuTek("kurumsal", "isim", "url", $_GET["url"]);?></h2>
									</header>
								</div>
							</div>
							<div class="hold">			
								<p><?=$db->VeriOkuTek("kurumsal", "aciklama", "url", $_GET["url"]);?></p>
						</div>
							 
						
							</div>
						<aside class="col-xs-12 col-sm-4 col-md-3">
							<!-- start of widget widget-categories -->
							<div class="widget widget-categories">
								<ul class="list-unstyled categories-list style2">
									
									<?php
if($db->veriSaydir("kurumsal", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("kurumsal", array(), array(), "id", "DESC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
	if($rows->url==$_GET["url"]) {
		echo'<li class="active"><a ><span class="txt">'.$rows->isim.'<i class="fa fa-angle-right"></i> </span></a></li>';
	}
	else{
	echo'<li><a href="kurumsal-'.$rows->url.'.html"><span class="txt">'.$rows->isim.' <i class="fa fa-angle-right"></i> </span></a></li>';
}
}} ?>
									
								</ul>
							</div><!-- end of widget widget-categories -->
							<!-- widget -->
							
							
							
							 
						
								
						
						
						
						
						</aside>
					</div>
				</div>
			</section><!-- end of aboutus-sec -->
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