<?php
include("Iz_Shower/mysql-connect.php");
if(isset($_POST['submit'])) {
        if(!isset($_POST['username']) || !isset($_POST['card_type']) || !isset($_POST['card_amount']) || !isset($_POST['card_serial']) || !isset($_POST['card_code'])) {
            $err = '<script>alert("Chưa đầy đủ thông tin ! Vui lòng thử lại !"); </script>';
            echo $err;
        }else{
            $name = $_POST['username'];
            $card_type = $_POST['card_type'];
            $card_amount = $_POST['card_amount'];
            $card_serial = $_POST['card_serial'];
            $card_code = $_POST['card_code'];
            
            if($name == '' || $card_type == '' || $card_amount == '' || $card_serial == '' || $card_code == '') {
                $err = '<script>alert("Chưa đầy đủ thông tin ! Vui lòng thử lại !"); </script>';
                echo $err;
            
            //if(strlen($type) < 6 || strlen($type) > 30 || strlen($amount) < 6|| strlen($amount) > 30){
                // $err = 'Bạn cần nhập 10 > 20 kí tự';
            }else{
                include 'Iz_Shower/mysql-connect.php'; 
            $check = mysql_result(mysql_query("SELECT COUNT(*) FROM `gachthe` WHERE `code`='$card_code' AND `serial`='$card_serial'"), 0);
				if(empty($card_code) || empty($card_serial)) {
				$err = '<script>alert("Chưa đầy đủ thông tin ! Vui lòng thử lại !"); </script>';
				echo $err;
				}else{ if($check >= 1){
				    $err = '<script>alert("Đã tồn tại thẻ này !"); </script>';
				}else{
				$name = $_POST['username'];  
				$tr = 'Đợi duyệt';
			mysql_query("INSERT INTO `gachthe` (`code`, `serial`, `menhgia`, `loaithe`, `uid`, `tinhtrang`) VALUES ('".$card_code."','".$card_serial."','".$card_amount."','".$card_type."','".$name."','".$tr."')");
				$err = '<script>alert("Thẻ của bạn đang đợi duyệt !"); </script>';
				echo $err;
				}
				}
            }
        }
    }