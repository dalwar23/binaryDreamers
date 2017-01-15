<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
echo "
	<div class='indent'>
		<div>
			<ul>
				<li>".anchor('site/','Home')." |</li>
				<li>".anchor('site/about_us','About Us')." |</li>
				<li>".anchor('site/services','Services')." |</li>
				<li>".anchor('site/support','Support')." |</li>
				<li>".anchor('site/contact_us','Contact Us')." |</li>
				<li>".anchor('site/sitemap','Sitemap')." |</li>
				<li>".anchor('site/webmail','Webmail')."</li>
			</ul>
		</div>
		<div>Designed by: arif | All Rights Reserved | &copy; Copyright ( 2009 - ". date('Y')." ) - binarydreamers.net</div>
	</div> 
";
?>