<?php
	if($_POST['password']!="aoaolu"){
		header("Location:./"); 
		exit;
	};
	// header("Content-type: text/html; charset=utf-8");
	header("Content-type: text/html; charset=gb2312");
	$page = "http://www.xx9.com/html/part/10.html";
	$contents = file_get_contents($page);
	// preg_match_all('/<ul[\s\S]*<\/ul>/U',$contents,$uls,PREG_PATTERN_ORDER);
	preg_match_all('/<li[\s\S]*<\/li>/U',$contents,$uls,PREG_PATTERN_ORDER);
	for($i=0;$i < count($uls[0]);$i++){
		// echo $uls[0][$i];
		echo preg_replace('/html\/article\//','aal/pic.php?url=',preg_replace('/<img[\s\S]*>/U','',$uls[0][$i]));
	}
	// echo $contents;
?>