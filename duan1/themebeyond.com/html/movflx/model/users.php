<?php 
    function insert_Users($mat_khau,$email,$ho_ten,$dia_chi,$so_dien_thoai){
        $sql_user = "insert into users value(null,'$email',1)";
        $sql_thong_tin= "insert into thong_tin value(null,'$ho_ten','$so_dien_thoai','$dia_chi','$mat_khau')";
        pdo_execute($sql_user,$sql_thong_tin);
    }

    function sign_Users($email,$pass){
        $sql ="select * from users where user_name = '$email' and pass = '$pass' and vai_tro = 1";
        $result = pdo_query_one($sql);
        return $result;
    }

    function restore_Pass($user_id,$new_pass){
        $sql ="update users set pass= '$new_pass' WHERE user_id = '$user_id'";
        pdo_execute($sql);
    }

    function edit_query_user($user_id){
        $sql = "select * from users where user_id = '$user_id'";
        $result = pdo_query_one($sql);
        return $result;
    }

    function update_Users($user_id,$user_name,$pass,$email){
        $sql ="update users set user_name='$user_name',pass='$pass',email='$email' where user_id='$user_id'";
        pdo_execute($sql);
    }

    function show_list_users(){
        $sql = "select * from users";
        $result = pdo_query($sql);
        return $result;
    }

    function delete_User($user_id){
        $sql = "delete from users where user_id = $user_id";
        pdo_execute($sql);
    }
    
    
   
    

?>