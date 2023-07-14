<?php  include("admin/include/site_db.php"); 

$sayfada = 4;
$toplam_icerik = $db->VeriSaydir("blog");
$toplam_sayfa = ceil($toplam_icerik / $sayfada);
$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
if($sayfa < 1) $sayfa = 1; 
if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 


?><!DOCTYPE html>
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
	<title>Gölal Yapı - Haberler</title>
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
		<!-- start of header -->
	<?php include("ust.php")?><main id="main">
<header style=" background-image: url(resimler/golalyapi-haberler.jpg);   padding: 135px 0 77px;"  class="page-header bg-full overlay overlay-light" >
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h1 class="heading text-uppercase">Haberlerimiz </h1>
							<!-- start of breadcrumbs -->
							<ul class="breadcrumbs list-inline">
								<li><a href="index">Anasayfa</a></li>
								<li>Haberler</li>
							</ul><!-- end of breadcrumbs -->
						</div>
					</div>
				</div>
			</header>
			<div style="    padding-top: 0;"  class="container pad-t-sm">
				<div class="row">
					<div class="col-xs-12 mar-b-sm">
						<!-- start of top filter -->
 						 </div>
				</div>
			</div>
			<div class="container mar-b-xs">
				<div class="row">
					
				 <?php
if($db->veriSaydir("blog", array(), array()) > 0) {
$limit = ($sayfa - 1) * $sayfada;
$bilgi= $db->VeriOkuCoklu("blog", array(), array(), "id", "DESC",$limit .', '. $sayfada);
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
 ?> 

					<div class="col-xs-12 col-sm-6 mar-b-xs">
						<!-- start of post post8 -->
						<div class="post post8 ">
							<div class="img-holder">
								<img src="upload/<?=$rows->resim;?>" alt="Gölal Yapı" class="img-responsive">
							</div>
							<div class="txt-holder">
								<header class="header">
									<h3 class="text-uppercase"><a href="haber-<?=$rows->url;?>.html"><?=$rows->isim;?></a></h3>
									<ul class="list-unstyled post-nav">
										<li><?=$rows->tarih;?></li>
									</ul>
								</header>
							</div>
						</div><!-- end of post post8 -->
					</div>
					<?php }} ?>
					
				 
				 
				 </div>
			<div class="text-center mar-b-md">
				<!-- start of num-pagination -->
				<nav class="num-pagination">
					<ul class="list-inline">
						<?php 
		$sayfa_goster = 4; // gösterilecek sayfa sayısı
		$en_az_orta = ceil($sayfa_goster/2);
		$en_fazla_orta = ($toplam_sayfa+1) - $en_az_orta;
		$sayfa_orta = $sayfa;
		if($sayfa_orta < $en_az_orta) $sayfa_orta = $en_az_orta;
		if($sayfa_orta > $en_fazla_orta) $sayfa_orta = $en_fazla_orta;
		$sol_sayfalar = round($sayfa_orta - (($sayfa_goster-1) / 2));
		$sag_sayfalar = round((($sayfa_goster-1) / 2) + $sayfa_orta); 
		if($sol_sayfalar < 1) $sol_sayfalar = 1;
		if($sag_sayfalar > $toplam_sayfa) $sag_sayfalar = $toplam_sayfa;
 
		if($sayfa != 1) echo '<li><a class="first" href="?sayfa=1"><i class="fa fa-angle-double-left"></i></a></li> ';
		if($sayfa != 1) echo ' <li><a class="last" href="?sayfa='.($sayfa-1).'"><i class="fa fa-angle-left"></i></a></li> ';
 
		for($s = $sol_sayfalar; $s <= $sag_sayfalar; $s++) {
			if($sayfa == $s) {
				echo '<li class="active"><a >' . $s . '</a></li>';
			} else {
			echo '<li><a class="tran3s" href="?sayfa='.$s.'">'.$s.'</a></li>';
			}
		}
 
		if($sayfa != $toplam_sayfa) echo ' <li><a href="?sayfa='.($sayfa+1).'"><i class="fa fa-angle-right"></i></a></li> ';
		if($sayfa != $toplam_sayfa) echo ' <li><a href="?sayfa='.$toplam_sayfa.'"><i class="fa fa-angle-double-right"></i></a></li>';
		?>
					</ul>
				</nav><!-- end of num-pagination -->
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