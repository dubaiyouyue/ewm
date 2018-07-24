<?php
$url=$_GET['url']['0'];
$logo=$_GET['logo']['0'];
include 'phpqrcode.php';
if(!$url) $url='http://www.resonance.com.cn/';
if(!$logo) QRcode::png($url);
else include 'img.php';
?>