# Hướng dẫn sử dụng
- Up Code lên Host là được
* Sản phẩm chỉ mang tính chất tham khảo
PHẦN NẠP THẺ :
- 1. Tạo một database
- 2. Tạo một user và cho nó vào database (Nhớ cho user full quyền)
- 3. Vào PhpMyAdmin, up file .sql vào database
- 4. Config Database ở Iz_Shower/db-config.php
- Vậy là xong.
PHẦN ĐĂNG KÝ (Kết nối AuthMe với MySQL) :
* Lưu ý : server.pro sẽ chặn kết nối nên đừng làm trên đó
- 1. Làm bước 1, 2 và 3 của phần Nạp Thẻ
- 2. Config Database ở IzShower/AuthMeController.php (Dòng 120 - 123)
- 3. Vào file server của bạn và config plugin AuthMe những dòng sau :
- mySQLHost: 'Host SQL của bạn'
- mySQLPort: '3306' (Để nguyên là 3306 - Nếu port khác thì chỉnh)
- mySQLUsername: 'Username đã tạo'
- mySQLPassword: 'Password của Username đã tạo'
- mySQLDatabase: 'Tên Database'
-> Những phần trong database cần chỉnh như sau :
- mySQLTablename: users
- mySQLColumnId: id
- mySQLColumnName: username
- mySQLRealName: realname
- mySQLColumnPassword: password
- mySQLColumnEmail: email
- mySQLColumnLogged: isLogged
- mySQLColumnHasSession: hasSession
- mySQLColumnIp: ip
- mySQLColumnLastLogin: lastlogin
- mySQLColumnRegisterDate: regdate
- mySQLColumnRegisterIp: regip
