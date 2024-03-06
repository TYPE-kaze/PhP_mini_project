<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
    <h1>Đăng nhập</h1>
    <form action="/user/login" method="POST">
        <div>
            <label for="username">Tên tài khoản:</label>
            <input id="username" name="username" type="text">
        </div>

        <div>
            <label for="password">Mật khẩu:</label>
            <input id="password" name="password" type="password">
        </div>

        <div>
            <input type="checkbox" id="miss_me" name="miss_me" />
            <label for="miss_me">Nhớ đăng nhập</label>
        </div>

        <button type="submit">Đăng nhập</button>
    </form>
    <a href="/">Trang chủ</a>
</body>
</html>