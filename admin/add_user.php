<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Tạo tài khoản mới</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .box-content{
                margin: 0 auto;
                width: 800px;
                border: 1px solid #ccc;
                text-align: center;
                padding: 20px;
            }
            #create_user form{
                width: 200px;
                margin: 40px auto;
            }
            #create_user form input{
                margin: 5px 0;
            }
        </style>
    </head>
    <body>
        <?php
        $error = false;
        if (isset($_GET['action']) && $_GET['action'] == 'create') {
            if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
                include 'connect_db.php';
                // Thêm bản ghi vào cơ sở dữ liệu
                $result = mysqli_query($conn, "INSERT INTO users (fullname,username,password,email,phone) VALUES (" . $_POST['fullname'] . "', '" . $_POST['username'] . "', MD5('" . $_POST['password'] . "'), '" . $_POST['email'] . "','" . $_POST['phone'] . "'");
                if (!$result) {
                    if (strpos(mysqli_error($conn), "Duplicate entry") !== FALSE) {
                        $error = "Tài khoản đã tồn tại. Bạn vui lòng chọn tài khoản khác.";
                    }
                }
                mysqli_close($conn);
                if ($error !== false) {
                    ?>
                    <div id="error-notify" class="box-content">
                        <h1>Thông báo</h1>
                        <h4><?= $error ?></h4>
                        <a href="add_user.php">Tạo tài khoản khác</a>
                    </div>
                <?php } else { ?>
                    <div id="success-notify" class="box-content">
                        <h1>Chúc mừng</h1>
                        <h4>Bạn đã tạo thành công tài khoản <?= $_POST['username'] ?></h4>
                        <a href="QL_taikhoan.php">Danh sách tài khoản</a>
                    </div>
                <?php } ?>
            <?php } ?>
        <?php } else { ?>
            <div id="add_user" class="box-content">
                <h1>Tạo tài khoản</h1>
                <form action="add_user.php?action=create" method="Post" autocomplete="off">
                    <label>Fullname</label></br>
                    <input type="text" name="fullname" value="" />
                    <br>
                    <label>Username</label></br>
                    <input type="text" name="username" value="" />
                    <br>
                    <label>Password</label></br>
                    <input type="password" name="password" value="" />
                    <br>
                    <label>Email</label></br>
                    <input type="text" name="email" value="" />
                    <br>
                    <label>Phone</label></br>
                    <input type="text" name="phone" value="" />
                    <br><br>
                    <input type="submit" value="Create" />
                </form> 
            </div>
        <?php } ?>
    </body>
</html>
