<!doctype html>
<html lang="en">
    <head>
        <title>Xóa danh mục</title>
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
        $error = false;
        if (isset($_GET['cateid']) && !empty($_GET['cateid'])) {
            include 'connect_db.php';
            $sql = "DELETE FROM category WHERE cateid = " . $_GET['cateid'];
            $result = mysqli_query($conn, $sql);
            if (!$result) {
                $error = "Không thể xóa danh mục.";
            }
            mysqli_close($conn);
            if ($error !== false) {
                ?>
                <div id="error-notify" class="box-content">
                    <h1>Thông báo</h1>
                    <h4><?= $error ?></h4>
                    <a href="http://localhost/home/admin/QL_danhmuc.php">Danh sách danh mục</a>
                </div>
            <?php } else { ?>
                <div id="success-notify" class="box-content">
                    <h1>Xóa danh mục thành công</h1>
                    <a href="http://localhost/home/admin/QL_danhmuc.php">Danh sách danh mục</a>
                </div>
            <?php } ?>
        <?php } ?>
    </body>
</html>
