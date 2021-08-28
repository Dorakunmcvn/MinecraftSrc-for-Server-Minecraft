<?php
// PHP 5.6 - CPanel Editor
// Một số code không thể chạy trên phiên bản 7.0 trở lên.
// Khuyến khích phiên bản 5.6 để chạy code này
// By Đoàn Bảo
?>
<?php
include("Iz_Shower/napthe.php");
?>
<?php
require("Iz_Index/head.php");
?>
<style>
/* Đây là code của phiên bản cũ */
    #btn-gui-the:hover {background: gray;color: white;border: 1px solid black;} /* Hiệu ứng Hover */
    #btn-gui-the:active {background: yellow;color: green;} /* Hiệu ứng Active */
</style>
<center>
    <br />
    <p id="all-p-card">- CONTENT -</p>
    <div class="border-content">
        <h1 id="title">NẠP THẺ</h1>
        <?php 
        if ($donate_form == true) {
            echo '<br /><p id="description">Nạp thẻ chậm tại đây, nạp xong hãy đợi trong 5 - 10 phút (chậm).</p></br>
        <form method="POST">
            <br />
            <label for="username">Tên Người Chơi :</label>
            <br />
            <input type="text" name="username" class="form" />
            <br />
            <label for="card_type">Loại thẻ :</label>
            <br />
            <select name="card_type" class="select">
              <option value="">Chọn nhà mạng</option>
              <option value="0">Viettel</option>
              <option value="1">Vinaphone</option>
              <option value="2">Mobifone</option>
              <option value="3">VietnamMobile</option>
              <option value="4">Garena (Không nhận)</option>
            </select>
            <br />
            <label for="card_amount">Mệnh giá :</label>
            <br />
            <select name="card_amount" class="select">
              <option value="">Chọn mệnh giá</option>
              <option value="10000">10,000đ</option>
              <option value="20000">20,000đ</option>
              <option value="30000">30,000đ</option>
              <option value="50000">50,000đ</option>
              <option value="100000">100,000đ</option>
              <option value="200000">200,000đ</option>
              <option value="300000">300,000đ</option>
              <option value="500000">500,000đ</option>
            </select>
            <br />
            <label for="card_code">Mã thẻ :</label>
            <br />
            <input type="number" name="card_code" class="form" />
            <br />
            <label for="card_serial">Số Serial :</label>
            <br />
            <input type="number" name="card_serial" class="form" />
            <br />
            <br />
            <i>Bấm vào đây để gửi thẻ : </i>
            <br />
            <button type="submit" name="submit" class="btn btn-success">Gửi thẻ</button>
            <br />
            <br />
            <br />
            <b style="color:red;">Lịch sử gửi thẻ</b>
            <br />
            <br />';
        } else {
            echo '<br /><p id="description" style="color: red;">Tính năng đang bảo trì</p><br />';
        }
        ?>
            <table class="table table-hover">
   <tr>
	   <th> STT </th>
	   <th> Tên </th>
	   <!--<th>Mã Thẻ</th>-->
	    <!--<th>Serial Thẻ</th>-->
	   <th> Mệnh giá </th>
	    <th> Loại thẻ </th>
	   <th> Tình Trạng </th>
   </tr>
<tbody>
<?php
include 'Iz_Shower/mysql-connect.php'; 
$getloaithe = array('Viettel','Vinaphone','Mobifone', 'VietnamMobile', 'Garena');
$TOM_result = mysql_query("SELECT * FROM `gachthe` WHERE `id` ORDER by id DESC LIMIT $start, $kmess");
while($gettom = mysql_fetch_assoc($TOM_result)){ ?>
<tr>
   <th scope="row">#<?php echo $gettom['id']; ?> </th>
   <th> <?php echo $gettom['uid']; ?> </th>
   <!--<td>< ?php echo $gettom['code']; ?></td>
   <!--<td>< ?php echo $gettom['serial']; ?></td>-->
   <td> <?php echo number_format($gettom['menhgia']); ?> <sup>VNĐ </sup></td>
   <td> <?php echo $getloaithe[$gettom['loaithe']]; ?> </td>
   <td> <?php echo $gettom['tinhtrang']; ?> </td>
</tr>                 
<?php }?>
</tbody>
</table>
        </form>
    </div>
    <br />
</center>
<center>
            <b id="all-b-card">- PLAYER CONTENT -</b>
            <div class="content-player">
            <img src="<?php echo $logo_server; ?>" height="50px" weight="50px" alt="<?php echo $servername; ?>" />
            <br />
            <b id="players"><?php echo $line1; ?></b>
              <br />
              <p id="is-player-card"><?php echo $line2; ?></p>
              <!-- <p id="is-player-card">Hiện tại có 0/100 người đang tham gia máy chủ ! Tham gia ngay nào !</p> -->
              <!-- Note: Chỉ cần đổi ip và port là được :D -->
            </div>
        </center>
<?php
require("Iz_Index/end.php");
?>