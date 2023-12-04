
<?php

function loadone_phim($id_phim)
{
    $sql = "select * 
    from phim
    where id_phim=$id_phim";
    $result = pdo_query_one($sql);
    return $result;
}

function query_ngay($id_phim)
{
    $sql = "SELECT DISTINCT ngay_chieu
    FROM suat_chieu
    WHERE id_phim = $id_phim";
    $atb_phim = pdo_query($sql);
    return $atb_phim;
}

function query_rap_gio_chieu($id_phim, $ngay)
{
    $sql = "SELECT rap.*, phim.*, suat_chieu.*
    FROM suat_chieu
    JOIN rap ON suat_chieu.id_rap = rap.id_rap
    JOIN phim ON suat_chieu.id_phim = phim.id_phim
    WHERE phim.id_phim = $id_phim AND suat_chieu.ngay_chieu = '$ngay'";
    $result = pdo_query($sql);
    return $result;
}


function query_gio_chieu_select($id_phim, $date)
{
    $sql = "select * from suat_chieu where id_phim = $id_phim and ngay_chieu= $date";
    $result = pdo_query($sql);
    return $result;
}

function query_gio_chieu_default($id_phim)
{
    $sql = "SELECT * FROM suat_chieu WHERE id_phim = $id_phim LIMIT 1";
    $result = pdo_query($sql);
    return $result;
}

function show_Pro() {
    $sql = "SELECT * FROM phim 
    INNER JOIN khuyen_mai on khuyen_mai.id_khuyen_mai = phim.id_khuyen_mai 
    INNER JOIN the_loai_phim on the_loai_phim.id_the_loai = phim.id_the_loai;";
    $result_phim = pdo_query($sql);
    return $result_phim;

}



function  insert_Pro($ten_phim,$ngay_phat_hanh,$ngon_ngu,$trailer,$thoi_luong,$trang_thai,$mo_ta,$id_khuyen_mai,$name_img,$id_the_loai){
    $sql = "insert into phim value(null,'$ten_phim','$name_img','$mo_ta','$ngay_phat_hanh','$ngon_ngu','$trailer','$thoi_luong','$trang_thai',$id_khuyen_mai,$id_the_loai)";
    pdo_execute($sql);
}

// function query_updatePro($phim_id){
//     $sql = "SELECT phim.*,rap.* 
//             FROM phim 
//             INNER JOIN rap ON phim.id_rap = rap.id_rap 
//             WHERE id_phim = $phim_id";
//     $result=pdo_query_one($sql);
//     return $result;
// }
function query_updatePro($phim_id) {
    $sql = "select * from phim where id_phim  = ".$phim_id;
    $result=pdo_query_one($sql);
    return $result;
}

function  update_Phim($id_phim,$ten_phim,$ngay_phat_hanh,$ngon_ngu,$trailer,$thoi_luong,$trang_thai,$mo_ta,$id_khuyen_mai,$name_img,$id_the_loai){
    $sql = "update phim set ten_phim='$ten_phim',anh='$name_img',mo_ta='$mo_ta',ngay_phat_hanh='$ngay_phat_hanh',ngon_ngu='$ngon_ngu',trailer='$trailer',thoi_luong='$thoi_luong',trang_thai_phim='$trang_thai',
    id_khuyen_mai=$id_khuyen_mai,id_the_loai=$id_the_loai where id_phim = $id_phim ";
    pdo_execute($sql);
}

function delete_Phim($phim_id){
    $sql = "delete from phim where id_phim = $phim_id";
    pdo_execute($sql);
}



// COMENT ERROL
////
// function show_Pro() {
//     $sql = "SELECT rap.*,phim.* 
//             FROM phim 
//             INNER JOIN rap ON phim.id_rap = rap.id_rap
//     ";
//     $result = pdo_query($sql);
//     return $result;
// }



// //CRUD product
// function insert_Pro($ten_phim, $ngay_phat_hanh, $ngon_ngu, $trailer, $thoi_luong, $trang_thai, $mo_ta, $id_rap, $id_khuyen_mai, $name_img)
// {
//     $sql = "insert into phim value(null,'$ten_phim','$name_img','$mo_ta','$ngay_phat_hanh','$ngon_ngu','$trailer','$thoi_luong','$trang_thai',$id_rap,$id_khuyen_mai)";
//     pdo_execute($sql);
// }

// function query_updatePro($phim_id)
// {
//     $sql = "SELECT phim.*,rap.* 
//             FROM phim 
//             INNER JOIN rap ON phim.id_rap = rap.id_rap 
//             WHERE id_phim = $phim_id";
//     $result = pdo_query_one($sql);
//     return $result;
// }

// function update_Phim($id_phim, $ten_phim, $ngay_phat_hanh, $ngon_ngu, $trailer, $thoi_luong, $trang_thai, $mo_ta, $id_rap, $id_khuyen_mai, $name_img)
// {
//     $sql = "update phim set ten_phim='$ten_phim',anh='$name_img',mo_ta='$mo_ta',ngay_phat_hanh='$ngay_phat_hanh',ngon_ngu='$ngon_ngu',trailer='$trailer',thoi_luong='$thoi_luong',trang_thai_phim='$trang_thai',
//     id_rap = $id_rap,id_khuyen_mai=$id_khuyen_mai where id_phim = $id_phim ";
//     pdo_execute($sql);
// }

// function delete_Phim($phim_id)
// {
//     $sql = "delete from phim where id_phim = $phim_id";
//     pdo_execute($sql);
// }


// chi tiet san pham





//show phim ra trang chu
function show_phim_dangchieu()
{
    $sql = "select * from phim where trang_thai_phim='Phim đang chiếu' order by id_phim desc";
    $result = pdo_query($sql);
    return $result;
}


function show_phim_sapchieu()
{
    $sql = "select * from phim where trang_thai_phim='Phim Sắp chiếu' order by id_phim desc";
    $result = pdo_query($sql);
    return $result;
}

function show_phim_vebantruoc()
{
    $sql = "select * from phim where trang_thai_phim='Vé bán trước' order by id_phim desc";

    $result = pdo_query($sql);
    return $result;
}


function suat_chieu()
{
    $sql = "SELECT phim.*, rap.*, suat_chieu.* FROM phim 
   INNER JOIN rap ON phim.id_rap = rap.id_rap INNER JOIN suat_chieu 
   ON phim.id_phim = suat_chieu.id_phim WHERE DATE(suat_chieu.ngay_chieu)";
    $result = pdo_query($sql);
    return $result;
}


function show_Pro_Key($keyw = "")
{
    $sql = "SELECT * FROM phim INNER JOIN the_loai_phim on the_loai_phim.id_the_loai = phim.id_the_loai
    WHERE phim.ten_phim LIKE '%$keyw%'
    ORDER BY id_phim DESC";
    $result = pdo_query($sql);
    return $result;
}

function show_the_loai_phim()
{
    $sql = "SELECT * FROM the_loai_phim order by id_the_loai ASC";
    $result = pdo_query($sql);
    return $result;
}

function show_movie()
{
    $sql = "SELECT * FROM phim INNER JOIN the_loai_phim on the_loai_phim.id_the_loai = phim.id_the_loai order by id_phim desc";
    $result = pdo_query($sql);
    return $result;
}

// show phim theo thể loại

function show_phim_bomtan()
{
    $sql = "SELECT * FROM phim INNER JOIN the_loai_phim on the_loai_phim.id_the_loai = phim.id_the_loai WHERE ten_the_loai = 'Bom tấn'";
    $result = pdo_query($sql);
    return $result;
}

function show_phim_hoathinh()
{
    $sql = "SELECT * FROM phim INNER JOIN the_loai_phim on the_loai_phim.id_the_loai = phim.id_the_loai WHERE ten_the_loai = 'Hoạt hình'";
    $result = pdo_query($sql);
    return $result;
}

function show_phim_tamly()
{
    $sql = "SELECT * FROM phim INNER JOIN the_loai_phim on the_loai_phim.id_the_loai = phim.id_the_loai WHERE ten_the_loai = 'Tâm lý'";
    $result = pdo_query($sql);
    return $result;
}

function show_phim_kinhdi()
{
    $sql = "SELECT * FROM phim INNER JOIN the_loai_phim on the_loai_phim.id_the_loai = phim.id_the_loai WHERE ten_the_loai = 'Kinh dị'";
    $result = pdo_query($sql);
    return $result;
}
