<?php
    include'connect_db.php'; 
  
        if (isset($_POST['index'])) 
        {
            header("location: index.php");
            ob_enf_fluck();
        }
        if (isset($_POST['registration'])) 
        {
            header("location: register.php");
            ob_enf_fluck();
        }
     
        if(isset($_POST['login']))
        {
            if(!empty($_POST['username']) && !empty($_POST['password']))
            {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $sql = mysqli_query($conn,"SELECT * from users where username = '{$username}'");
                $row=mysqli_fetch_assoc($sql);

                if(password_verify($password, $row['password']))
                {
                    if($row['userlevel']==1)
                    {
                        header("location: admin/admin.php");
                    }
                    else if($row['userlevel']==0)
                    {
                        header("location: index.php");
                    }
                }
                else
                {
                    echo 
                    "<div style='color: red; font-weight: bolder;'>
                        Tên đăng nhập hoặc mật khẩu không đúng !!!
                    </div>";
                }
                ?>               
    <?php }
            else 
            {
                echo
                "<div style='color: red; font-weight: bolder'>
                    Vui lòng nhập đủ thông tin !!!
                </div>"; 
            }
        }
    ?>
            <a href="http://localhost/home/login.php">Quay lại đăng nhập</a>

