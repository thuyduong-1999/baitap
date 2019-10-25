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
      include'admin.php';
   ?>
      <h2>Quản lý thể loại</h2>
   <div>
                  <table class="list-course" border="1">
                     <tr class="row-first">
                        <td width="10"><input type="checkbox"></td>
                        <td width="30">Sửa</td>
                        <td width="30">Xóa</td>
                        <td width="100">Mã thể loại</td>
                        <td width="150">Tên thể loại</td>													
                        <td width="150">Danh mục</td>        
                     </tr>

                     <tr>
                        <td width="10"><input type="checkbox"></td>
                        <td><a href="#"><img src="image/edit.gif"></a></td>
                        <td><a href="#"><img src="image/deleted.jpg"></a></td>
                        <td>1</td>
                        <td>Giới thiệu chung</td>
                        <td>Giới thiệu</td>
                     </tr>
                     <tr>
                        <td width="10"><input type="checkbox"></td>
                        <td><a href="#"><img src="image/edit.gif"></a></td>
                        <td><a href="#"><img src="image/deleted.jpg"></a></td>
                        <td>2</td>
                        <td>Toàn cảnh ĐH Nguyễn Tất Thành</td>
                        <td>Giới thiệu</td>
                     </tr>
                     <tr>
                        <td width="10"><input type="checkbox"></td>
                        <td><a href="#"><img src="image/edit.gif"></a></td>
                        <td><a href="#"><img src="image/deleted.jpg"></a></td>
                        <td>3</td>
                        <td>Hệ thống Cơ sở vật chất</td>
                        <td>Giới thiệu</td>
                     </tr>
                     <tr>
                        <td width="10"><input type="checkbox"></td>
                        <td><a href="#"><img src="image/edit.gif"></a></td>
                        <td><a href="#"><img src="image/deleted.jpg"></a></td>
                        <td>4</td>
                        <td>Thông tin công khai</td>
                        <td>Giới thiệu</td>
                     </tr>
                     <tr>
                        <td width="10"><input type="checkbox"></td>
                        <td><a href="#"><img src="image/edit.gif"></a></td>
                        <td><a href="#"><img src="image/deleted.jpg"></a></td>
                        <td>5</td>
                        <td>Đảo bảo chất lượng</td>
                        <td>Giới thiệu</td>
                     </tr>
                     <tr>
                        <td width="10"><input type="checkbox"></td>
                        <td><a href="#"><img src="image/edit.gif"></a></td>
                        <td><a href="#"><img src="image/deleted.jpg"></a></td>
                        <td>6</td>
                        <td>Phát triển bền vững</td>
                        <td>Giới thiệu</td>
                     </tr>
                     <tr>
                        <td width="10"><input type="checkbox"></td>
                        <td><a href="#"><img src="image/edit.gif"></a></td>
                        <td><a href="#"><img src="image/deleted.jpg"></a></td>
                        <td>7</td>
                        <td>Môi trường học tập</td>
                        <td>Giới thiệu</td>
                     </tr>
                     <tr>
                        <td width="10"><input type="checkbox"></td>
                        <td><a href="#"><img src="image/edit.gif"></a></td>
                        <td><a href="#"><img src="image/deleted.jpg"></a></td>
                        <td>2</td>
                        <td>Toàn cảnh ĐH Nguyễn Tất Thành</td>
                        <td>Tuyển sinh</td>
                     </tr>
                  </table>
                  <div class="task">
                           <a href="themuser.html"><input type="button" value="Thêm mới" name="Thêm mới"></a>
                     <input type="button" name="Xóa" value="Xóa"> 
                     <a href="suauser.html"><input type="button" name="Cập nhật" value="Cập nhật"></a>
                  </div>
               </div>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>