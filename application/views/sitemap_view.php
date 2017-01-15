<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Site Map | Welcome to binaryDreamers</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="binarydreamers.net" />
<meta name="keywords" content="web,web design,networking,bd networking, web solutions, business, business web" />
<meta name="author" content="arif, binarydreamers.net" />
<link href="<?php echo base_url();?>css/style.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url();?>js/cufon-yui.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/cufon-replace.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/Myriad_Pro_300.font.js" type="text/javascript"></script>
<!--[if lt IE 7]>
	<script type="text/javascript" src="<?php echo base_url();?>js/ie_png.js"></script>
	<script type="text/javascript">
		 ie_png.fix('.png, #header .row-2 ul li a, #content, .list li');
	</script>
<![endif]-->
</head>
<body id="page6">
<div class="tail-top">
	<div class="tail-bottom">
		<div class="body-bg">
			<!-- HEADER -->
			<div id="header">
				<div class="extra"><img src="<?php echo base_url();?>images/header-img.jpg" alt="it-robot" /></div>
				<div class="row-1">
				<div class="fleft"><a href="http://www.binarydreamers.net"><img src="<?php echo base_url();?>images/final_bd.jpg" alt="logo" /></a></div>
				<div class="fleft"><h3>binary<span>Dreamers</span>&nbsp;Inc.</h3></div>
				</div>
				<div class="row-2">
					<ul>
						<li class="m1"><?php echo anchor('site/','Home');?></li>
						<li class="m2"><?php echo anchor('site/about_us','About Us');?></li>
						<li class="m3"><?php echo anchor('site/services','Services');?></li>
						<li class="m4"><?php echo anchor('site/support','Support');?></li>
						<li class="m5"><?php echo anchor('site/contact_us','Contact Us');?></li>
						<li class="m6"><?php echo anchor('site/webmail','Webmail');?></li>
					</ul>
				</div>
				<div class="row-3"><img src="<?php echo base_url();?>images/slogan.gif" alt="our motive" />
					<form action="site/search" method="post" id="search-form">
						<fieldset>
						<div><span>
							<input type="text" value="Enter keyword here" name="search-form" onfocus="if(this.value=='Enter keyword here'){this.value=''}" onblur="if(this.value==''){this.value='Enter keyword here'}" />
							</span><a href="#" onclick="document.getElementById('search-form').submit()"><img src="<?php echo base_url();?>images/button.gif" alt="search" /></a></div>
						</fieldset>
					</form>
				</div>
			</div>
			<!-- CONTENT -->
			<div id="content"><div class="inner_copy"></div>
				<div class="tail-right">
					<div class="wrapper">
						<div class="col-1">
							<div class="indent">
								<h3>Site Map !</h3>
								<ul class="list2">
									<li class="m1"><?php echo anchor('site/','Home');?></li>
									<li class="m2"><?php echo anchor('site/about_us','About Us');?></li>
									<li class="m3"><?php echo anchor('site/services','Services');?>
										<ul>
										<li><?php echo anchor('site/services_details/1','Networking Solutions')?>
											<ul>
												<li><?php echo anchor('site/services_details/1','Enterprise Network Pakage')?></li>
												<li><?php echo anchor('site/services_details/1','Organiztion\'s Internal Network Design and Implimentation')?></li>
												<li><?php echo anchor('site/services_details/1','Upgrade and Modification of Existing System')?></li>
												<li><?php echo anchor('site/services_details/1','Service Implementation')?></li>
												<li><?php echo anchor('site/services_details/1','Building Network Infrastructure')?></li>
											</ul>
										</li>
										<li><?php echo anchor('site/services_details/2','Apllication Solutions')?>
											<ul>
												<li><?php echo anchor('site/services_details/2','Enterprise Software Solution')?></li>
												<li><?php echo anchor('site/services_details/2','Custom Application')?></li>
												<li><?php echo anchor('site/services_details/2','Upgrade and Modification of Existing Application')?></li>
												<li><?php echo anchor('site/services_details/2','Maintain and Re-organize Application')?></li>
											</ul>
										</li>
										<li><?php echo anchor('site/services_details/3','Web Solutions')?>
											<ul>
												<li><?php echo anchor('site/services_details/3','Personal Site Package');?></li>
												<li><?php echo anchor('site/services_details/3','Basic Starter Package');?></li>
												<li><?php echo anchor('site/services_details/3','Classic Suit Package');?></li>
												<li><?php echo anchor('site/services_details/3','SME Web Package');?></li>
												<li><?php echo anchor('site/services_details/3','E-Commerce Pro Package');?></li>
												<li><?php echo anchor('site/services_details/3','CMS Pro Package');?></li>
											</ul>
										</li>
										<li><?php echo anchor('site/services_details/4','Consultation')?>
											<ul>
												<li><?php echo anchor('site/services_details/4','Internet Solution Consultation')?></li>
												<li><?php echo anchor('site/services_details/4','Organiztion\'s Internal Network Consultation')?></li>
												<li><?php echo anchor('site/services_details/4','World Wide Web Consultation')?></li>
												<li><?php echo anchor('site/services_details/4','Service Consultation')?></li>
												<li><?php echo anchor('site/services_details/4','Business Consultation')?></li>
											</ul>
										</li>
										<li><?php echo anchor('site/services','Training')?></li>
										</ul>
									</li>
									<li class="m4"><?php echo anchor('site/support','Support');?>
										<ul>
											<li><?php echo anchor('site/support','Live Support');?></li>
											<li><?php echo anchor('site/support','FAQ');?></li>
											<li><?php echo anchor('site/contact_us','Complaint Form');?></li>
										</ul>
									</li>
									<li class="m5"><?php echo anchor('site/contact_us','Contact Us');?></li>
									<li class="m6"><?php echo anchor('site/webmail','Webmail');?></li>
								</ul>
							</div>
						</div>
						<div class="col-2">
						<?php {include_once ('_contact_us_sidebar.php');}?>
						</div>
					</div>
				</div>
			</div>
			<!-- FOOTER -->
			<div id="footer">
			<?php {include_once ('_footer_view.php');}?>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>