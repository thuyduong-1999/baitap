<!doctype html>
<html lang="en">
    <head>
        <title>Sửa tài khoản</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
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
        include 'connect_db.php';
        $error = false;
        if (isset($_GET['action']) && $_GET['action'] == 'edit') {
            if (isset($_POST['userid']) && !empty($_POST['userid']) && isset($_POST['password']) && !empty($_POST['password'])) {
                $sql = "UPDATE users SET password = MD5('" . $_POST['password'] . "'), 'userlevel' = " . $_POST['userlevel'] . " WHERE users.userid = " . $_POST['userid'] . ";";
                $result = mysqli_query($conn, $sql);
               
                mysqli_close($conn);
                if ($error !== false) {
                    ?>
                    <div id="error-notify" class="box-content">
                        <h1>Thông báo</h1>
                        <h4><?= $error ?></h4>
                        <a href="http://localhost/home/admin/QL_taikhoan.php">Danh sách tài khoản</a>
                    </div>
                <?php } else { ?>
                    <div id="edit-notify" class="box-content">
                        <h1><?= ($error !== false) ? $error : "Sửa tài khoản thành công" ?></h1>
                        <a href="http://localhost/home/admin/QL_taikhoan.php">Danh sách tài khoản</a>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <div id="edit-notify" class="box-content">
                    <h1>Vui lòng nhập đủ thông tin để sửa tài khoản</h1>
                    <a href="edit_user.php?userid=<?= $_POST['userid'] ?>">Quay lại sửa tài khoản</a>
                </div>
            <?php
            }
        } else {
            $sql = "SELECT * FROM users where userid=" . $_GET['userid'];
            $result = mysqli_query($conn, $sql);
            $user = $result->fetch_assoc();
            mysqli_close($conn);
            if (!empty($user)) {
                ?>
                <div id="edit_user" class="box-content">
                    <h1>Sửa tài khoản "<?= $user['username'] ?>"</h1>
                    <form action="edit_user.php?action=edit" method="Post" autocomplete="off">
                        <label>Password</label></br>
                        <input type="hidden" name="userid" value="<?= $userid['userid'] ?>" />
                        <input type="password" name="password" value="" />
                        <select name="userlevel">
                            <option <?php if (!empty($user['userlevel'])) { ?> selected <?php } ?> value="1">Admin</option>
                            <option <?php if (empty($user['userlevel'])) { ?> selected <?php } ?>  value="0">Khách</option>
                        </select>
                        <br><br>
                        <input type="submit" value="Edit" />
                    </form>
                </div>
            <?php
            }
        }
        ?>
    </body>
</html>
 