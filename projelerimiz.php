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
	<meta name="description" content="Gölal Yapı - İstanbul Dekorasyon, İtalyan Boya">
	<meta name="keywords" content=" İstanbul Dekorasyon, İtalyan Boya">
	<meta name="author" content="Memsidea">
	<!-- Page Title -->
	<title>Gölal Yapı - Projelerimiz</title>
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
		
		<main id="main">
			<!-- start of page header -->
					<header style=" background-image: url(resimler/golalyapi-projelerimiz.jpg);   padding: 135px 0 77px;"  class="page-header bg-full overlay overlay-light" >
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h1 class="heading text-uppercase">Projelerimiz</h1>
							<!-- start of breadcrumbs -->
							<ul class="breadcrumbs list-inline">
								<li><a href="index">Anasayfa</a></li>
								<li>Projeler</li>
							</ul><!-- end of breadcrumbs -->
						</div>
					</div>
				</div>
			</header><!-- end of page header -->

<div class="container pad-t-sm">
				<div class="row">
					<div class="col-xs-12 mar-b-sm">
						<!-- start of isotop filters -->
						<ul class="list-inline isoto-filter text-center">
							<li class="active"><a href="#">Hepsi</a></li>
							<?php
if($db->veriSaydir("projeler_category", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("projeler_category", array(), array(), "row", "ASC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
 ?>   
							<li><a href="#" data-filter=".<?=$rows->id;?>"><?=$rows->isim;?></a></li>
<?php }} ?>
						</ul><!-- end of isotop filters -->
					</div>
				</div>
			</div>
			<div id="isotop-holder" class="mar-b-md">
				<!-- start of item -->
				<?php
if($db->veriSaydir("projeler_items", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("projeler_items", array(), array(), "row", "ASC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
 ?>   
				<div class="item bg-dark col4 <?=$rows->cat_id;?>">
					<img onerror='this.style.display="none"' src="upload/<?=$rows->resim1;?>" alt="Gölal Yapı" class="img-responsive2 img">
					<a href="proje-<?=$rows->url;?>.html" class="zoom"><span class="icon-search"></span></a>
					<div class="over text-center">
						<h4 class="text-uppercase"><?=$rows->urunbaslik;?></h4>
						<span class="txt"><?=$db->VeriOkuTek("projeler_category", "isim", "id", $rows->cat_id);?></span>
					</div>
				</div><!-- end of item -->
			<?php }} ?>
			</div> 
			<!-- start of subscribe holder -->
			 
		</main>
 		 
		 
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