<?php
    require "connect.php";
    if(isset($_POST['fullname'])&&isset($_POST['username'])&&isset($_POST['pwd'])&&isset($_POST['sdt'])&&isset($_POST['email']))
    {
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        $sql = "INSERT INTO `user` (`fullname`,`username`,`password`,`sdt`,`email`) VALUES('$fullname','$username',md5('$pwd'),'$sdt','$email')";
        if($conn->query($sql)===TRUE)
        {
            header( "refresh:5;url=login.php" ); 
            echo '<script language="javascript" type="text/javascript">
            alert("Đăng ký thành công");
            window.location = "login.php";
          </script>';
        }
        else
        {
            header( "refresh:5;url=login.php" ); 
            echo '<script language="javascript" type="text/javascript">
            alert("Đăng ký thất bại");
            window.location = "register.php";
          </script>';
        }
    }
?>