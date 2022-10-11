<link rel="stylesheet" href="./../assets/Css/Home.css">
<div class="">
    <img class="w-100" style="height: 500px;object-fit: cover" src="https://bachlongmobile.com/bnews/wp-content/uploads/2022/08/Marketing.jpg" alt="">
</div>
<div class="banner-sub_box   padding-container" style="z-index: 1">
        <div class="banner-sub_img-box">
            <img class="w-100 h-100 "
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_9TUIc34x-k3yCKrzYdlcd1_iOZsOHBdpDQ&usqp=CAU"
                alt="">
        </div>
        <div class="banner-sub_img-box">
            <img class="w-100 h-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdEvDCDzl9sNdKV46TN4P13JVbN8pXHrZ4Dw&usqp=CAU" alt="">
        </div>
        <div class="banner-sub_img-box">
            <img  class="w-100 h-100 "
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQL6EqF_5fiXZQ3on-o56MYyvKuRd8Ykvt0A&usqp=CAU"
                alt="">
        </div>
    </div>
<div class="content">
    <h3 class="header-footer-title commom-title text-center">
        Các sản phẩm nổi bật hiện nay
    </h3>
    <p class="text-center color-text">Cập nhật những sản phẩm mới nhật</p>
    <div class="product-list_box padding-container">
    <?php foreach ($products as $item) { ?>
        <div class="product-item">
            <div class="product-item_img-box">
                <a href="index.php?url=san-pham-chi-tiet&id=<?= $item["sp_id"] ?>"> <img class="w-100" src="./../upload/<?=$item["sp_image"]?>" alt=""></a>
                <div class="product-item_percent">
                    <div class="">
                        <h3>SALE</h3>
                    </div>
                    <div class="product-item_phan">
                        <p> <?=ceil(($item["sp_price"] - $item["sp_sale"]) * 100/$item["sp_price"])?>%</p>
                    </div>
                </div>
            </div>
            <a  style="color: black" href="index.php?url=san-pham-chi-tiet&id=<?= $item["sp_id"] ?>">   <p class="product-item_name"><?=$item["sp_name"]?></p></a>
            <div class="product-item_price-wraper">
                <div class="product-price-main">
                    <?=number_format($item['sp_price'],0,",",".")?>đ
                </div>
                <div class="product-price_sale">
                    <?=number_format($item['sp_sale'],0,",",".")?>đ
                </div>
            </div>
        </div>
        <?php  } ?>
    </div>

</div>