<?php 

function list_ghe(){
    $sql = "select * from ghe";
    $result = pdo_query($sql);
    return $result;
}

function show_hang_ghe_A(){
    $sql = "SELECT * FROM ghe WHERE ten_ghe LIKE 'A%' ORDER BY id_ghe ASC limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_B(){
    $sql = "SELECT * FROM ghe WHERE ten_ghe LIKE 'B%' ORDER BY id_ghe ASC limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_C(){
    $sql = "SELECT * FROM ghe WHERE ten_ghe LIKE 'C%' ORDER BY id_ghe ASC limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_D(){
    $sql = "SELECT * FROM ghe WHERE ten_ghe LIKE 'D%' ORDER BY id_ghe ASC limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_E(){
    $sql = "SELECT * FROM ghe WHERE ten_ghe LIKE 'E%' ORDER BY id_ghe ASC limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_F(){
    $sql = "SELECT * FROM ghe WHERE ten_ghe LIKE 'F%' ORDER BY id_ghe ASC limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_G(){
    $sql = "SELECT * FROM ghe WHERE ten_ghe LIKE 'G%' ORDER BY id_ghe ASC limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_H(){
    $sql = "SELECT * FROM ghe WHERE ten_ghe LIKE 'H%' ORDER BY id_ghe ASC limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_I(){
    $sql = "SELECT * FROM ghe WHERE ten_ghe LIKE 'I%' ORDER BY id_ghe ASC limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_J(){
    $sql = "SELECT * FROM ghe WHERE ten_ghe LIKE 'J%' ORDER BY id_ghe ASC limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function update_trang_thai_ghe($id_ghe){
    $sql = "update ghe set trang_thai = '1' where id_ghe = $id_ghe";
    pdo_execute($sql);
}




?>
