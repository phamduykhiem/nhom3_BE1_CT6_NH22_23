<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="loginn.css">
</head>
<body>
  <?php session_start(); ?>
    <div id="banner">
      <img src="img/logo.png" alt="">
    </div>
    <div id="content">
            <div id="title">
            <H2>ĐĂNG NHẬP <nav id="color">TÀI KHOẢN</nav></H1>
            </div>
            <div id="input">
                <form action="" method="post" autocomplete="off">
               
                <label for=""  style="font-weight:bold;" >Tên đăng nhập:</label><br>
                <input type="text" name="username" id=""><br>
                <label for=""  style="font-weight:bold;" >Mật khẩu:</label><br>
                <input type="password" name="password" id="">
                <table>
               <tr>
                <th><button type="submit">ĐĂNG NHẬP</button></th>
                <th><a href="register.php">ĐĂNG KÝ</a></th>
               </tr>
                </table>
                </form>
                <br>
                <?php
  require "db.php";
  require "config.php";
  require "user.php";
  $user=new User;
  $getuser=$user->getALLinfo();
  $a=0;
if(isset($_SESSION['user']))
{
  header("location:index.php");
}
else if(isset($_POST['username'])&&isset($_POST['password']))
{
$user=$_POST['username'];
$pass=$_POST['password'];
foreach($getuser as $value)
{
  if($value['username']==$user)
  {
      if($value['password']==md5($pass))
      {
        $_SESSION['user'] = $value['uid'];
          $a=1;
      }
  }
}
if($a==1)
{
  header("location:index.php");
}
else
{
   echo "<b> Sai tài khoản hoặc mật khẩu </b>";
}
}
?>
            </div>
    </div>
    <script>      
            const banner = document.getElementById("banner"); 
     banner.addEventListener("click", function(){
            location.replace("index.php");
        });</script>
</body>
</html>