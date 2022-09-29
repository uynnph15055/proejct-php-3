<?php 

// Gọi tất cả sản phẩm ra ngoài
function getProductAll(){
    $conn = connect();
    $stmt = $conn->prepare("SELECT *  FROM product INNER JOIN category  ON product.dm_id = category.dm_id");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    return $result;
}

// Lọc theo danh mục
function getProductWhereCate($cate ){
    $conn = connect();
    $stmt = $conn->prepare("SELECT *  FROM product INNER JOIN category  ON product.dm_id = category.dm_id WHERE product.dm_id = ".$cate."");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    return $result;
}

// Lọc theo kích thước
function getProductWhereSize($size){
    $conn = connect();
    $stmt = $conn->prepare("SELECT *  FROM product WHERE product.kt_id = ".$size."");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    return $result;
}


// Xóa sản phẩm
function deleteProduct($id){
    $conn = connect();
    $sql = "DELETE FROM product WHERE product.sp_id = ".$id;
    $conn->exec($sql);
}

// Gọi phần tử chỉ định theo id
function getProductFind($id){
    $conn = connect();
    $stmt = $conn->prepare("SELECT  * FROM product WHERE product.sp_id = ".$id."");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    return $result;
}

// Thêm sản phẩm
function insertProduct($data){
    $conn = connect();
    $stmt = $conn->prepare("INSERT INTO product 
    (sp_name, sp_image, sp_price, sp_sale, sp_quantity, dm_id, sp_description, kt_id)
     VALUES ('".$data["sp_name"]."' , '".$data["sp_image"]."' ,' ".$data["sp_price"]."' ,'".$data["sp_sale"]." ',  ".(int)$data["sp_quantity"]." , ".(int)$data["dm_id"]." ,  '".$data["sp_description"]."' ,".(int)$data["kt_id"].")");
    $stmt->execute();
}

// Update sản phẩm
function updateProduct($data , $id){
    $conn = connect();
    $stmt = $conn->prepare("UPDATE  product  
    SET sp_name = '".$data["sp_name"]."', sp_image= '".$data["sp_image"]."', sp_price=' ".$data["sp_price"]."' , sp_sale ='".$data["sp_sale"]." ', sp_quantity= ".(int)$data["sp_quantity"].", dm_id= ".(int)$data["dm_id"].", sp_description='".$data["sp_description"]."', kt_id=".(int)$data["kt_id"]."  WHERE product.sp_id = ".(int)$id."");
    $stmt->execute();
}
