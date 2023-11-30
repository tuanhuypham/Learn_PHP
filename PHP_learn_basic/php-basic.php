<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>basic-php</title>
    
</head>
<body>
    <h1>PHP-basic</h1>
    <form action="" method="post" onsubmit="return checkLogin()">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" placeholder="Enter your ID" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
        <br>

        <input type="submit" value="Login">
    </form>
    <?php
        // kiểu dữ liệu
        // chuỗi
        // echo"xin chào huy";
        // echo "<br>";
        // // tạo 1 biến và xuất dữ liệu
        // $fullname = "Phạm Tuấn Huy";
        // echo "1 Họ và tên  $fullname <br>"; // xuất chuỗi kèm biến tạo sẵn
        // echo "2 Họ và tên {$fullname}<br>"; // xuất chuỗi bằng cách nối chuỗi kèm biến có sẵn
        // echo $fullname; // xuất chuỗi bằng biến trực tiếp
        // echo "<br>";
        // echo" 4họ và tên".$fullname;
        
        // // kiểu dữ liệu số 
        // $a = 10;
        // $b = 125;
        // $c = $a+$b;
        // echo"<br>a + b = ",$c;
        
        $loginData = array(
            "user1" => "password1",
            "user2" => "password2",
            "user3" => "password3",
            "user4" => "password4",
            "user5" => "password5"
        );
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Lấy giá trị từ ô nhập ID và mật khẩu
            $id = $_POST["id"];
            $password = $_POST["password"];
    
            // Kiểm tra xem cặp ID và mật khẩu có trùng khớp trong mảng không
            $login = isset($loginData[$id]) && $loginData[$id] == $password;
    
            // Hiển thị alert bằng mã JavaScript dựa trên kết quả đăng nhập
            if ($login) {
                echo '<script>
                alert("Đăng nhập thành công! Chào mừng ' . $id . '!");
                window.location.href = "pageUser.html";
            </script>';
        exit;
            } else {
                echo '<script>
                alert("Đăng nhập thất bại !");
                window.location.href = "ErroLogin.html";
                </script>';
        exit;
            }
        }
    ?>
    <script>
    function checkLogin() {
        // Thực hiện submit form nếu kiểm tra đúng
        return true;
    }
    </script>
</body>
</html>