<!doctype html>
<html lang="en">

<head>
    <title>Đăng ký</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/register.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <style>
        body {
            background-image: url("./image/2.jpg");
            height: 600px;
            width: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2 class="title-left">Đại học Nguyễn Tất Thành</h2>
                <p text-left>Trường đại học Nguyễn Tất Thành được đặt tại Quận 4. Từ Trường đến trung tâm thành phố Hồ chí Minh chỉ mất 5 phút đi bằng ô-tô. Trường nằm cạnh bờ sông Sài Gòn lộng gió. Từ trên sân thượng tòa nhà, phóng tầm mắt ra xa, chúng ta có thể thấy bao quát toàn thành phố. Phía trước tòa nhà là dòng sông Sài Gòn dịu dàng uốn quanh, với nhiều tàu thuyền qua lại.</p>
            </div>
            <div class="col-md-5">
                <h3>Đăng kí</h3>
                <hr>
                <form action="process-register.php" method="POST">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" name="fullname" placeholder="Họ và tên">
                    </div>
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" class="form-control" name="username" placeholder="Username của bạn">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password của bạn">
                    </div>
                    <div class="form-group">
                        <label>Repassword</label>
                        <input type="password" class="form-control" name="repassword" placeholder="Nhập lại password của bạn">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Tên của bạn">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="tel" class="form-control" name="phone" placeholder="Nhập số điện thoại của bạn">
                    </div>
                    <div class="form-group">
                        <input type="checkbox" required name="">
                        <label>Tôi đồng ý điều khoản sử dụng</label>
                    </div>
                        <input class="btn btn-info" type="submit" name="register" value="Đăng ký"> 
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>