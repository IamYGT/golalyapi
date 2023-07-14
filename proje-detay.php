<?php  include("admin/include/site_db.php"); 
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
	<meta name="description" content="<?=$db->VeriOkuTek("projeler_items", "description", "url", $_GET["url"]);?>">
	<meta name="keywords" content="<?=$db->VeriOkuTek("projeler_items", "keywords", "url", $_GET["url"]);?>">
	<meta name="author" content="Memsidea">
	<!-- Page Title -->
	<title>Gölal Yapı - <?=$db->VeriOkuTek("projeler_items", "urunbaslik", "url", $_GET["url"]);?></title>
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



<!-- end of search popup -->		<main id="main">
<header style=" background-image: url(upload/<?=$db->VeriOkuTek("projeler_items", "resim1", "url", $_GET["url"]);?>);   padding: 135px 0 77px;"  class="page-header bg-full overlay overlay-light" >
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h1 class="heading text-uppercase"><?=$db->VeriOkuTek("projeler_items", "urunbaslik", "url", $_GET["url"]);?></h1>
							<!-- start of breadcrumbs -->
							<ul class="breadcrumbs list-inline">
								<li><a href="index">Anasayfa</a></li>
								<li><a href="projelerimiz">Projelerimiz</a></li>
								<li><?=$db->VeriOkuTek("projeler_items", "urunbaslik", "url", $_GET["url"]);?></li>
							</ul><!-- end of breadcrumbs -->
						</div>
					</div>
				</div>
			</header><!-- end of page header --><!-- end of page header -->
			<!-- start of project detail -->
			<div class="container project-detail pad-t-sm mar-b-sm">
					<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-7">
						<div class="p-detail-for mar-b-xs">
								
<div class="slide">
<a href="upload/<?=$db->VeriOkuTek("projeler_items", "resim1", "url", $_GET["url"]);?>" rel="gallery1" class="lightbox zoom bg-dark"><span class="icon-search"></span></a>
<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim1", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
</div>							
<div class="slide">
<a href="upload/<?=$db->VeriOkuTek("projeler_items", "resim2", "url", $_GET["url"]);?>" rel="gallery1" class="lightbox zoom bg-dark"><span class="icon-search"></span></a>
<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim2", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
</div>							
<div class="slide">
<a href="upload/<?=$db->VeriOkuTek("projeler_items", "resim3", "url", $_GET["url"]);?>" rel="gallery1" class="lightbox zoom bg-dark"><span class="icon-search"></span></a>
<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim3", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
</div>							
<div class="slide">
<a href="upload/<?=$db->VeriOkuTek("projeler_items", "resim4", "url", $_GET["url"]);?>" rel="gallery1" class="lightbox zoom bg-dark"><span class="icon-search"></span></a>
<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim4", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
</div>							
<div class="slide">
<a href="upload/<?=$db->VeriOkuTek("projeler_items", "resim5", "url", $_GET["url"]);?>" rel="gallery1" class="lightbox zoom bg-dark"><span class="icon-search"></span></a>
<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim6", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
</div>							
<div class="slide">
<a href="upload/<?=$db->VeriOkuTek("projeler_items", "resim7", "url", $_GET["url"]);?>" rel="gallery1" class="lightbox zoom bg-dark"><span class="icon-search"></span></a>
<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim7", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
</div>							
<div class="slide">
<a href="upload/<?=$db->VeriOkuTek("projeler_items", "resim8", "url", $_GET["url"]);?>" rel="gallery1" class="lightbox zoom bg-dark"><span class="icon-search"></span></a>
<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim8", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
</div>							
<div class="slide">
<a href="upload/<?=$db->VeriOkuTek("projeler_items", "resim9", "url", $_GET["url"]);?>" rel="gallery1" class="lightbox zoom bg-dark"><span class="icon-search"></span></a>
<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim9", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
</div>							
<div class="slide">
<a href="upload/<?=$db->VeriOkuTek("projeler_items", "resim10", "url", $_GET["url"]);?>" rel="gallery1" class="lightbox zoom bg-dark"><span class="icon-search"></span></a>
<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim10", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
</div>							
<div class="slide">
<a href="upload/<?=$db->VeriOkuTek("projeler_items", "resim11", "url", $_GET["url"]);?>" rel="gallery1" class="lightbox zoom bg-dark"><span class="icon-search"></span></a>
<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim11", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
</div>							
<div class="slide">
<a href="upload/<?=$db->VeriOkuTek("projeler_items", "resim12", "url", $_GET["url"]);?>" rel="gallery1" class="lightbox zoom bg-dark"><span class="icon-search"></span></a>
<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim12", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
</div>							
<div class="slide">
<a href="upload/<?=$db->VeriOkuTek("projeler_items", "resim13", "url", $_GET["url"]);?>" rel="gallery1" class="lightbox zoom bg-dark"><span class="icon-search"></span></a>
<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim13", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
</div>							
<div class="slide">
<a href="upload/<?=$db->VeriOkuTek("projeler_items", "resim14", "url", $_GET["url"]);?>" rel="gallery1" class="lightbox zoom bg-dark"><span class="icon-search"></span></a>
<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim14", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
</div>						
<div class="slide">
<a href="upload/<?=$db->VeriOkuTek("projeler_items", "resim15", "url", $_GET["url"]);?>" rel="gallery1" class="lightbox zoom bg-dark"><span class="icon-search"></span></a>
<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim15", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
</div>						
<div class="slide">
<a href="upload/<?=$db->VeriOkuTek("projeler_items", "resim16", "url", $_GET["url"]);?>" rel="gallery1" class="lightbox zoom bg-dark"><span class="icon-search"></span></a>
<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim16", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
</div>						
<div class="slide">
<a href="upload/<?=$db->VeriOkuTek("projeler_items", "resim17", "url", $_GET["url"]);?>" rel="gallery1" class="lightbox zoom bg-dark"><span class="icon-search"></span></a>
<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim17", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
</div>						
<div class="slide">
<a href="upload/<?=$db->VeriOkuTek("projeler_items", "resim18", "url", $_GET["url"]);?>" rel="gallery1" class="lightbox zoom bg-dark"><span class="icon-search"></span></a>
<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim18", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
</div>
						 

						</div>
			 			<div class="p-slider-nav">
 
							<div class="slide">
								<div class="bg-dark">
									<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim1", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
 								</div>
							</div>
							
							<div class="slide">
								<div class="bg-dark">
									<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim2", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
 								</div>
							</div>
							
							<div class="slide">
								<div class="bg-dark">
									<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim3", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
 								</div>
							</div>
							
							<div class="slide">
								<div class="bg-dark">
									<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim4", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
 								</div>
							</div>
							
							<div class="slide">
								<div class="bg-dark">
									<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim5", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
 								</div>
							</div>
							
							<div class="slide">
								<div class="bg-dark">
									<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim6", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
 								</div>
							</div>
							
							<div class="slide">
								<div class="bg-dark">
									<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim7", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
 								</div>
							</div>
							
							<div class="slide">
								<div class="bg-dark">
									<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim8", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
 								</div>
							</div>
							
							<div class="slide">
								<div class="bg-dark">
									<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim9", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
 								</div>
							</div>
							
							<div class="slide">
								<div class="bg-dark">
									<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim10", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
 								</div>
							</div>
							
							<div class="slide">
								<div class="bg-dark">
									<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim11", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
 								</div>
							</div>
							
							<div class="slide">
								<div class="bg-dark">
									<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim12", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
 								</div>
							</div>
							
							<div class="slide">
								<div class="bg-dark">
									<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim13", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
 								</div>
							</div>
							
							<div class="slide">
								<div class="bg-dark">
									<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim14", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
 								</div>
							</div>
							
							<div class="slide">
								<div class="bg-dark">
									<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim15", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
 								</div>
							</div>
							
							<div class="slide">
								<div class="bg-dark">
									<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim16", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
 								</div>
							</div>
							
							<div class="slide">
								<div class="bg-dark">
									<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim17", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
 								</div>
							</div>
							
							<div class="slide">
								<div class="bg-dark">
									<img onerror='this.style.display="none"' src="upload/<?=$db->VeriOkuTek("projeler_items", "resim18", "url", $_GET["url"]);?>" alt="img" class="img-responsive">
 								</div>
							</div>
							 
							
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-5">
						<h2><?=$db->VeriOkuTek("projeler_items", "urunbaslik", "url", $_GET["url"]);?></h2>
						<p class="first"><?=$db->VeriOkuTek("projeler_items", "urunaciklama", "url", $_GET["url"]);?></p>
						<h3>Yapan:</h3>
						<p>Gölal Yapı</p>
						<h3>Proje Bitirilme Tarihi:</h3>
						<p><?=$db->VeriOkuTek("projeler_items", "tarih", "url", $_GET["url"]);?></p>
						<h3>Kategori:</h3>
						<p><?=$db->VeriOkuTek("projeler_category", "isim", "id", $db->VeriOkuTek("projeler_items", "cat_id", "url", $_GET["url"]));?></p>
					</div>
				</div>
			
			<!-- start of btn-holder-detail -->
			<!-- start of what-sec -->
			<section class="what-sec mar-b-sm">
				<div class="container pad-t-sm pad-b-sm">
					<div class="row">
						<div class="col-xs-12">
							<header class="main-heading style2 mar-b-sm no-border">
								<h2 class="heading text-uppercase">Diğer <span class="clr">projelerimiz</span></h2>
							</header>
						</div>
					</div>
					<div class="row">
						<!-- start of wedo slider -->
						<div class="wedo-slider">
						<?php
if($db->veriSaydir("projeler_items", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("projeler_items", array(), array(), "row", "ASC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
 ?>   
							<div class="slide">
								<!-- start of item -->
								<div class="item">
									<div class="col-xs-12">
										<div class="bg-dark">
											<img onerror='this.style.display="none"' src="upload/<?=$rows->resim1;?>" alt="Gölal Yapı" class="img-responsive2 img">
											<a href="proje-<?=$rows->url;?>.html" class="zoom"><span class="icon-search"></span></a>
											<div class="over text-center">
												<h4 class="text-uppercase"><?=$rows->urunbaslik;?></h4>
												<span class="txt"><?=$db->VeriOkuTek("projeler_category", "isim", "id", $rows->cat_id);?></span>
											</div>
										</div>
									</div>
								</div><!-- end of item -->
							</div>
				<?php }} ?>
				</div><!-- end of wedo slider -->
					</div>
				</div>
			</section><!-- end of what-sec -->
			<!-- start of subscribe holder -->
			<!-- end of subscribe holder -->
		</main>
		<!-- start footer of the page -->
	


<?php include("alt.php")?>
	</div>
	
		<script type="text/javascript">
      $('document').ready(function(){
         
         $('img').error(function () {
            $(this).hide();
         });
      })   
 </script>
	<!-- include jQuery -->
	<script src="js\jquery.js" defer=""></script>
	<!-- include plugins jQuery -->
	<script src="js\plugins.js" defer=""></script>
	<!-- include jQuery main -->
	<script src="js\jquery.main.js" defer=""></script>
	<div id="style-changer" data-src="inc/style-changer.html"></div>
</body>

</html>