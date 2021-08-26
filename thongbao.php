<?php
require("Iz_Index/head.php");
?>
<center>
    <br />
    <p id="all-p-card">- CONTENT -</p>
    <div class="border-content">
        <h1 id="title">THÔNG BÁO</h1>
        <p id="description"><?php echo $news; ?></p>
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