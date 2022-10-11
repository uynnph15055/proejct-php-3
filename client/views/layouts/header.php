<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../assets/Css/base.css">
    <link rel="stylesheet" href="./../assets/Css/cart-header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0"
        nonce="vWDw95v7"></script>
</head>

<body>
    <div id="fb-root"></div>
    <div class="container">
        <header class="header">
            <div class="header-top">
                <p>Chuyên thiết bị điện máy cao cấp</p>
            </div>
            <div class="header-main padding-container">
                <div class="header-main_log">
                    <span><i class="fa-solid fa-laptop-medical"></i> PHỤ KIỆN </span>
                </div>
                <form action="?url=tim-kiem-san-pham" method="POST" class="header-search_form-box">
                    <input class="header-search_form-input" name="key_word" type="text" placeholder="Tìm kiếm sản phẩm">
                    <button class="header-search_btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <div class="header-phone header-main_sub">
                    <p><img width="40px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaZ5IqGOGPSaX2GjKs_0gs83Im_JcDIV6cgg&usqp=CAU" alt=""></p>
                    <div class="" style="margin-left:10px">
                        <span>Hotline:</span>
                        <br>
                        <p>1900.636.099
                        </p>
                    </div>
                </div>

                <?php if(isset($user)){ ?>
                <div class="header-login  header-main_sub">
                    <p>
                        <td><img width="30px" style="height:30px;border-radius:30px;margin-right:10px"
                                src="../upload/<?=$user['kh_avatar']?>" alt=""></td>
                    </p>
                    <div class="">
                        <p lass="name_user" style="font-weight: bold;cursor: pointer;"><?=$user['kh_name']?> </p>
                        <a href="?logout">Đăng xuất</a>
                    </div>
                </div>
                <?php }else{ ?>
                <div class="header-login  header-main_sub">
                    <p><i class="fa-solid icon fa-user"></i></p>
                    <div class="">
                        <span> <a href="?dang-nhap">Đăng nhập</a>/ <a href="?dang-ky">Đăng ký</a> </span>

                        <br>
                        <p>Tài khoản của tôi <i class="fa-solid fa-caret-down"></i>
                        </p>
                    </div>
                </div>
                <?php } ?>
                <a class="header-cart header-main_sub" href="index.php?url=gio-hang">
                    <div class="header-icon-cart">
                        <p><i class="fa-solid icon fa-cart-shopping"></i></p>
                        <span><?= isset($_SESSION["cart"]) ?  count($_SESSION["cart"]) : 0;?></span>
                    </div>
                    <div class="">
                        <p>Giỏ hàng
                        </p>
                    </div>
                </a>

            </div>
            <div class="header-menu padding-container">
                <ul class="header-menu_list">
                    <li class="header-menu-item"><a href="index.php" class="header-menu-item-link">Trang chủ </a></li>
                    <li class="header-menu-item"><a href="index.php?url=" class="header-menu-item-link">Giới thiệu</a>
                    </li>
                    <li class="header-menu-item"><a href="index.php?url=san-pham" class="header-menu-item-link">Sản phẩm
                            <i class="fa-solid fa-caret-down"></i></a></li>
                    <li class="header-menu-item"><a href="index.php?url=lien-he" class="header-menu-item-link">Liên
                            hệ</a></li>
                </ul>
            </div>
        </header>

        <script src="./../assets/js/list-cart.js"></script>