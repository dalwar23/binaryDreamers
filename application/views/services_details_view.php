<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
	switch($t){
		case 1:
			$title = "Networking Solutions !";
			$type = 1;
		break;
		case 2:
			$title = "Application Solutions !";
			$type = 2;
		break;
		case 3:
			$title = "Web Solutions !";
			$type = 3;
		break;
		case 4:
			$title = "Consultation !";
			$type = 4;
		break;
		case 5:
			$title = "Training !";
		break;
	}
?>
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
								<h3><?php echo $title;?></h3>
								<ul class="list1">
								<?php 
									if($type==1)
									{
										 require_once("network_details.php");
									}
									elseif($type==2)
									{
										 require_once("applications_details.php");
									}
									elseif($type==3)
									{
										 require_once("web_details.php");
									}
									elseif($type==4)
									{
										 require_once("consultation_details.php");
									}
								?>
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