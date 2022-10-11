<link rel="stylesheet" href="./../assets/Css/product-detail.css">
<div class="content">
    <style>
    .sizeActive {
        background-color: #000;
        color: #ffff;
    }

    .colorActive {
        border: 4px solid #319DA0;
    }
    </style>
    <div class="content-product-info_box padding-container">
        <div class="content-product-info_left">
            <div class="container-product-image_box">
                <img id="expandedImg" src="./../upload/<?=$product[0]["sp_image"]?>" style="width:100%">
                <div class="content-product_info-row">
                    <div class="column">
                        <img src="./../upload/<?=$product[0]["sp_image"]?>" alt="Nature" style="width:100%"
                            onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTu4kVhpjc0rP9G11pdbuOTs9ptwZNgoO_tlQ&usqp=CAU"
                            alt="Snow" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3PN_vFvRTsMK53gDly0EIIAt_Mzkq3DsnIA&usqp=CAU"
                            alt="Mountains" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVdps4X4WZmcF7f1QTd_8LdoH8m3XXB46sbA&usqp=CAU"
                            alt="Lights" style="width:100%" onclick="myFunction(this);">
                    </div>
                </div>
            </div>
        </div>
        <div class="content-product-info_right">
            <form action="index.php?url=add-gio-hang" method="POST">
                <input type="text" name="id" hidden value="<?=$product[0]["sp_id"]?>">
                <div class="header-product-info_right">
                    <h3 class="product-name"><?=$product[0]["sp_name"]?></h3>
                    <div class="product-sale">
                        <?=ceil(($product[0]["sp_price"] - trim($product[0]["sp_sale"])) * 100/$product[0]["sp_price"])?>%
                    </div>
                </div>
                <div class="product-item_price-wraper">
                    <div class="product-price-main">
                        <?=number_format($product[0]['sp_price'],0,",",".")?>đ
                    </div>
                    <div class="product-price_sale color-text">
                        <?=number_format(trim($product[0]['sp_sale']),0,",",".")?>đ
                    </div>
                </div>
                <div class="product-atribute_box">
                    <p>Kích cỡ : </p>
                    <ul class="product-atribute_list-size">
                        <?php  
                    foreach ($size as $key) {
                     ?>
                        <label onClick="chooseSize()" for="<?=$key["kt_id"]?>"
                            class="size_label"><?=$key["kt_name"]?></label>
                        <input id="<?=$key["kt_id"]?>" value="<?=$key["kt_name"]?>" hidden name="size" type="radio">
                        <?php  }  ?>
                    </ul>
                </div>
                <div class="product-atribute_box">
                    <p>Màu sắc : </p>
                    <ul class="product-atribute_list-color">
                        <?php  
                    foreach ($color as $key) {
                     ?>
                        <label onClick="chooseColor()" for="color" class="color_label"
                            style="background-color: <?=$key["ma_color"]?>"></label>
                        <input id="color" hidden name="color" value="<?=$key["kt_name"]?>" type="radio">
                        <?php  }  ?>


                    </ul>
                </div>
                <div class="product-atribute">

                </div>
                <p class="alert-product-number">Còn <?=$product[0]['sp_quantity']?> sản phẩm</p>
                <p style="color : #8E0007;font-weight:bold"><?=$error?></p>
                <style>
                .btn-control {
                    padding: 10px 15px;
                    cursor: pointer;
                }
                </style>
                <div class="">
                    <div class="number-input">
                        <a class="btn-control" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                            class="minus"><i class="fa-solid fa-minus"></i></a>
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <a class="btn-control" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                            class="plus"><i class="fa-solid fa-plus"></i></a>
                    </div>
                    <button type="submit" class="btn-add-to-cart">Thêm giỏ hàng</button>
                </div>
            </form>
            <div class="tabs1">
                <div class="tab-item active tablinks" <?= !isset($isDanhgia)  ?  'id="defaultOpen"' : ''?>
                    onclick="openCity(event, 'London')">Mô tả
                </div>
                <div class="tab-item tablinks" <?= isset($isDanhgia)  ?  'id="defaultOpen"' : ''?>
                    onclick="openCity(event, 'Paris')">
                    ĐÁNH GIÁ</div>
                <div class="tab-item tablinks" onclick="openCity(event, 'Tokyo')">
                    CHÍNH SÁCH ĐỔI TRẢ</div>
            </div>
            <div id="London" class="tabcontent">
                <?=$product[0]['sp_description'] ?>
            </div>

            <style>
            .form-control-cmtt {
                display: flex;
                justify-content: start;
                align-items: center;
            }

            .cmtt__item {
                display: flex;
                justify-content: start;
                align-items: start;
                margin: 20px;

            }

            .form-control-input-box {
                padding-bottom: 5px;
                border-bottom: 1px solid #ccc;
                display: flex;
                margin-left: 20px;
                width: 100%;
            }

            .form-control-input {
                outline: none;
                border: none;
                width: 100%;
                font-size: 15px;
            }

            .form-cmtt {
                margin: 0px 20px;
            }

            .avatar-cmtt {
                width: 40px;
                height: 40px;
                border-radius: 50px
            }

            .cmtt__content {
                text-align: justify;
                background-color: #F1F1F1;
                margin-top: 5px;
                padding: 10px;
                border-radius: 10px;
            }

            .all__cmtt::-webkit-scrollbar {
                width: 3px;
                background-color: rgb(235, 232, 232);
            }

            .all__cmtt::-webkit-scrollbar-thumb {
                background-color: #999;
                border-radius: 6px;
            }

            .all__cmtt {
                height: 400px;
                overflow-y: auto;
            }

            .cmtt__info {
                margin-left: 15px;
            }

            .btn__submit {
                cursor: pointer;
                color: #999;
                background-color: #ffff;
                border: none;
                font-size: 18px;
            }

            .btn__submit:hover {
                color: #555;
            }

            .cmtt__content-box {
                display: flex;
                justify-content: start;
                align-items: center;
            }

            .cmtt__delete {
                margin-left: 10px;
                color: #8E0007;
            }
            </style>
            <div id="Paris" class="tabcontent">
                <?php if(isset($_SESSION["user"])){ ?>
                <form action="?url=binh-luan" method="POST" class="form-cmtt">
                    <input type="text" value="<?=$product[0]['sp_id']?>" name="sp_id" hidden>
                    <div class="form-control-cmtt">
                        <img class="avatar-cmtt" src="./../upload/<?=$_SESSION["user"]["kh_avatar"]?>" alt="">
                        <div class="form-control-input-box">
                            <input class="form-control-input" name="content" type="text"
                                placeholder="Đánh giá của bạn ...">
                            <button class="btn__submit" type="submit"> <i class="fa-solid fa-paper-plane"></i></button>
                        </div>
                    </div>
                </form>
                <?php } ?>
                <div class="all__cmtt">
                    <?php foreach ($comments as $key) { ?>
                    <div class="cmtt__item">
                        <img class="avatar-cmtt" src="./../upload/<?= $key["kh_avatar"]?>" alt="">
                        <div class="cmtt__info">
                            <h5 class="cmtt__user"><?= $key["kh_name"]?></h5>
                            <div class="cmtt__content-box">
                                <p class="cmtt__content"><?= $key["content"]?>
                                </p>
                                <?php if(isset($_SESSION["user"])){
                                    if($_SESSION["user"]["kh_id"] ==  $key["kh_id"]){ ?>
                                      <a  onclick="return confirm('Bạn có muốn xoá danh mục này ?')"  href="index.php?url=binh-luan-delete&id=<?= $key['cmtt_id']?>"   class="cmtt__delete" href=""><i class="fa-solid fa-xmark"></i></a>
                                      <?php   } ?>
                                <?php   } ?>
                            </div>
                        </div>
                    </div>
                    <?php  } ?>


                </div>

            </div>

            <div id="Tokyo" class="tabcontent">
                <h3>Tokyo</h3>
                <p>Tokyo is the capital of Japan.</p>
            </div>
        </div>
    </div>
    <style>
        .product-item{
            height: 420px;
        }
    </style>
    <h3 class="commom-title product-related_title text-center">
        SẢN PHẨM LIÊN QUAN
    </h3>
    <p class="text-center color-text">Luôn sẵn sáng hỗ trợ và tư vấn cho bạn để có sản phẩm tốt nhất.</p>
    <div class="product-related_box padding-container product-list_box">
        <?php foreach ($productRelate as $item) { ?>
        <div class="product-item">
            <div class="product-item_img-box">
                <a href="index.php?url=san-pham-chi-tiet&id=<?= $item["sp_id"] ?>"> <img class="w-100"
                        src="./../upload/<?=$item["sp_image"]?>" alt=""></a>
                <div class="product-item_percent">
                    <?=ceil(($item["sp_price"] - trim($item["sp_sale"])) * 100/$item["sp_price"])?>%</div>
                <a href="index.php?url=san-pham-chi-tiet&id=<?= $item["sp_id"] ?>" class="product-item_icon">
                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                </a>
            </div>
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

<script>
function chooseSize() {
    const size = document.querySelectorAll('.size_label');
    size.forEach(element => {
        element.classList.remove("sizeActive");
        element.addEventListener('click', () => {
            element.classList.add("sizeActive");
        })
    });
}

function chooseColor() {
    const colors = document.querySelectorAll('.color_label');
    colors.forEach(element => {
        element.classList.remove("colorActive");
        element.addEventListener('click', () => {
            element.classList.add("colorActive");
        })
    });
}
</script>
<script src="./../assets/js/tab-slider.js"></script>
<script src="./../assets/js/tab-component.js"></script>
<script src="./../assets/js/list-cart.js"></script>
<script src="./../assets/js/click-dropdown.js"></script>
<script src="./../assets/js/back-top.js"></script>