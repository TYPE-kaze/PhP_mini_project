<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-3">
        <form action="/patient/add?controller=patient&action=add" method="post">
        <label for="name">Họ và tên</label>
            <input type="text" name="fullname" class="form-control my-3" placeholder="Nhập họ và tên..." required/>
            <label for="dateOfBirth">Ngày sinh</label>
            <input type="date" name="dateOfBirth" class="form-control my-3" required />
            <label for="address">Địa chỉ</label>
            <input type="text" name="address" class="form-control my-3" placeholder="Nhập địa chỉ..." required />
            <label for="mobile">Điện thoại</label>
            <input type="tel" name="mobile" class="form-control my-3" placeholder="Nhập số điện thoại..." required />
            <input type="submit" value="Thêm mới" class="btn btn-danger my-3"/>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>