<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'Fill in the form below to send me an email.';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = ' ';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!DOCTYPE html>
<!--[if IE 7 ]><html lang="en" class="ie7"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
	<head>
		
		<!-- Canvas 1.3.4 -->
		
		<meta id="res" name="viewport" content="initial-scale=1 maximum-scale=1"/>
		
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="generator" content="RapidWeaver" />
		<link rel="icon" href="http://mathieuvenot.github.io/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="http://mathieuvenot.github.io/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="http://mathieuvenot.github.io/apple-touch-icon.png" />
		
		<title>Contact Form | Mathieu Venot</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/47089/SocialIconsNCD/style-cf.css">
		<link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" media="all" href="../../rw_common/themes/canvas/consolidated.css" />
		
		<script type="text/javascript" src="../../rw_common/themes/canvas/js/2d.js"></script>
		
		
		<!--[if lt IE 9]><script src="../../rw_common/themes/canvas/ie.js"></script><![endif]-->
		
		
		<style type="text/css" media="all">body{ background-image: url(../../resources/Other_Ressources/Site-Ressources/Background02E.jpg); }


header img {
filter: grayscale(20%);
-webkit-filter: grayscale(20%);
opacity:0.8;
filter:alpha(opacity=80);
-moz-transition: background-color .4s ease-in-out;
-webkit-transition: all .4s ease-in-out;
-o-transition: all .4s ease-in-out;
-ms-transition: all .4s ease-in-out;
transition: all .4s ease-in-out;
}
header img:hover {
filter: grayscale(0%);
-webkit-filter: grayscale(0%);
filter:none;
opacity:1.0;
filter:alpha(opacity=100);
}</style>
	<!-- Start Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42443207-2', 'auto');
  ga('send', 'pageview');

</script><!-- End Google Analytics -->
</head>
	<body>
		<div id="outer">
			<div id="wrapper">
				<div>
					<nav>
						<ul id="n"><li><a href="../../" rel="">Home</a></li><li><a href="../../blog/" rel="">Work In Progress</a></li><li><a href="../../code-4/" rel="">- - - Services</a><ul id="n"><li><a href="../../code-4/page21/" rel="">3D Design</a></li><li><a href="../../code-4/page7/" rel="">3D Printing</a></li><li><a href="../../code-4/page22/" rel="">3D Scanning</a></li><li><a href="../../code-4/page24/" rel="">Digital Teaching</a></li></ul></li><li><a class="currentAncestor" href="../../code/" rel="">- - - Ressources</a><ul id="n"><li><a href="../../code/styled-2/" rel="">About | Resume</a></li><li><a class="current" href="./" rel="">Contact Form</a></li><li><a href="../../code/styled/" rel="">Links</a></li></ul></li></ul>
						<ol><div class="clear"></div></ol>
					</nav>
				</div><!-- div -->
				<section id="a" class="f">
					<section id="b">
						<span></span>
						<div></div>
						<aside>
							<ul>
								<li id="menu"></li>
							</ul>
						</aside>
						<section id="c">
							<section id="d">
								<header>
									<a href="http://mathieuvenot.github.io/"><img src="../../rw_common/images/1637_1637A.png" width="332" height="111" alt="Site logo"/></a>
									<h1 id="title"><a href="http://mathieuvenot.github.io/">Mathieu Venot</a></h1>
									<h2 id="slogan">[Naval] | {Computation} | Architecture</h2>
									
								</header>
								<section id="e">
								 
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form class="rw-contact-form" action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Your Name</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Your Email</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Subject</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Message</label> *<br />
		<textarea class="form-input-field" name="form[element3]" rows="8" cols="38"><?php echo check('element3'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		<input class="form-input-button" type="reset" name="resetButton" value="Clear" />
		<input class="form-input-button" type="submit" name="submitButton" value="Send" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>
								 <div class="clear"></div>
								 <h3 id="side"></h3>
								 <a class="social-email social-import" href="mailto:mat.venot+nca@gmail.com" target="_tab"></a>

<a class="social-linkedin social-import" href="http://www.linkedin.com/pub/mathieu-venot/68/14a/a57" target="_tab"></a>

<a class="social-fab social-import" href="https://www.3dhubs.com/paris/hubs/mathieu-venot" target="_tab"></a>

<a class="social-vimeo social-import" href="https://vimeo.com/user14010003" target="_tab"></a>

<a class="social-tumblr social-import" href="https://www.thingiverse.com/mathieuvenot/about" target="_tab"></a>

<a class="social-github social-import" href="https://github.com/MathieuVenot" target="_tab"></a>
								 
								 <div class="clear"></div>
								</section><!-- #e -->
								<footer>All content &copy; 2011-2016 by Mathieu VENOT   |   Powered by RapidWeaver using Canvas theme, hosted on GitHub <a href="#" id="rw_email_contact">Contact</a><script type="text/javascript">var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":ma";var _rwObsfuscatedHref3 = "t.v";var _rwObsfuscatedHref4 = "eno";var _rwObsfuscatedHref5 = "t+n";var _rwObsfuscatedHref6 = "ca@";var _rwObsfuscatedHref7 = "gma";var _rwObsfuscatedHref8 = "il.";var _rwObsfuscatedHref9 = "com";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8+_rwObsfuscatedHref9; document.getElementById("rw_email_contact").href = _rwObsfuscatedHref;</script></footer>
							</section><!-- #d -->
							<div class="clear"></div>
						</section><!-- #c -->
					</section><!-- #b -->
				</section><!-- #a -->
			</div><!-- #wrapper -->
		</div><!-- #wrapper -->
		<div id="sim"></div>
		<input type="reset"/>
		<script type="text/javascript" charset="utf-8" src="https://code.jquery.com/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="../../rw_common/themes/canvas/javascript.js"></script>
		
	</body>
</html>
