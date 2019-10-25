<!doctype html>
<html lang="en">
    <head>
        <title>Sửa danh mục</title>
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
            if (isset($_POST['cateid']) && !empty($_POST['cateid']) && isset($_POST['catename']) && !empty($_POST['catename'])  && isset($_POST['icon']) && !empty($_POST['icon'])) {
                 echo $_POST['cateid'];
                $sql = "UPDATE category SET  'catename' = " . $_POST['catename'] . " ,'icon' = " . $_POST['icon'] . "WHERE category.cateid = " . $_POST['cateid'] . ";";
                $result = mysqli_query($conn, $sql);
                
                mysqli_close($conn);
                if ($error != false) {
                    ?>
                    <div id="error-notify" class="box-content">
                        <h1>Thông báo</h1>
                        <h4><?= $error ?></h4>
                        <a href="http://localhost/home/admin/QL_danhmuc.php">Danh sách danh mục</a>
                    </div>
                <?php } else { ?>
                    <div id="edit-notify" class="box-content">
                        <h1><?= ($error !== false) ? $error : "Sửa danh mục thành công" ?></h1>
                        <a href="http://localhost/home/admin/QL_danhmuc.php">Danh sách danh mục</a>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <div id="edit-notify" class="box-content">
                    <h1>Vui lòng nhập đủ thông tin để sửa danh mục</h1>
                    <a href="edit_category.php?cateid=<?= $_POST['cateid'] ?>">Quay lại sửa danh mục</a>
                </div>
            <?php
            }
        } else {
            $sql = "SELECT * FROM category where cateid=" . $_GET['cateid'];
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC)
           // mysqli_close($conn);
            if (!empty($)) {
                ?>
                <div id="edit_category" class="box-content">
                    <h1>Sửa danh mục"<?= $cate['catename'] ?>"</h1>
                    <form action="edit_category.php?action=edit" method="Post" autocomplete="off">
                        <label>catename</label></br>
                        <input type="hidden" name="cateid" value="<?= $cateid['cateid'] ?>" />
                        <input type="text" name="catename" value="<?= $cateid['cateid'] ?>" />
                        <label>icon</label></br>
                        <input type="text" name="icon" value="" />
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
 