<!doctype html>
<html lang="en">
  <head>
    <title>Danh sách tin tức</title>
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
      include'connect_db.php';
   ?>
      <h2>Quản lý tin tức</h2>
         <div class="main">
         <form method="get">
            <?php 
               $sql = mysqli_query($conn,"select * from news") or die(myqli_error($conn));
                  if (mysqli_num_rows($sql) > 0) {
                  $i=0; 
            ?>
            <table class="list-course" border="1">
               <tr class="row-first">
                     <td width="40">Sửa</td>
                     <td width="40">Xóa</a></td>
                     <td width="200">Tiêu đề</td>
                     <td width="200">Hình ảnh</td>
                     <td width="350">Mô tả</td>
                     <td width="100">Tác giả</td>
               </tr>

               <?php while($row=mysqli_fetch_assoc($sql)) {
                        $i++; ?>
      
               <tr>
                     <td><a href="edit_new.php"><img src="image/edit.gif"></a></td>
                     <td><a href="delete_new.php"><img src="image/deleted.jpg"></a></td> 
                     <td><?php echo $row['title']; ?></td>
                     <td><?php echo $row['img']; ?></td>
                     <td><?php echo $row['descrip']; ?></td>
                     <td><?php echo $row['newid']; ?></td>  
               </tr>
                  
            <?php }} ?>
            </table>
         </form>
         </div>
            <div class="task">
                     <a href="add_new.php"><input type="button" value="Thêm mới" name="Thêm mới"></a>
            </div>
         </div>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>