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

?>