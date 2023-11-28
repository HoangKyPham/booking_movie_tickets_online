<?php
function insert_User($email, $ho_ten, $dia_chi, $so_dien_thoai, $mat_khau)
{
    $sql_user = "INSERT INTO user VALUE(null,'$email','$ho_ten','$so_dien_thoai','$dia_chi',$mat_khau)";
    pdo_execute($sql_user);
}

function query_insert_role_User()
{
    $sql = "select * from user order by id_user desc limit 1";
    $result = pdo_query_one($sql);
    return $result;
}

function insert_Role($id_user)
{
    $sql_thong_tin = "insert into role value(null,1,$id_user)";
    pdo_execute($sql_thong_tin);
}

function sign_Users($email, $pass) // them mat khau vao bang role
{
    $sql = "select user.*,role.*
            from user
            inner join role on user.id_user = role.id_user 
            where email = '$email' and mat_khau = '$pass' and vai_tro = 1";
    $result = pdo_query_one($sql);
    return $result;
}
function sign_change_pass($email)
{
    $sql = "select user.*,role.*
            from user
            inner join role on user.id_user = role.id_user 
            where email = '$email' and vai_tro = 1";
    $result = pdo_query_one($sql);
    return $result;
}

//check thanh toan
function query_user($id_user)
{
    $sql = "select * from user where id_user = $id_user";
    $result = pdo_query_one($sql);
    return $result;
}
function update_info_payment($id_user, $name, $phone, $email, $address)
{
    $sql = "UPDATE user SET ho_ten = '$name', so_dien_thoai = '$phone', email = '$email', dia_chi = '$address' WHERE id_user = $id_user";
    pdo_execute($sql);
}

function insert_info_payment($name, $phone, $email, $address)
{
    $sql = "INSERT INTO user VALUE(null,'$email','$name','$phone','$address')";
    pdo_execute($sql);
}

function query_user_payment($email){
    $sql = "select * from user where email = '$email'";
    $result = pdo_query_one($sql);
    return $result;
}









function restore_Pass($user_id, $new_pass)
{
    $sql = "update user set mat_khau= '$new_pass' WHERE id_user = '$user_id'";
    pdo_execute($sql);
}

function edit_query_user($user_id, $old_pass)
{
    $sql = "select * from user where id_user = $user_id and mat_khau = $old_pass";
    $result = pdo_query_one($sql);
    return $result;
}

function update_Users($user_id, $user_name, $pass, $email)
{
    $sql = "update users set user_name='$user_name',pass='$pass',email='$email' where user_id='$user_id'";
    pdo_execute($sql);
}

function show_list_users()
{
    $sql = "select * from users";
    $result = pdo_query($sql);
    return $result;
}

function delete_User($user_id)
{
    $sql = "delete from users where user_id = $user_id";
    pdo_execute($sql);
}
