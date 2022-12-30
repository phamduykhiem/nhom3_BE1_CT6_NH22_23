<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Google font -->
        <link
            href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700"
            rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
        <!-- Slick -->
        <link type="text/css" rel="stylesheet" href="css/slick.css"/>
        <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

        <!-- nouislider -->
        <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <title>Document</title>
        <style>
        body
        {
            background-color: black;
            
        }
        .kk .col-md-6
        {
            border-radius: 3px;
            text-align: center;
            background-color: white !important;
            padding-bottom: 50px;
        }
        .hh
        {
            padding-top: 50px;
        }
        .kk .tim{
            padding-top: 10px !important;
        }
        .kk form{
            padding-top: 30px !important;
        }
        .kk input
        {
            height: 35px;
            width: 400px;
        }
        .cach
        {
            padding-top: 30px;
        }
        .ll
        {
            color: #d90429;
        }
        .kk a
        {
            color: white;
        }
        .kk button {
            color: white;
            border: none;
            border-radius: 3px;
            background-color: #d90429;
            font-weight: 500;
            margin: 0 40px;
            width: 100px;
            height: 40px;
            font-size: medium;
        }
    </style>
    </head>
    <body>
        <div class="haha">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="#" class="logo">
                                <img src="./img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hh">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="kk">
                        <div class="col-md-6">
                            <div class="tim">
                                <form action="reg.php" method="post" require>
                                    <H2>ĐĂNG KÝ <nav class="ll">TÀI KHOẢN</nav></H1>
                                    <div class="cach">
                                        <label for="fullname">Tên đầy đủ:</label><br>
                                        <input type="text" id="fullname"
                                            name="fullname"><br><br>
                                        <label for="username">Tên đăng nhập:</label><br>
                                        <input type="text" id="username"
                                            name="username"><br><br>
                                        <label for="pwd">Mật khẩu:</label><br>
                                        <input type="password" id="pwd"
                                            name="pwd"><br><br>
                                        <label for="rpwd">Nhập lại mật khẩu:</label><br>
                                        <input type="password" id="rpwd"
                                            name="rpwd"><br><br>
                                        <label for="sdt">Số điện thoại:</label><br>
                                        <input type="text" id="sdt" name="sdt"><br>
                                        <label for="email">Email:</label><br><br>
                                        <input type="text" id="email"
                                            name="email"><br><br>
                                        <button type="submit">Đăng ký<button><a
                                                    href="login.php">Quay lại</a></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </body>
    </html>