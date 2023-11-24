<?php 
    function insert_booking($email,$ho_ten,$dia_chi,$so_dien_thoai){
        $sql_user = "insert into users value(null,'$email',1)";
        $sql_dat_ve = "insert into dat_ve value(null,'$ho_ten','$so_dien_thoai','$dia_chi')";
        pdo_execute($sql_user,$sql_dat_ve);
    }


// ve_phim
    function loadone_ve_phim($id_phim)
    {
        $sql = "select * from phim where id_phim=" . $id_phim;
        $result = pdo_query_one($sql);
        return $result;
    }
    
// show 

function show_ve(){
    $sql = "SELECT * from phong_chieu";
    $result = pdo_query($sql);
    return $result;
    
}


    // function sign_Users($email,$pass){
    //     $sql ="select * from users where user_name = '$email' and pass = '$pass'";
    //     $result = pdo_query_one($sql);
    //     return $result;
    // }

    // function restore_Pass($user_id,$new_pass){
    //     $sql ="update users set pass= '$new_pass' WHERE user_id = '$user_id'";
    //     pdo_execute($sql);
    // }

    // function edit_query_user($user_id){
    //     $sql = "select * from users where user_id = '$user_id'";
    //     $result = pdo_query_one($sql);
    //     return $result;
    // }

    // function update_Users($user_id,$user_name,$pass,$email){
    //     $sql ="update users set user_name='$user_name',pass='$pass',email='$email' where user_id='$user_id'";
    //     pdo_execute($sql);
    // }

    // function show_list_users(){
    //     $sql = "select * from users";
    //     $result = pdo_query($sql);
    //     return $result;
    // }

    // function delete_User($user_id){
    //     $sql = "delete from users where user_id = $user_id";
    //     pdo_execute($sql);
    // }
    
    
   
    

?>