<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>About Us | Welcome to binaryDreamers</title>
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
						<li class="m2"><?php echo anchor('site/about_us','About Us','class="active"');?></li>
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
								<div class="indent1">
									<h3>About binaryDreamers !</h3>
									<p class="p0">
									The foundation of binaryDreames was laid down in the yaer 2009 and while our team was struggling hard to make a peek to the web and anounce our presence, we have faced some technical problems and for those reasons we
									started to look forward to rebuild our team and start again what was suppose to be. Then, on a fine morning of 2010 we rebuilt it and now here we are. From that very moment we never looked back and struggled hard to 
									make our clients happy and i think we are quite successful in this area.  We deeply hope and strongly believe that we will able to make your dream come true.
									</p>
								</div>
								<h4>About Our Team !</h4>
								<ul class="list1">
									<li>
										<img src="<?php echo base_url();?>images/maruf.jpg" alt="Manun" title="Mamun"/><strong><a href="#">Mamunur Rashid Maruf</a></strong>
										Mamunur Rashid Maruf is the man with the mission, he is one of our most energitic and hardworking Dreamers. 
										After Graudating from IUT with a very high CGPA, He stops at nothing to pursue his goals. We hope that he can do the same for you too.
									</li>
									<li>
										<img src="<?php echo base_url();?>images/rushdi.jpg" alt="Sofiullah" title="Sofiullah"/><strong><a href="#">A.H.M Sofiullah</a></strong>
										Do we need to tell you about him? His reputaion preceeds him. He is the Man behind the blueprint of binaryDreamers. He has completed his Graduation from IUT
										and team leader of 1st Runner Up team of National <b>CISCO</b> networkRiders Compitition and Now breaking the Asian Circle of networkRiders with his brilliant Netwoking skills. 
									</li>
									<li>
										<img src="<?php echo base_url();?>images/ovin.jpg" alt="Ovin" title="Ovin"/><strong><a href="#">Ridwan Islam Ovin</a></strong>
										If you ever heard the proverb <b>Slow and steady wins the race</b> then you can guess where this guy's potential lies in. He is a very calm and quiet gentaleman with extraordinary analytical skills and 
										will always make the best out of his time. His favourite punchline is <b>There is no charge for awesomeness or attractiveness.</b> 
									</li>
									<li>
										<img src="<?php echo base_url();?>images/arif.jpg" alt="Arif" title="Arif"/><strong><a href="#">Delwar Hossain Arif</a></strong>
										Survived the Grad school and always leaning forward to the new technology of web developement and spends most of his time tweeting. with a good skill in web design , developement and application he pursues his goals
										perfectly. 
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
			<?php {include_once('_footer_view.php');}?>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>