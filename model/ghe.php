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
    $sql = "SELECT * from ghe INNER JOIN hang_ghe on hang_ghe.id_hang_ghe = ghe.id_hang_ghe where ten_hang_ghe = 'C' order by id_ghe asc limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_D(){
    $sql = "SELECT * from ghe INNER JOIN hang_ghe on hang_ghe.id_hang_ghe = ghe.id_hang_ghe where ten_hang_ghe = 'D' order by id_ghe asc limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_E(){
    $sql = "SELECT * from ghe INNER JOIN hang_ghe on hang_ghe.id_hang_ghe = ghe.id_hang_ghe where ten_hang_ghe = 'E' order by id_ghe asc limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_F(){
    $sql = "SELECT * from ghe INNER JOIN hang_ghe on hang_ghe.id_hang_ghe = ghe.id_hang_ghe where ten_hang_ghe = 'F' order by id_ghe asc limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_G(){
    $sql = "SELECT * from ghe INNER JOIN hang_ghe on hang_ghe.id_hang_ghe = ghe.id_hang_ghe where ten_hang_ghe = 'G' order by id_ghe asc limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_H(){
    $sql = "SELECT * from ghe INNER JOIN hang_ghe on hang_ghe.id_hang_ghe = ghe.id_hang_ghe where ten_hang_ghe = 'H' order by id_ghe asc limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_I(){
    $sql = "SELECT * from ghe INNER JOIN hang_ghe on hang_ghe.id_hang_ghe = ghe.id_hang_ghe where ten_hang_ghe = 'I' order by id_ghe asc limit 12";
    $result = pdo_query($sql);
    return $result;
    
}

function show_hang_ghe_J(){
    $sql = "SELECT * from ghe INNER JOIN hang_ghe on hang_ghe.id_hang_ghe = ghe.id_hang_ghe where ten_hang_ghe = 'J' order by id_ghe asc limit 12";
    $result = pdo_query($sql);
    return $result;
    
}














?>
