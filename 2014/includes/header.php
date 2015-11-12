<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Mike Sinkula&apos;s Website</title>

<!-- Begin Meta -->
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
<!-- End Meta -->


<!-- Begin Styles -->
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<link href="flexslider.css" rel="stylesheet" type="text/css" media="all" />
<!-- End Styles -->

<!-- Begin Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="scripts/jquery.flexslider-min.js" type="text/javascript"></script>
<!-- End Scripts -->

<!-- Begin Flex Slider -->
<script type="text/javascript" charset="utf-8">
	$(window).load(function() {
		$('.flexslider').flexslider();
	});
</script>
<!-- End Flex Slider -->

<!-- Begin Toggle Menu -->
<script type="text/javascript" charset="utf-8">
	$(window).load(function() { // enable function upon window load
		$("#toggle").click(function() { // when toggle is clicked...
			$("#navigation").toggle(); // ... open or close the navigation
		});
	});
</script>
<!-- End Toggle Menu -->

</head>

<body>

<!-- Begin Header -->
<div id="header">
<h1 id="logo"><a href="index.php">Mike Sinkula</a></h1>
<img id="toggle" src="images/img-toggle.png" alt="Toggle Menu"> 
</div>
<!-- End Header -->

<?php include('includes/navigation.php'); ?>

<!-- Begin Content -->
<div id="content">
