<?php 
function insert_contact($email, $chu_de, $ho_ten, $noi_dung)
{
    $sql_user = "INSERT INTO lien_he VALUE(null,'$email','$chu_de','$ho_ten','$noi_dung')";
    pdo_execute($sql_user);
}

?>