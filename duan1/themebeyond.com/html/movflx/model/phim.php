<?php 
function show_Pro() {
    $sql = "SELECT rap.*,phim.* 
            FROM phim 
            INNER JOIN rap ON phim.id_rap = rap.id_rap
    ";
    $result=pdo_query($sql);
    return $result;
}
// function show_Pro() {
//     $sql = "SELECT products.*, categories.cate_name, COUNT(comment.pro_id) 'soluong'
//     FROM products
//     INNER JOIN categories ON products.cate_id = categories.cate_id
//     LEFT JOIN comment ON products.pro_id = comment.pro_id
//     GROUP BY products.pro_id ORDER BY soluong DESC
//      ";
//     $result=pdo_query($sql);
//     return $result;
// }


//CRUD product
function insert_Pro($ten_phim,$ngay_phat_hanh,$ngon_ngu,$trailer,$thoi_luong,$trang_thai,$mo_ta,$id_rap,$id_khuyen_mai,$name_img){
    $sql = "insert into phim value(null,'$ten_phim','$name_img','$mo_ta','$ngay_phat_hanh','$ngon_ngu','$trailer','$thoi_luong','$trang_thai',$id_rap,$id_khuyen_mai)";
    pdo_execute($sql);
}

function query_updatePro($phim_id){
    $sql = "SELECT phim.*,rap.* 
            FROM phim 
            INNER JOIN rap ON phim.id_rap = rap.id_rap 
            WHERE id_phim = $phim_id";
    $result=pdo_query_one($sql);
    return $result;
}

function update_Phim($id_phim,$ten_phim,$ngay_phat_hanh,$ngon_ngu,$trailer,$thoi_luong,$trang_thai,$mo_ta,$id_rap,$id_khuyen_mai,$name_img){
    $sql = "update phim set ten_phim='$ten_phim',anh='$name_img',mo_ta='$mo_ta',ngay_phat_hanh='$ngay_phat_hanh',ngon_ngu='$ngon_ngu',trailer='$trailer',thoi_luong='$thoi_luong',trang_thai_phim='$trang_thai',
    id_rap = $id_rap,id_khuyen_mai=$id_khuyen_mai where id_phim = $id_phim ";
    pdo_execute($sql);
}

function delete_Phim($phim_id){
    $sql = "delete from phim where id_phim = $phim_id";
    pdo_execute($sql);
}


// chi tiet san pham
function detail_Item($pro_id) {
    $sql = "SELECT products.*, categories.cate_name
    FROM products
    INNER JOIN categories ON products.cate_id = categories.cate_id WHERE products.pro_id = $pro_id";
    $result=pdo_query_one($sql);
    return $result;
}
//show pro theo danh muc
function show_Pro_Cate($cate_id) {
    $sql = "SELECT *
    FROM products
    WHERE cate_id = ".$cate_id;
    $result=pdo_query($sql);
    return $result;
}

//show san pham moi trang chu
function show_Pro_New(){
    $sql = "select * from products order by pro_id desc limit 6 ";
    $result = pdo_query($sql);
    return $result;
}

//show product with keywords
function show_Pro_Key($keyw = "") {
    $sql = "SELECT products.*, categories.cate_name, COUNT(comment.pro_id) AS soluong
    FROM products
    INNER JOIN categories ON products.cate_id = categories.cate_id
    LEFT JOIN comment ON products.pro_id = comment.pro_id
    WHERE products.pro_name LIKE '%$keyw%'
    GROUP BY products.pro_id
    ORDER BY soluong DESC;";
    $result = pdo_query($sql);
    return $result;
}


?>