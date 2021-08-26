<?php
// Code by Đoàn Bảo - Check Card Panel
include '../Iz_Shower/db-config.php';
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
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Duyệt Thẻ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-12">
                <div class="table-responsive">
<table class="table">
   <tr>
	   <th>STT</th>
	   <th>Tên</th>
	   <th>Mã Thẻ</th>
	  <th>Serial Thẻ</th>
	   <th>Mệnh giá</th>
	    <th>Loại thẻ</th>
	   <th>Tình Trạng</th>
   </tr>
<tbody>
<?php
include 'config.php';
$getloaithe = array("Viettel", "Vinaphone", "Mobifone");
$TOM_result = mysql_query("SELECT * FROM `gachthe` WHERE `id` ORDER by id DESC LIMIT $start, $kmess");
while($gettom = mysql_fetch_assoc($TOM_result)){ ?>
<tr>
   <th scope="row">#<?php echo $gettom['id']; ?></th>
   <th><?php echo $gettom['uid']; ?></th>
   <td><?php echo $gettom['code']; ?></td>
   <td><?php echo $gettom['serial']; ?></td>
   <td><?php echo number_format($gettom['menhgia']); ?> <sup>VNĐ</sup></td>
   <td><?php echo $getloaithe[$gettom['loaithe']]; ?></td>
   <td><?php echo $gettom['tinhtrang']; ?></td>
   <td>
    <a href="?xoa=<?php echo $gettom['id']; ?>"><button class="btn-sm btn-danger">Xóa</button></a>
    </td>
    <td>
    <a href="?done=<?php echo $gettom['id']; ?>"><button class="btn-sm btn-success" >Done</button></a>  
              
    </td>
</tr>                 
                <?php }?>
</tbody>
</table>
</div>
            </div>
            <!-- /./ row -->
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>