<html>
	<head>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	    <link rel="stylesheet" href="../css/bootstrap.css">
	</head>
	<body>
		<ul class="list-group">
<?php
	if($_POST['password']!="aoaolu"){
		header("Location:./"); 
		exit;
	};
	header("Content-type: text/html; charset=utf-8");
	$page = "http://www.xx9.com/html/part/10.html";
	$contents = file_get_contents($page);
	$contents = iconv("gb2312","utf-8//IGNORE",$contents);
	// preg_match_all('/<ul[\s\S]*<\/ul>/U',$contents,$uls,PREG_PATTERN_ORDER);
	preg_match_all('/<li>[\s\S]*<\/li>/U',$contents,$uls,PREG_PATTERN_ORDER);
	for($i=0;$i < count($uls[0]);$i++){
		// echo $uls[0][$i];
		echo preg_replace('/html\/article\//','aal/pic.php?url=',preg_replace('/<img[\s\S]*>/U','',$uls[0][$i]));
	}
	// echo $contents;
?>
		</ul>
	    <script src="../js/jquery.min.js"></script>
	    <script src="../js/bootstrap.min.js"></script>
	    <script type="text/javascript">
	    	$(document).ready(function(){
			   $("li").addClass("list-group-item");
			});
	    </script>
	</body>
</html>