<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Home | Welcome to binaryDreamers</title>
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
<body id="page1">
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
						<li class="m1"><?php echo anchor('site/','Home','class="active"');?></li>
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
							</span><a href="#" onclick="document.getElementById('search-form').submit()"><img src="<?php echo base_url();?>images/button.gif" alt="search" title="Search"/></a></div>
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
								<div class="indent1">
									<h3>Welcome to binaryDreamers !</h3>
									<p>
										A promsing IT service provider of Bangladesh. If you think that you want to take your organization to a whole new level with help of IT then you have just stapped into the right place. 
										binaryDreamers has a group of energatic and innovative pesonnels, who is always waiting to bring your deam come true. Team of binaryDreamers is hardworking, intelligent and dedicated to each and every project.
										You just need to dream and we came it come true!
									</p>
									<p>
										<b>"DREAM INFINITY, BUILD BEYOND"</b> is our motto. We always try our level best to keep building the dreams of yours as you have imagined. We stop at nothing to make your dream come true.
									</p>
								</div>
								<h4>Recent Projects !</h4>
								<ul class="list">
									<li><strong><a href="http://www.iutoic-dhaka.edu/ictfest">IBBL IUT 3rd National ICT Fest 2011</a></strong>The website for IBBL IUT 3rd National ICT fest 2011 , held in IUT campus was designed and maintain by binaryDreamers.</li>
									<li><strong><a href="http://www.raidafashion.com">Raida Fashion House</a></strong>The website for Raida Fashion House was built by binaryDreamers and up to year 2014 it will be maintained by binaryDreamers.</li>
									<li><strong><a href="#">Power IT Limited Online Order Management System</a></strong>The Order Management System for PowerIT Limited is designed and developed by binaryDreamers.</li>
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