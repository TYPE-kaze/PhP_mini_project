<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h3 class="text-center text-uppercase text-success my-3">Quản lý bệnh nhân</h3>
        <div class="d-flex justify-content-between">
            <a href="/patient/add" class="btn btn-success">Thêm mới</a>
            <form action="/user/logout" method="POST">
                <button class="btn btn-danger" type="submit">Đăng xuất</button>            
            </form>
        </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Mã bệnh nhân</th>
                <th scope="col">Họ và tên</th>
                <th scope="col">Ngày sinh</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Điện thoại</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($patients as $patient) {
                ?>
                        <tr>
                            <th scope="row"><?= $patient->getId() ?></th>
                            <td><?= $patient->getFullName() ?></td>
                            <td><?= $patient->getDateOfBirth() ?></td>
                            <td><?= $patient->getAddress() ?></td>
                            <td><?= $patient->getMobile() ?></td>
                            <td>
                                <a href="/patient/edit?id=<?=$patient->getId(); ?>" class="btn btn-primary btn-sm">Sửa</a>
                            </td>
                            <td>
                                <a href="/patient/delete?id=<?= $patient->getId(); ?>" class="btn btn-danger btn-sm">Xóa</a>
                            </td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>