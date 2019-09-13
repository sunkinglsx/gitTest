<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	//第3题
	$A=array();
	for($i=0;$i<20;$i++)
	{
		$A[$i]=rand(1,50);
	}
	//去重
	$B=array_unique($A);
	//升序排序
	sort($B);
	foreach($B as $v)
		echo $v."-";
?>
</body>
</html>