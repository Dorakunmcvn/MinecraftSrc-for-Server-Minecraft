<?php
include '../Iz_Shower/mysql-connect.php';
if(isset($_GET[xoa])){
$idfbxoa = $_GET['xoa'];
$idfbxoa = (int)$idfbxoa;
	mysql_query("DELETE FROM `gachthe` WHERE `gachthe`. `id` = '".intval($_GET[xoa])."'");
    echo '<meta http-equiv=refresh content="0; URL=/admin/duyet-the.html">';
	die('<script>alert("Xóa Thành Công"); </script>');
					}
if(isset($_GET[done])){
$uid = $_SEESION['username'];
$tinhrang = "Thành công";
mysql_query("UPDATE `gachthe` SET `tinhtrang` = '".$tinhrang."' WHERE `id` = '" .intval($_GET[done]). "'");
echo '<meta http-equiv=refresh content="0; URL=/admin/duyet-the.html">';
echo('<script>alert("Check Thành Công"); </script>');
}