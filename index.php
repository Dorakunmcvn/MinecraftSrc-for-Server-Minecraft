<?php
// Code by Đoàn Bảo
require("Iz_Index/head.php");
?>

<center>
    <div class="content-card">
            <h1><span id="question">!</span> Bạn có thông báo</h1>
            <br />
            <button id="myBtn"><?php echo $btnOpen; ?></button>
            
        </div>
        <br /> 
            <br />
            <b id="welcome">- WELCOME TO <?php echo $servername; ?> -</b>
            <br />
            <br />
            <p id="all-p-card">- INFORMATION -</p>
        </center>
        <br />
        <div class="content-card">
            <h1><span id="question">?</span> <?php echo $content1; ?></h1>
            <br />
            <p><?php echo $description1; ?></p>
        </div>
        <br /> 
        <div class="content-card">
            <h1><span id="question">?</span> <?php echo $content2; ?></h1>
            <br />
            <p><?php echo $description2; ?></p>
        </div>
        <br />
        <div class="content-card">
            <h1><span id="question">?</span> <?php echo $content3; ?></h1>
            <br />
            <p><?php echo $description3; ?></p>
        </div>
        <br />
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