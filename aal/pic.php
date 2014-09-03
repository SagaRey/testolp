<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<!-- <meta http-equiv="content-type" content="text/html; charset=gb2312"> -->
		<style type="text/css">

		img{
			width: 98%;
			margin: 1%;
		}
		</style>
	</head>
	<body>
	<center>
<?php
	$url = "http://www.xx9.com/html/article/".$_GET['url'];
	$contents = preg_replace('/<img[\s\S]*alt[\s\S]*>/U','',file_get_contents($url));
	$contents = iconv("gb2312","utf-8//IGNORE",$contents);
	// $contents = file_get_contents($url);
	preg_match_all('/<img[\s\S]*>/U',$contents,$imgs,PREG_PATTERN_ORDER);
	for($i=0;$i < count($imgs[0]);$i++){
		// echo "<br><br>".$imgs[0][$i];
		echo $imgs[0][$i];
	}
?>
	</center>
	</body>
</html>