<?php
// Code by Đoàn Bảo

// Cách để tích hợp AuthMe Register vào website
// 1. Cần xác định được IP SQL của host bạn đang dùng (Trừ khi bạn mở bằng chính Windows nó sẽ tự động cho là localhost)
// 2. Cần tạo một database, một user và password (Không cần thiết trên Windows, nó sẽ tự cho là Username : root, Password : "Để trống")
// 3. Config phần database ở AuthMeController.php (Dòng 119)
// 4. Up SQL lên database
// 5. Vào authme, config các phần liên quan đến MySQL vào
// 6. Vào MySQL Từ Xa, cho ip của vps của bạn vào và nhấn ok
// 7. Chạy server lên
// 8. Thử đăng ký tài khoản trên web sau đó đăng nhập trên server
// Chúc bạn thành công
require("Iz_Index/head.php");
?>
<?php
error_reporting(E_ALL);

require 'Iz_Shower/AuthMeController.php';

// Change this to the file of the hash encryption you need, e.g. Bcrypt.php or Sha256.php
require 'Iz_Shower/Sha256.php';
// The class name must correspond to the file you have in require above! e.g. require 'Sha256.php'; and new Sha256();
$authme_controller = new Sha256();

$action = get_from_post_or_empty('action');
$user = get_from_post_or_empty('username');
$pass = get_from_post_or_empty('password');
$email = get_from_post_or_empty('email');

$was_successful = false;
if ($action && $user && $pass) {
    if ($action === 'Đăng nhập') {
        $was_successful = process_login($user, $pass, $authme_controller);
    } else if ($action === 'Đăng ký') {
        $was_successful = process_register($user, $pass, $email, $authme_controller);
    }
}

if (!$was_successful) {
    echo '<br />
<center>
    <p id="all-p-card">- CONTENT -</p>
    <div class="border-content">
        <h1 id="title">ĐĂNG KÝ</h1>
            <br />
            <p id="description">Hãy đăng ký để có thể chơi server !</p>
            </br>
        <form method="POST">
            <br />
            <label for="username">Tên Người Chơi :</label>
            <br />
            <input type="text" name="username" value="' . htmlspecialchars($user) . '" class="form" />
            <br />
            <label for="password">Mật khẩu :</label>
            <br />
            <input type="password" name="password"' . htmlspecialchars($pass) . '" class="form" />
            <br />
            <label for="password">Email :</label>
            <br />
            <input type="text" name="email"' . htmlspecialchars($email) . 'class="form" />
            <br />
            <br />
            <br />
            <i>Bấm vào đây để đăng ký tài khoản : </i>
            <br />
            <input type="submit" name="action" value="Đăng ký" class="btn btn-success" />
            <br />
            <br />
            <br />
</center>
</form>
    </div>
    <br />';
}

function get_from_post_or_empty($index_name) {
    return trim(
        filter_input(INPUT_POST, $index_name, FILTER_UNSAFE_RAW, FILTER_REQUIRE_SCALAR | FILTER_FLAG_STRIP_LOW)
            ?: '');
}


// Login logic
function process_login($user, $pass, AuthMeController $controller) {
    if ($controller->checkPassword($user, $pass)) {
        printf('<script type="text/javascript">alert("Đã đăng nhập thành công")</script>');
        echo 'Đã đăng nhập thành công!';
        return true;
    } else {
        echo '<script type="text/javascript">alert("Sai tài khoản hoặc mật khẩu")</script>';
    }
    return false;
}

// Register logic
function process_register($user, $pass, $email, AuthMeController $controller) {
    if ($controller->isUserRegistered($user)) {
        echo '<script type="text/javascript">alert("Tài khoản đã tồn tại")</script>';
    } else if (!is_email_valid($email)) {
        echo '<script type="text/javascript">alert("Email không hợp lệ")</script>';
    } else {
        // Note that we don't validate the password or username at all in this demo...
        $register_success = $controller->register($user, $pass, $email);
        if ($register_success) {
            printf('<script type="text/javascript">alert("Đã tạo thành công tài khoản !")</script>');
            echo '<p style="color: white;">Cảm ơn đã đăng ký</p>';
            return true;
        } else {
            echo '<script type="text/javascript">alert("Có lỗi xảy ra khi tạo tài khoản")</script>';
        }
    }
    return false;
}

function is_email_valid($email) {
    return trim($email) === ''
        ? true // accept no email
        : filter_var($email, FILTER_VALIDATE_EMAIL);
}

?>
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