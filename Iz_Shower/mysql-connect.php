<?php
require("db-config.php");
$connection = mysql_connect($host,$username,$password);
if (!$connection)
  {
  die('Xin lỗi, nhưng thông tin sql bạn nhập đã bị sai ! Vui lòng thử lại !');
  }
mysql_select_db($dbname) or die(mysql_error());
mysql_query("SET NAMES utf8");
$kmess = $set_user['kmess'] > 4 && $set_user['kmess'] < 500 ? $set_user['kmess'] : 500;
$page = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? intval($_REQUEST['page']) : 1;
$start = isset($_REQUEST['page']) ? $page * $kmess - $kmess : (isset($_GET['start']) ? abs(intval($_GET['start'])) : 0);
?>