<?php
header('content-type:text/html;charset=utf-8');
/*
API:
	ex1.php
	参数
	cpage：获取数据页数	 
*/
$cpage = isset($_GET['cpage']) ? $_GET['cpage'] : 1;
$url = 'http://www.wookmark.com/api/json/popular?page=' . $cpage;
$content = file_get_contents($url);
$content = iconv('gbk','utf-8',$content);
echo $content;


//header('content-type:text/html;charset=utf-8');
//$maxid = isset($_GET['maxid']) ? $_GET['maxid'] : 1;
//$url = 'http://apps.iyuba.com/minutes/titleNewApi.jsp?maxid='+. $maxid+'&fromat=xml&type=android';
//$content = file_get_contents($url);
//$content = iconv('gbk','utf-8',$content);
//
//echo $content;
?>