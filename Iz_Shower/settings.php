<?php
// Code by Đoàn Bảo
// -> https://github.com/Dorakunmcvn/MinecraftSrc-for-Server-Minecraft
// Thông tin source code (Do not edit)

$name = "MinecraftSource Project";
$version = "v3.5.1";
$author = "IzSansVN";
$demo = "https://video01izsans.shopacceldorado.ga"; // Không cần và cũng không được edit
$author_github = "https://github.com/Dorakunmcvn";

// Thông tin website

$host = "https://video01izsans.shopacceldorado.ga";
$logo_location = "../beluga.PNG";
$copyright = "Design by Đoàn Bảo - GitHub : $author_github";

// Tài khoản admin
$admin_user = "doangiabao";
$admin_pass = "18112009tT";

// Trước đây phần Database, MySQL nó nằm ở đây nhưng tôi dời nó sang chỗ khác cho tiện.

// Phần đầu

$title = "MinecraftSrc Project v3";
$servername = "BELUMINE";
$home = "Trang chủ";
$thongbao = "Thông báo";
$giftcode = "Giftcode";
$event = "Sự kiện";
$donate = "Nạp thẻ";

// Liên kết cho phần trên

$link_home = "../home";
$link_thongbao = "../thong-bao";
$link_giftcode = "../giftcode";
$link_event = "../event";
$link_donate = "../nap-the";

// Home Content

$content1 = "Máy chủ có những cụm chơi nào";
$content2 = "Staff có thân thiện không";
$content3 = "Bạn có muốn tham gia cùng chúng tôi";
$description1 = "Máy chủ những cụm chơi : Skyblock, Towny,...";
$description2 = "Staff ở đây thân thiện với môi trường. Nhưng đừng chửi bậy là được :D.";
$description3 = "Bật Minecraft lên, sau đó nhập ip server : belugamine.xyz và chiến thôi !";

// Player Content
# Edit on ../js/data-port.js

$ip_server = "hypixel.net";
$ip_port = "25565"; // Có thể để trống, sẽ nhập port tự động là 25565
$logo_server = "../beluga.PNG";
require("mc_api_connection.php");
$max_player = "100000";
$line1 = "Có bao nhiêu người đang tham gia máy chủ ?";
$line2 = "Hiện tại có $mc_players / $max_player người đang tham gia máy chủ ! Tham gia ngay nào !";

// Nofication Content

$news = "Không có gì nổi bật.";

// Giftcode Content

$gift_line = "Giftcode của tháng : ????";
$gift_line_2 = "Vui lòng điền vào biểu mẫu : <a style='text-decoration: none; color: red; font-family: Arial;' href='../'>Tại đây</a>";

// Modal Show Nofication

$btnOpen = "Mở Thông Báo";
$noidung = "<p style='color: red;'>Code by $author <br />Tên: $name, Phiên bản $version. <br />Tải về tại : <a style='text-decoration: none;' href='../'><span style='color: blue;'>Link tải</span></a></p>";
$btnOK = "OK";
$btnOK_link = "$demo";
$btnClose = "Close";

// Event Content
$event_desc = "Không có gì cả.";
