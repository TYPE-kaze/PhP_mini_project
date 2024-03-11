<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Đăng nhập</title>
</head>
<body>
    
    <section class="vh-100 bg-dark" style="color: white;">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
            class="img-fluid" alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <form action="/user/login" method="POST">
            <div class="form-outline mb-4">
                <input type="text"  name="username" id="form1Example13" class="form-control form-control-lg" />
                <label class="form-label" for="form1Example13">Tên đăng nhập</label>
            </div>
            <div class="form-outline mb-4">
                <input type="password"  name="password" id="form1Example23" class="form-control form-control-lg" />
                <label class="form-label" for="form1Example23">Mật khẩu</label>
            </div>
            <div class="d-flex justify-content-around align-items-center mb-4">
                <div class="form-check">
                    <input class="form-check-input " name="miss_me" type="checkbox" id="form1Example3" checked/>
                    <label class="form-check-label" for="form1Example3"> Nhớ đăng nhập </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block"> Đăng nhập </button>
            </form>
        </div>
        </div>
    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html> 