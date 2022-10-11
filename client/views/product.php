<link rel="stylesheet" href="./../assets/Css/Product.css">

<style>
.product-box {
    display: grid;
    grid-template-columns: 1fr 3fr;
    grid-gap: 10px;
}

.product-list_box {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 20px;
}

.product-item {
    margin-top: 25px;
}
</style>

<div class="content padding-container">
    <header class="header-content-box">
        <div class="icon-open-filer-all" onclick="openNav()">
            <i class="fa-solid fa-arrow-down-short-wide"></i>
            Filter
        </div>
        <div class="title-box text-center">
            <h3 class="commom-title">Tất cả sản phẩm</h3>
        </div>
        <div class="selected-box">
             <h3>Tổng sản phẩm : <?=count($products)?></h3>
        </div>
    </header>

    <?php  if(isset( $key_word)){ ?>
    <h3 style="margin-top: 20px">Kết quả tìm kiếm : <span style="font-weight: normal"><?=$key_word?></span></h3>
    <?php  } ?>

    <div class="product-box">
        <div class="">
            <div class="overlay-content">
                <button class="accordion">LOẠI HÌNH SẢN PHẨM</button>
                <div class="panel">
                    <ul>
                        <li><a href="index.php?url=san-pham"><i class="fa-solid fa-caret-right"></i> Tất cả sản phẩm</a>
                        </li>
                        <li><a href=""><i class="fa-solid fa-caret-right"></i> Sản phẩm khuyến mãi</a></li>
                        <li><a href=""><i class="fa-solid fa-caret-right"></i> Sản phẩm nổi bật</a></li>
                    </ul>
                </div>

                <button class="accordion">LOẠI SẢN PHẨM</button>
                <div class="panel">
                    <ul>
                        <?php 
                     foreach($cates as $key){ ?>
                        <li><a href="index.php?url=san-pham&cate=<?= $key["dm_id"] ?>"><?=$key["dm_name"]?></a></li>
                        <?php } ?>

                    </ul>
                </div>

                <button class="accordion">SIZE SẢN PHẨM</button>
                <div class="panel">
                    <ul>
                        <?php  
                    foreach ($size as $key) {
                     ?>
                        <li><a href="index.php?url=san-pham&size=<?= $key["kt_id"] ?>"><i
                                    class="fa-solid fa-dollar-sign"></i><?=$key["kt_name"] ?></a></li>
                        <?php  } ?>
                    </ul>
                </div>
                <button class="accordion">MÀU SẮC</button>
                <style>
                .color {
                    width: 30px;
                    height: 30px;
                    border-radius: 50px;
                }
                </style>
                <div class="panel">
                    <ul class="filter-list-color">
                        <?php  
                    foreach ($color as $key) {
                     ?>
                        <a class="color" href="index.php?url=san-pham&color=<?= $key["kt_id"] ?>"
                            style="background-color: <?=$key["ma_color"]?>" href=""></a>
                        <?php  } ?>
                    </ul>
                </div>
            </div>
        </div>
        <style>
        .product-item{
            height: 420px;
        }
    </style>
        <div class="product-list_box">
            <?php foreach ($products as $item) { ?>
            <div class="product-item">
                <div class="product-item_img-box">
                    <a href="index.php?url=san-pham-chi-tiet&id=<?= $item["sp_id"] ?>"> <img class="w-100"
                            src="./../upload/<?=$item["sp_image"]?>" alt=""></a>
                    <div class="product-item_percent">
                        <div class="">
                            <h3>SALE</h3>
                        </div>
                        <div class="product-item_phan">
                            <p> <?=ceil(($item["sp_price"] - trim($item["sp_sale"])) * 100/$item["sp_price"])?>%</p>
                        </div>
                    </div>
                </div>
                <a style="color: black" href="index.php?url=san-pham-chi-tiet&id=<?= $item["sp_id"] ?>">
                    <p class="product-item_name"><?=$item["sp_name"]?></p>
                </a>
                <div class="product-item_price-wraper">
                    <div class="product-price-main">
                        <?=number_format($item['sp_price'],0,",",".")?>đ
                    </div>
                    <div class="product-price_sale">
                        <?=number_format(trim($item['sp_sale']),0,",",".")?>đ
                    </div>
                </div>
            </div>
            <?php  } ?>
        </div>
    </div>

</div>


<script src="./../assets/js/filter-product.js">
</script>
<script>
function closeNavFilter() {
    document.getElementById("myNav").style.width = "0%";
}
</script>