<?php  include("admin/include/site_db.php"); ?>
<!DOCTYPE html>
<html lang="tr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
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
	<meta name="description" content="<?=$db->ayarlar("value" , "description");?>">
	<meta name="keywords" content=" <?=$db->ayarlar("value" , "keywords");?>">
	<meta name="author" content="Gölal Yapı">
	<!-- Page Title -->
	<title>Gölal Yapı - Anasayfa</title>
	<!-- include the site stylesheet -->
	<link href="https://fonts.googleapis.com/css?family=Exo+2:300,400,500,600,700,800,900" rel="stylesheet">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/icon-fonts.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/plugins.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="style.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/colors.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body>
	<!-- main container of all the page elements -->
	<div id="wrapper">

	
	
	<?php include("ust.php")?>
		
		<section class="mt-mainslider color-white">
			<!-- start of sliderfade-ar -->
			<div class="sliderfade-ar arrow-zradius">
				<!-- slide -->
				<?php
if($db->veriSaydir("slayt", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("slayt", array(), array(), "row", "DESC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
 ?>   
				<div class="bg-full slide" style="background-image: url('upload/<?=$rows->resim;?>');">
					<span class="slider-overlay"></span>
					<div class="caption text-center">
						<h1 class="heading text-uppercase color-white"><?=$rows->baslik1;?> </h1>
						<span class="title text-uppercase"><?=$rows->baslik2;?></span>
						<p><?=$rows->aciklama;?></p>
						<a href="<?=$rows->buton_link;?>" class="post-btn white text-uppercase"><?=$rows->buton_isim;?><i class="icon-right-arrow pull-right"></i></a>
					</div>
				</div>
				<?php }} ?>
				<!-- slide -->
			</div><!-- end of sliderfade-ar -->
			<a href="#" class="icon-right-arrow rotate arrow-bottom" data-scroll-nav="0"></a>
		</section><!-- end of mt-mainslider -->



<main id="main">
			<!-- start of aboutus-sec -->
			<section class="aboutus-sec bg-grey3 pad-t-md pad-b-md" data-scroll-index="0">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 mar-b-xs">
							<header class="main-heading mar-b-xs">
								<h2 class="heading text-uppercase">Gölal <span class="clr">Yapı</span></h2>
							</header>
							<p><?=substr($db->VeriOkuTek("kurumsal", "aciklama", "isim", "Hakkımızda"),0,580);?>...</p>
							<a href="kurumsal-hakkimizda.html" class="post-btn">Hakkımızda<span class="icon-right-arrow"></span></a>
							<span class="title"><span class="txt">G</span>OLAL</span>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="slider-ar slider noround">
							<?php
if($db->veriSaydir("galeri", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("galeri", array(), array(), "id", "DESC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
 ?>   
								<div class="slide">
									<img onerror='this.style.display="none"' src="upload/<?=$rows->image;?>" alt="Gölal Yapı" class="img-responsive">
								</div>
								<?php }} ?>
							</div>
						</div>
					</div>
				</div>
			</section><!-- end of aboutus-sec -->
			<div class="container pad-t-md">
				<div class="row">
					<div class="col-xs-12 col-md-5 mar-b-xs">
						<header class="main-heading style2">
							<h2 style="    font-size: 36px;"  class="heading text-uppercase">Son<span class="clr"> Projelerimiz</span></h2>
						</header>
					</div>
					<!-- start of isotop filters -->
					<div class="col-xs-12 col-md-7 mar-b-sm">
						<ul class="list-inline isoto-filter text-right">
							<li class="active"><a href="#">Hepsi</a></li>
							<?php
if($db->veriSaydir("projeler_category", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("projeler_category", array(), array(), "id", "DESC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
 ?>   
							<li><a href="#" data-filter=".<?=$rows->id;?>"><?=$rows->isim;?></a></li>
<?php }} ?>
						</ul>
					</div><!-- end of isotop filters -->
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div id="isotop-holder2" class="mar-b-xs">
					<?php
if($db->veriSaydir("projeler_items", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("projeler_items", array(), array(), "id", "DESC",16);
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
 ?>   
				<div class="item style5 col4 mar-b-xs <?=$rows->cat_id;?>">
							<div class="col-xs-12">
							<div class="bg-dark">
								<img onerror='this.style.display="none"' onerror='this.style.display="none"' src="upload/<?=$rows->resim1;?>" alt="Gölal Yapı" class="img-responsive2 img">
								<a  style="     line-height: 63px;
    width: 60px;
    height: 60px;
    font-size: 30px;
" href="proje-<?=$rows->url;?>.html" class="zoom round"><span class="icon-search"></span></a>
								<div class="over text-center">
									<h4 style="    font-size: 16px;"  class="text-uppercase"><?=$rows->urunbaslik;?></h4>
								</div>
							</div>
							</div>
						</div><!-- end of item -->
						<?php }} ?>
						</div>
				</div>
			</div>
			<!-- start of what-sec -->
			<section class="what-sec bg-grey3">
				<div class="container pad-t-sm pad-b-md">
					<div class="row">
						<div class="col-xs-12">
							<header class="main-heading style2 mar-b-sm">
								<h2 class="heading text-uppercase">Son <span class="clr">Haberler</span></h2>
							</header>
						</div>
					</div>
					<div class="row">
						<!-- start of wedo-slider -->
						<div class="wedo-slider">
<?php
if($db->veriSaydir("blog", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("blog", array(), array(), "id", "DESC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
 ?>   
							<div class="col-xs-12 col-sm-4 slide">
								<!-- start of post post3 -->
								<div class="post post3">
									<div class="img-holder">
										<a href="haber-<?=$rows->url;?>.html"><img onerror='this.style.display="none"' onerror='this.style.display="none"' src="upload/<?=$rows->resim;?>" alt="Gölal Yapı" class="img-responsive"></a>
									</div>
									<div class="txt-holder">
										<header class="header">
											<time datetime="<?=$rows->tarih;?>" class="time pull-left"><?=$rows->tarih;?></time>
											<span class="author-by pull-right">Gölal Yapı - <a >Haberler</a></span>
										</header>
										<h3><a href="haber-<?=$rows->url;?>.html"><?=$rows->isim;?></a></h3>
									</div>
								</div><!-- end of post post3 -->
							</div>
							<?php }} ?>
							</div><!-- end of wedo-slider -->
					</div>
				</div>
			</section><!-- end of what-sec -->
			<!-- start of test-sec -->
			<section class="pad-t-md test-sec mar-b-md">
				<div class="container">
					<div class="row mar-b-sm">
						<div class="col-xs-12">
							<header class="main-heading style2">
								<h2 class="heading text-uppercase">Hakkımızda <span class="clr">Ne Denildi?</span></h2>
							</header>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<!-- start of test-slider -->
							<div class="test-slider">
							
								<!-- slide -->
								<?php
if($db->veriSaydir("nedenildi", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("nedenildi", array(), array(), "row", "ASC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
 ?>   
								<div class="bg-grey text-center slide">
									<div class="img-holder round">
										<img onerror='this.style.display="none"' onerror='this.style.display="none"' src="upload/<?=$rows->resim;?>" alt="Gölal Yapı" class="img-responsive">
									</div>
									<span class="title"><?=$rows->ad;?></span>
									<span class="sub-title"><?=$rows->sirket;?></span>
									<p><?=$rows->aciklama;?></p>
								</div>
								<?php }} ?>
								<!-- slide -->
				
				</div><!-- end of test-slider -->
						</div>
					</div>
				</div>
			</section><!-- end of test-sec -->
			<!-- start of partner-sec -->
			<!-- start of subscribe holder -->
			 
		</main>
		<!-- start footer of the page -->
	
	<?php include("alt.php")?>
	
	
	</div>
	<!-- include jQuery -->
	<script src="js/jquery.js" defer></script>
	<!-- include plugins jQuery -->
	<script src="js/plugins.js" defer></script>
	<!-- include jQuery main -->
	<script src="js/jquery.main.js" defer></script>
	<div id="style-changer" data-src="inc/style-changer.html"></div>
</body>

</html>