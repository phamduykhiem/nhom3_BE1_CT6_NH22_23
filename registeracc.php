<?php
 require "db.php";
 require "config.php";
 require "connect.php";
 session_start();
if(isset($_POST['fullname'])&&isset($_POST['email'])&&isset($_POST['pass'])&&isset($_POST['retypepass'])&&$_POST['terms']=='agree')
{
  $mail=$_POST['email'];
  $pass=$_POST['pass'];
  $fullname=$_POST['fullname'];
  $sql = "INSERT INTO `admin` (`fullname`,`email`,`pass`) VALUES('$fullname','$mail','$pass')";
  $_SESSION['admin']['email']=$mail;
  $_SESSION['admin']['pass']=$pass;
  if($conn->query($sql)===TRUE)
  {
    header( "refresh:5;url=registeracc.php" ); 
    echo '<script language="javascript" type="text/javascript">
    alert("Đăng ký thành công");
    window.location = "login.html";
  </script>';
  }else if($conn->query($sql)===FALSE)
  {
    header( "refresh:5;url=registeracc.php" ); 
    echo '<script language="javascript" type="text/javascript">
    alert("Đăng ký thất bại");
    window.location = "register.php";
  </script>';
  }
}else if(!isset($_POST['fullname'])||!isset($_POST['email'])||!isset($_POST['pass'])||!isset($_POST['retypepass'])||!isset($_POST['terms']))
{
  header( "refresh:5;url=registeracc.php" ); 
  echo '<script language="javascript" type="text/javascript">
  alert("Vui lòng điền đủ thông tin");
  window.location = "register.php";
</script>';
}
?>