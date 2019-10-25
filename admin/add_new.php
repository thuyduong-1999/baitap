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
    <style>
    .box-content{
                margin: 0 auto;
                width: 800px;
                border: 1px solid #ccc;
                text-align: center;
                padding: 20px;
            }
    </style>
  </head>
  <body>
   <?php
      include'admin.php';
      
   ?>
      <h2>Thêm tin tức</h2>
        <div class="box-content">
            <form name="edit_course" method="post">
                <table class="table-form-edit" align="center" bgcolor="#FFFFFF">
                <tr>
                    <td width="180">Tiêu đề:<br><br></td>
                    <td width="300"><input type="text" name="title"  size="40"><br><br></td>
                </tr>
                <tr>
                    <td>Hình ảnh:<br><br></td>
                    <td><input type="text" name="img" size="40"><br><br></td>
                </tr>
                <tr>
                    <td>Mô tả:<br><br></td>
                    <td><textarea cols="30" rows="5" name="discrip"></textarea><br><br></td>
                </tr>
                <tr>
                    <td>Tác giả:<br><br></td>
                    <td><input type="text" name="userid" size="40"><br><br></td>
                </tr>                   
                <tr>
                    <td>
                        <a href="user.php">
                            <input type="submit" value="Lưu lại" name="submit">
                        </a>
                        <a href="them_user.php">
                            <input type="reset" value="Làm mới" name="reset">
                        </a>
                        <br><br>
                    </td>
                </tr>
                </table>
            </form> 
            <?php 
                if(isset($_POST['submit']))
                {
                    if(!empty($_POST['title']) && !empty($_POST['img'])&& 
                        !empty($_POST['descrip'])&& !empty($_POST['userid'])
                        )
                    {
                        $title     = $_POST['title'];
                        $img       = $_POST['img'];
                        $descrip   = $_POST['descrip'];
                        $userid    = $_POST['userid'];          
                                    

                        $sql= mysqli_query($conn,"SELECT * from news where title = '$title'");
                        $count = mysqli_num_rows($sql);

                        if($count==1)
                        {
                        echo
                        "<div style='color: red; font-weight: bolder; text-align: center;'>
                            Thông tin đã tồn tại !!!
                        </div>";
                        }
                        else if($count==0)
                        {
                        // đẩy dl lên db
                        mysqli_query($conn,"INSERT into news (title, img, descrip, userid ) values('$title','$img','$descrip', '$userid')") or die(mysqli_error($conn));
                        echo
                        "<div style='color: red; font-weight: bolder; text-align: center;'> 
                            Thêm thành công :))
                        </div>";
                        }
                    }
                    else 
                    {
                        echo
                        "<div style='color: red; font-weight: bolder; text-align: center;'>
                        Vui lòng nhập đủ thông tin !!!
                        </div>"; 
                    }
                }
            ?>
        </div>
        
         
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>