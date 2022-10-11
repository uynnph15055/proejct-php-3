<?php  if(isset($_SESSION['success'])){ ?>
<script>
alert('Thanh toán thành công !!!');
setTimeout(() => {
    <?php unset($_SESSION['success']); ?>
}, 2000);
</script>
<?php 

 } ?>
<style>
footer {
    border-top: 1px solid #ccc;
    padding-top: 20px
}
</style>
<footer class="footer">
    <header class="header-footer">
        <h3 class="commom-title text-center">
            HÃY LIÊN HỆ VỚI CHÚNG TÔI!
        </h3>
        <p class="text-center color-text">Luôn sẵn sáng hỗ trợ và tư vấn cho bạn để có sản phẩm tốt nhất.</p>
        <div class="header-footer-form-box text-center">
            <input placeholder="Tìm kiếm sản phẩm" class="header-footer-form-input" type="text">
            <button class="header-footer-form-btn">Gửi</button>
        </div>
    </header>
    <div class="header-footer_main padding-container">
        <div class="header-footer_description">
            <h4 class="title-header color-primary">Giới thiệu</h4>
            <p class="color-text" style="text-align:justify ;">Trang mua sắm trực tuyến nội thất mang phong cách
                việt, giúp bạn cập nhập và nắm bắt xu hướng mới</p>
            <img src="https://theme.hstatic.net/1000409762/1000752712/14/logo_bct.png?v=10" alt="">
        </div>
        <div class="header-footer_contact">
            <h4 class="title-header color-primary">Liên kết</h4>
            <ul class="header-contact_list">
                <li class="li color-text"><i class="fa-solid fa-caret-right"></i> Tìm kiếm</li>
                <li class="li color-text"><i class="fa-solid fa-caret-right"></i> Giới thiệu</li>
                <li class="li color-text"><i class="fa-solid fa-caret-right"></i> Chính sách đổi trả</li>
                <li class="li color-text"><i class="fa-solid fa-caret-right"></i> Điều khoản dịch vụ</li>
            </ul>
        </div>
        <div class="header-description color-primary">
            <h4 class="title-header">Thông tin liên hệ</h4>
            <ul class="header-contact_list">
                <li class="li color-text"><i class="fa-solid fa-caret-right"></i> Tầng 4, tòa nhà Flemington, số
                    182, đường Lê Đại Hành, phường 15, quận 11, Tp. Hồ Chí Minh.</li>
                <li class="li color-text"><i class="fa-solid fa-caret-right"></i> 1900.636.099</li>
                <li class="li color-text"><i class="fa-solid fa-caret-right"></i> 1900.636.099</li>
                <li class="li color-text"><i class="fa-solid fa-caret-right"></i> hi@haravan.com</li>
            </ul>
        </div>
        <div class="header-description color-primary">
            <h4 class="title-header">Fanpage</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8638558814037!2d105.74459841440749!3d21.038132792835356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1665453619931!5m2!1svi!2s" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="footer-end">
        <p class="color-text text-center">Copyright © 2022 Urban Home. Powered by Haravan</p>
    </div>
</footer>
</div>
<div id="backTop">
    <i class="fa-solid fa-caret-up"></i>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

<script src="./../assets/js/back-top.js"></script>
<script src="./../assets/js/list-cart.js"></script>
<script>
function openCart() {

    document.getElementById("mySidenav").style.width = "350px";

}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

</body>

</html>