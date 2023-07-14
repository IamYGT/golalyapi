		<header style="    height: 89px;"  id="header" class="header6 bg-dark transparent nospace">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<!-- logo -->
						<div class="logo">
							<a href="index"><img src="images/logo.png" alt="Gölal Yapı"></a>
						</div>
						<div style="    width: 77%;" class="header-holder">
 							<a  class="nav-opener menu-opener"><span></span></a>
							<!-- start of navigation -->
							<nav id="nav" >
								<ul class="list-unstyled">
									 								 <li><a href="index">ANASAYFA </a></li>
										<li><a >KURUMSAL <i class="fa fa-angle-down"></i></a>
										<ul class="list-unstyled drop-down">
										<?php
if($db->veriSaydir("kurumsal", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("kurumsal", array(), array(), "row", "ASC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
 ?>
 											<li><a href="kurumsal-<?=$rows->url;?>.html"><?=$rows->isim;?></a></li>
											<?php }} ?>
										</ul>
									</li><li><a href="hizmetlerimiz">HİZMETLERİMİZ <i class="fa fa-angle-down"></i></a>
										<ul class="list-unstyled drop-down">
										<?php
if($db->veriSaydir("hizmetlerimiz", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("hizmetlerimiz", array(), array(), "row", "ASC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
 ?>   
 						<li><a href="hizmet-<?=$rows->url;?>.html"><?=$rows->isim;?></a></li>
											<?php }} ?>
 										</ul>
									</li>
									<li><a href="projelerimiz">PROJELERİMİZ </a></li>
									<li><a href="referanslar">REFERANSLAR </a></li>
									<li><a href="haberler">HABERLER </a></li>
									<li><a href="iletisim">İLETİŞİM </a></li>
								</ul>
							</nav><!-- end of navigation -->
							<!-- start of side nav --> 	
							 
						</div>
					</div>
				</div>
			</div>
		</header><!-- end of header -->
		 