<?php include_once('header.php'); ?>
<?php if( isset($_GET['fb']) && $_GET['fb'] == 1): ?>
<div class="row form_section show-grid">
	<h1>Thank-you for registering with Lawlab!</h1>
	<h4>A member of our conveyancing team will call you to start the process.  If you wish to get started immediately contact us directly on <strong>1800 529 522</strong></h4>
	<div class="separator">
		<a class="btn btn-lg btn-block btn-register" href="http://www.lawlab.com.au/residential.html" >Click here for more info</a>
	</div>
</div>
<?php elseif( isset($_GET['fb']) && $_GET['fb'] == 2): ?>
<div class="row form_section show-grid">
	<h1>Error with registering!</h1>
	<h4>Error has been sent to adminitrator.</h4>
	<div class="separator">
		<a class="btn btn-lg btn-block btn-register" href="http://www.lawlab.com.au/residential.html" >Click here for more info</a>
	</div>
</div>
<?php endif; ?>
<div class="row footer">
		<div class="col-lg-8"><div class="footer_info"><ul><li><a href="www.lawlab.com.au">www.lawlab.com.au</a></li><li>&copy; Lawlab Pty Ltd ABN 63 109 721 833</li></ul></div></div>
		<div class="col-lg-4"><button class="btn btn-contact btn-contact-desktop">Call Us: 1800 529 522</button><a class="btn btn-contact btn-contact-mobile" href="tel:1800 529 522">Call Us: 1800 529 522</a></div>
</div>
<!-- Google Code for Lead Conversion Page -->

<script type="text/javascript">

/* <![CDATA[ */

var google_conversion_id = 978259818;

var google_conversion_language = "en";

var google_conversion_format = "2";

var google_conversion_color = "ffffff";

var google_conversion_label = "RgPkCJ6qiAcQ6p680gM";

var google_conversion_value = 0;

/* ]]> */

</script>

<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">

</script>

<noscript>

<div style="display:inline;">

<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/978259818/?value=0&amp;label=RgPkCJ6qiAcQ6p680gM&amp;guid=ON&amp;script=0"/>

</div>

</noscript>

<?php include_once('footer.php'); ?>