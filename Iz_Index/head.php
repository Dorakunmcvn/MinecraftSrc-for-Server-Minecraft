<?php
// Code by Đoàn Bảo
require("Iz_Shower/settings.php");
if ($bao_tri == false) {
?>
<!DOCTYPE html>
<!--
Code by Đoàn Bảo
! NEWS: Đã đổi mới hoàn toàn giao diện và code lại :D
-->
<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" type="text/css" href="./css/designz-index.css" crossorigin="anonymous"/>
        <link rel="stylesheet" type="text/css" href="./css/designz-thongbao.css" crossorigin="anonymous"/>
        <link rel="stylesheet" type="text/css" href="./css/head-design.css" crossorigin="anonymous"/>
        <link rel="stylesheet" type="text/css" href="./css/mod.css" crossorigin="anonymous"/>
        <link rel="stylesheet" type="text/css" href="./css/xDx.css" crossorigin="anonymous"/>
        <link rel="stylesheet" type="text/css" href="./css/donate.css" crossorigin="anonymous"/>
        <link rel="stylesheet" type="text/css" href="./addon-css/btn.css" crossorigin="anonymous"/>
        <link rel="stylesheet" type="text/css" href="./addon-css/fa/css/all.css" crossorigin="anonymous"/>
    </head>
    <body>
        <header class="head-content">
            <a href="<?php echo $host; ?>" class="logo">
                <img src="<?php echo $logo_location; ?>" height="60px" weight="60" alt="<?php echo $servername; ?>" />
                </a>
            <div id="list">
                <ul>
                        <li><a href="<?php echo $link_home; ?>"><?php echo $home; ?></a></li>
                        <li><a href="<?php echo $link_thongbao; ?>"><?php echo $thongbao; ?></a></li>
                        <li><a href="<?php echo $link_giftcode; ?>"><?php echo $giftcode; ?></a></li>
                        <li><a href="<?php echo $link_event; ?>"><?php echo $event; ?></a></li>
                        <li><a href="<?php echo $link_donate; ?>"><?php echo $donate; ?></a></li>
                        <li><a href="<?php echo $link_reg; ?>"><?php echo $reg; ?></a></li>
                </ul>
            </div>
        </header>
        <div id="myModal" class="modal">
        <!-- Nội Dung Modal -->
        <div class="modal-content">
        <?php echo $noidung; ?>
        <center>
            <span class="close"><?php echo $btnClose; ?></span>
            <a href="<?php echo $btnOK_link; ?>"><span class="close"><?php echo $btnOK; ?></span></a>
        </center>
        </div>
        </div>
        <?php } else {
         header("Location: bao-tri");
        }?>