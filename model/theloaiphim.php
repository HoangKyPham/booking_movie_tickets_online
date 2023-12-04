<?php
function show_Loai_phim() {
    $sql = "select * from the_loai_phim";
    $result_the_loai = pdo_query($sql);
    return $result_the_loai;

}


// CRUD

function insert_loai_phim($ten_the_loai){
    $sql = "insert into the_loai_phim value(null,'$ten_the_loai')";
    pdo_execute($sql);
}

function  query_updateloai($id_the_loai) {
    $sql = "select * from the_loai_phim where id_the_loai = ".$id_the_loai;
    $result=pdo_query_one($sql);
    return $result;
}
function   update_loai($id_the_loai,$ten_the_loai){
    $sql = "update the_loai_phim set ten_the_loai='$ten_the_loai' where id_the_loai = $id_the_loai ";
    pdo_execute($sql);
}

function  delete_loai($id_the_loai){
    $sql = "delete from the_loai_phim where id_the_loai = $id_the_loai";
    pdo_execute($sql);
}


?>