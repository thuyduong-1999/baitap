<!doctype html>
<html lang="en">
  <head>
    <title>Trang quản lý admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet"  type="text/css" href="style.css">
  </head>
  <body>
  <?php
      include'connect_db.php';
      include'admin.php';
      $sql = "Select * from category";
      $result = mysqli_query($conn,$sql);
   ?>
  <h2>Quản lý danh mục</h2>
  <div>
					<table class="list-course" border="1">
						<tr class="row-first">
							<td width="30">Sửa</td>
							<td width="30">Xóa</td>
							<td width="100">Mã danh mục</td>
							<td width="150">Tên danh mục</td>													
							<td width="150">Icon</td>
						</tr>
						<?php
                        while ($row = mysqli_fetch_array($result)) {
                     ?>
                     <tr>
                           <td><a href="edit_category.php?cateid=<?= $row['cateid'] ?>&catename=<?= $row['catename'] ?>" ><img src="image/edit.gif"></a></td>
                           <td><a onclick="return confirm('Bạn có muốn xóa không?')"href="delete_category.php?cateid=<?= $row['cateid'] ?>"><img src="image/deleted.jpg"></a></td>
                           <td><?= $row['cateid'] ?></td>
                           <td><?= $row['catename'] ?></td>
                           <td><?= $row['icon'] ?></td>
                     </tr>
                  <?php } ?>
					</table>
					<div class="task">
                  <a href="http://localhost/home/admin/add_category.php"><input type="button" value="Thêm mới" name="Thêm mới"></a>
						
					</div>
			    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>