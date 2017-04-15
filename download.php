<?php
header("Content-type:image/jpg");
$servername="localhost";
$username="root";
$password="";
mysql_connect($servername,$username,$password);
mysql_select_db("hoteldatails");
session_start(); 
$e1=$_SESSION['image'];
$q1=mysql_query("select image from hoteldetails where hotel='$e1'");
$r=mysql_fetch_assoc($q1);
$q3=$r['dp'];
$file = fopen($q3, "rb");
$retstr = fread($file, filesize($q3));
echo $retstr;
?>