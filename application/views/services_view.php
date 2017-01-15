<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Services | Welcome to binaryDreamers</title>
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
<body id="page2">
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
						<li class="m3"><?php echo anchor('site/services','Services','class="active"');?></li>
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
								<h3>Our Services !</h3>
								<p>The complete information regarding our services.</p>
								<ul class="list1">
									<li>
										<img src="<?php echo base_url();?>images/img_net.jpg" alt="Network-solutions" height="74" width="74" title="Network-solutions"/>
										<strong><?php echo anchor('site/services_details/1','Networking Solutions')?></strong>
										binaryDreamers provides all kinds of Enterprise Networking Solutions. We have very skillful network engineers to satisfy your Bisiness needs. For more details, please click [<b> <?php echo anchor('site/services_details/1','HERE','class="highlight"')?> </b>]
									</li>
									<li>
										<img src="<?php echo base_url();?>images/img_app.jpg" alt="Application Solutions" />
										<strong><?php echo anchor('site/services_details/2','Apllication Solutions')?></strong>
										binaryDreamers also provides all kind of application and software solutions. With the help of our energitic engineers we hope that we would be able to satisfy you. For more details, please click [<b> <?php echo anchor('site/services_details/2','HERE','class="highlight"')?> </b>]
									</li>
									<li>
										<img src="<?php echo base_url();?>images/img_web.jpg" alt="web-solutions" height="74" width="74"/>
										<strong><?php echo anchor('site/services_details/3','Web Solutions')?></strong>
										binaryDreamers provides web services, full solution pakage for your appearance  in the web including web apllications. For more details, please click [<b> <?php echo anchor('site/services_details/3','HERE','class="highlight"')?> </b>]
									</li>
									<li>
										<img src="<?php echo base_url();?>images/img_cons.png" alt="it-consultency" />
										<strong><?php echo anchor('site/services_details/4','Consultation')?></strong>
										binaryDreamers provides every kind of IT consultation for your office or business and we ensure the satisfaction of our clients. For more details, please click [<b> <?php echo anchor('site/services_details/4','HERE','class="highlight"')?> </b>]
									</li>
									<li>
										<img src="<?php echo base_url();?>images/img_trn.jpg" alt="Training" />
										<strong><?php echo anchor('site/services','Training')?></strong>
										binaryDreamers is going to launch a bunch of new IT related course based training to spread the moto <b>"DREAM INFINITY, BUILD BEYOND!"</b> in near future.
									</li>
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