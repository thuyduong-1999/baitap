<?php
        include'connect_db.php';
        if(isset($_POST['register']))
        {
            if(!empty($_POST['fullname']) && !empty($_POST['username'])&&
                !empty($_POST['password'])&& !empty($_POST['repassword'])&&
                !empty($_POST['email'])&& !empty($_POST['phone'])
                )
            {
                $fullname = $_POST["fullname"];
                $username = $_POST["username"];
                $password = $_POST["password"];
                $repassword = $_POST["repassword"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];

                // băm mật khẩu
                $password = password_hash($password, PASSWORD_DEFAULT);

                // kết nối với database
                $sql= mysqli_query($conn,"SELECT * from users where username = '$username'");
                $count = mysqli_num_rows($sql);

                if($count==1)
                {
                    echo
                    "<div style='color: red; font-weight: bolder; margin-left: 2%;'>
                        Tài khoản đã tồn tại, vui lòng quay lại đăng ký !!!
                    </div>";
                    
                }
                
                else if($count==0)
                {
                    // đẩy dl lên db
                    mysqli_query($conn,"INSERT into users (fullname, username, password, email, phone) values ('$fullname','$username', '$password','$email','$phone')") or die(mysqli_error($conn));
                    echo
                    "<div style='color: red; font-weight: bolder'> 
                        Đăng ký thành công, mời đăng nhập :))
                    </div>";
                }
            }
            else 
            {
                echo
                "<div style='color: red; font-weight: bolder'>
                    Vui lòng quay lại nhập đầy đủ thông tin !!!
                </div>"; 
            }
        }
?>
 <a href="http://localhost/home/login.php">Đăng nhập</a>      
