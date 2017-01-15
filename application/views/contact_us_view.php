<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Contact Us | Welcome to binaryDreamers</title>
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
<body id="page5">
<div class="tail-top">
	<div class="tail-bottom">
		<div class="body-bg">
			<!-- HEADER -->
			<div id="header">
				<div class="extra"><img src="<?php echo base_url();?>images/header-img.jpg" alt="" /></div>
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
						<li class="m5"><?php echo anchor('site/contact_us','Contact Us','class="active"');?></li>
						<li class="m6"><?php echo anchor('site/webmail','Webmail');?></li>
					</ul>
				</div>
				<div class="row-3"><img src="<?php echo base_url();?>images/slogan.gif" alt="" />
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
								<h3>Contact Us !</h3>
							<?php
								switch ($choice){
									case 'val_error':
										$message = "Validation Failed. Try again! Scroll down to see the errors!";
									break;
									case 'mail_sent':
										$message = "Your message has been sent!";
									break;
									case 'mail_error':
										$message = "Something went WRONG! Please try again!";
									break;
									case 'fill_up':
										$message = "Please fill up all the fields!";
									break;
									default:
										$message = " ";
								} 
							?>
							<?php
								if ($choice == 'val_error' || $choice == 'mail_error' ){
									$msg_class = "msg_box_red";
								}
								else {
									$msg_class = "msg_box_green";
								} 
							?>
								<?php 
									echo "<div class=".$msg_class.">".
									$message.
								"</div><br/><br/>" ;
								?>
								
							<?php echo form_open('mail/send','id="contacts-form"');?>
									<?php 
										$name_data = array(
											'name' => 'name',
											'id' => 'name',
											'value' => set_value('name'),
											'class' => 'field'				
										);
										$email_data = array(
											'name' => 'email',
											'id' => 'email',
											'value' => set_value('email'),
											'class' =>'field'
										);
										$subject_data = array(
											'name' => 'sbj',
											'id' => 'sbj',
											'value' => set_value('sbj'),
											'class' =>'field'
										);
										$msg_data = array(
											'name' => 'msg',
											'id' => 'msg',
											'value' => set_value('msg'),
											'class' => 'field'
										);
									?>
									<p><label for="name"><b>Name : </b></label><?php echo form_input($name_data);?></p>
									<p><label for="email"><b>E-mail : </b></label><?php echo form_input($email_data);?></p>
									<p><label for="sbj"><b>Subject : </b></label><?php echo form_input($subject_data);?></p>
									<p><label for="msg"><b>Message : </b></label><?php echo form_textarea($msg_data);?></p>
									<div><a href="#" onclick="document.getElementById('contacts-form').submit()">Send Your Message!</a></div>
							<?php echo form_close();?>

								<div id="val_msg"><?php echo validation_errors('<p class="val_error">');?></div>
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