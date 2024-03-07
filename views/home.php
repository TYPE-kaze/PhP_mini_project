<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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