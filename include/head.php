<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" id="top">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
<?php include("titles.php") ?>
</title>
<link href="include/styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<script type="text/javascript" src="include/smoothscroll.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12477709-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div id="container">
<div id="header"><h1><a class="logo-link" href="index.php" title="Let's go home"><img class="logo" src="images/logo.png" alt="ryanw." height="52" width="183" /></a></h1>
  <?php include("include/nav.php"); ?>
</div>
<?php 

$page = basename($_SERVER['SCRIPT_NAME']);

if ($page == 'pack-mules-gigposter-detail.php') { echo '
		<div>
		<ul class="sub-nav">
          <li><a href="#whtrabbit">White Rabbit</a></li>
          <li><a href="#marsbar">Mars Bar</a></li>
        <li><a href="#blue-moon">Blue Moon</a></li>
      </ul>
	  </div>
	  ';}
?>
<div id="main">
