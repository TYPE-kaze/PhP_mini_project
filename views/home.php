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
    
    <?php if (!array_key_exists('is_logged_in', $_SESSION) || $_SESSION['is_logged_in'] === false): ?>
        <a href="/user/login">Đăng nhập</a>
    <?php else :?>
        <form action="/user/logout" method="POST">
            <button type="submit">Đăng xuất</button>            
        </form>
    <?php endif ?>
</body>
</html>