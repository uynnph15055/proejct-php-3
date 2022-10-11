
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
    <link rel="stylesheet" href="./../assets/Css/register.css">
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0"
        nonce="vWDw95v7"></script>
</head>

<body>
<div class="container">
    <div class="form__login-box">
        <div class="title">
            <h2 class="title_login">Đăng nhập</h2>
            <h4><a class="title_register" href="?dang-ky">Đăng ký</a></h4>
        </div>
        <form action="index.php?url=dang-nhap-save" method="POST">
            <div class="input__bag">
                <input class="contact__input" name="email" type="text" placeholder="Họ và tên">
            </div>
            <div class="input__bag">
                <input class="contact__input" type="password"  name="password"  placeholder="Password">
            </div>
            <button class="contact__btn ">Đăng nhập</button>
        </form>
    </div>
</div>