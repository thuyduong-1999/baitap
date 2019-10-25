<?php  
	include'connect_db.php';
?>
<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title>Trường Đại Học Nguyễn Tất Thành </title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/login.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <!--jquery-->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <style>
        body {
            background-image: url("./image/1.jpg");
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
    <div class="header">  
        <h1>ACCOUNT LOGIN</h1>
    </div>
    <div class="container">
        <div class="row">
            <form action="process-login.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="username"  placeholder="Username">
                    <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password"  placeholder="Password">
                    <span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                </div>
                <input class="login" type="submit" name="login" value="Login" >
                <input class="registration" type="submit" name="registration" value="Đăng ký">
				<input class="index" type="submit" name="index" value="Trang chủ">
            </form>

        </div>
    </div>
</body>
<script type="text/javascript" src="jquery/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</html>