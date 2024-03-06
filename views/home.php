<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>
<body>
    <?php if (isset($flash)): ?>
        <p><?php echo $flash ?></p>
    <?php endif ?>

    <h1>Trang chủ</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit veniam ratione maxime animi? Nostrum ab a sunt at, ipsam illum porro dolorem officiis ipsum neque et, modi animi laborum omnis?</p>
    
    <?php if (\App\Helper::isLoggedIn()): ?>
        <form action="/user/logout" method="POST">
            <button type="submit">Đăng xuất</button>            
        </form>
    <?php else :?>
        <a href="/user/login">Đăng nhập</a>
    <?php endif ?>
    <a href="/tweet">Danh sách Tweet</a>

</body>
</html>