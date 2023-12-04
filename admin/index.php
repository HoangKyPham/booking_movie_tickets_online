
<?php
session_start();
ob_start();
if (isset($_SESSION['vai_tro']) && ($_SESSION['vai_tro'] == 0)) {

    include "../model/pdo.php";
    include "../model/rap.php";
    include "../model/phim.php";
    include "../model/khuyen-mai.php";
    // include "../model/comment.php";
    // include "../model/users.php";
    include "header.php";
    //controllers
    // if (isset($_SESSION['user'])) {
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
                //search
            case 'search':
                if (isset($_POST['keyw']) && ($_POST['keyw'] != "")) {
                    $keyw = $_POST['keyw'];
                    $result = show_Pro_Key($keyw);
                } else {
                    $keyw = "";
                    $result = show_Pro_Key($keyw);
                }
                include 'phim/phimShow.php';
                break;
            case 'logout_admin':
                if (isset($_SESSION['vai_tro'])) unset($_SESSION['vai_tro']); {
                    header('location: ../login_admin/login_admin.php');
                }   
                break;

                // case 'updateCate':
                //     if (isset($_GET['id_cate']) && ($_GET['id_cate']) > 0) {
                //         $cate_id = $_GET['id_cate'];
                //         $result = query_CateUpdate($cate_id);
                //     }
                //     include 'danhmuc/cateUpdate.php';
                //     break;

                // case 'updateCategory':
                //     if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
                //         $cate_id = $_POST['cate_id'];
                //         $cate_name = $_POST['cate_name'];
                //         update_Cate($cate_id, $cate_name);
                //     }
                //     header('Location:index.php?act=show_list_cate');
                //     include 'danhmuc/cateShowAdd.php';
                //     break;

                // case 'deleteCate':
                //     if (isset($_GET['id_cate']) && ($_GET['id_cate']) > 0) {
                //         $cate_id = $_GET['id_cate'];
                //         delete_Cate($cate_id);
                //         header('Location:index.php?act=show_list_cate');
                //     }
                //     include 'danhmuc/cateShowAdd.php';
                //     break;

                // case 'show_list_cate':
                //     if (isset($_POST['btn_add']) && ($_POST['btn_add'])) {
                //         $cate_name = $_POST['cate_name'];
                //         insert_Cate($cate_name);
                //     }
                //     $list_statistical = show_list_cate();
                //     include 'danhmuc/cateShowAdd.php';
                //     break;
                // case 'show_thong_ke':
                //     $list_statistical = show_list_cate();
                //     include 'home.php';
                //     break;
                // San pham 

            case 'showPro':
                $result = show_Pro();
                include 'phim/phimShow.php';
                break;
            case 'addPro':
                if (isset($_POST['btn_insert']) && ($_POST['btn_insert'])) {
                    $ten_phim = $_POST['ten_phim'];
                    $ngay_phat_hanh = $_POST['ngay_phat_hanh'];
                    $ngon_ngu = $_POST['ngon_ngu'];
                    $trailer = $_POST['trailer'];
                    $thoi_luong = $_POST['thoi_luong'];
                    $trang_thai = $_POST['trang_thai_phim'];
                    $mo_ta = $_POST['editor'];
                    $id_rap = $_POST['id_rap'];
                    $id_khuyen_mai = $_POST['id_khuyen_mai'];
                    $name_img = $_FILES['img_phim']['name'];
                    $tmp_img = $_FILES['img_phim']['tmp_name'];

                    move_uploaded_file($tmp_img, '../Assets/img/' . $name_img);
                    insert_Pro($ten_phim, $ngay_phat_hanh, $ngon_ngu, $trailer, $thoi_luong, $trang_thai, $mo_ta, $id_rap, $id_khuyen_mai, $name_img, $id_the_loai);
                    header('Location: index.php?act=showPro');
                }
                include 'phim/phimInsert.php';
                break;

            case 'update_query_Phim';
                if (isset($_GET['id_phim']) && ($_GET['id_phim']) > 0) {
                    $phim_id = $_GET['id_phim'];
                    $result = query_updatePro($phim_id);
                    $result_rap = show_rap_update_phim();
                    $result_khuyenmai = show_khuyen_mai_update_phim();
                }
                include 'phim/phimUpdate.php';
                break;
            case 'update_Phim':
                if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
                    $id_phim = $_POST['id_phim'];
                    $ten_phim = $_POST['ten_phim'];
                    $ngay_phat_hanh = $_POST['ngay_phat_hanh'];
                    $ngon_ngu = $_POST['ngon_ngu'];
                    $trailer = $_POST['trailer'];
                    $thoi_luong = $_POST['thoi_luong'];
                    $trang_thai = $_POST['trang_thai_phim'];
                    $mo_ta = $_POST['editor'];
                    $id_rap = $_POST['id_rap'];
                    $id_khuyen_mai = $_POST['id_khuyen_mai'];

                    if (isset($_FILES['name_img']['name']) && !empty($_FILES['name_img']['name'])) {
                        $name_img = $_FILES['name_img']['name'];
                        $tmp_img = $_FILES['name_img']['tmp_name'];
                        move_uploaded_file($tmp_img, 'Assets/img/' . $name_img);
                    } else {
                        $sql_selected_img = "select anh from phim where id_phim = $id_phim";
                        $result_img = pdo_query_one($sql_selected_img);
                        $row_img = $result_img;
                        $name_img = $row_img['anh'];
                    }
                    update_Phim($id_phim, $ten_phim, $ngay_phat_hanh, $ngon_ngu, $trailer, $thoi_luong, $trang_thai, $mo_ta, $id_rap, $id_khuyen_mai, $name_img);
                }
                header('Location:index.php?act=showPro');
                break;
            case 'delete_Phim';
                if (isset($_GET['id_phim']) && ($_GET['id_phim']) > 0) {
                    $phim_id = $_GET['id_phim'];
                    delete_Phim($phim_id);
                }
                header('Location:index.php?act=showPro');
                break;

                //user
                // case 'log_out':
                //     session_unset();
                //     header('Location:../index.php');
                //     break;
                // case 'show_list_users':
                //     $list_users = show_list_users();
                //     include 'nguoidung/show_taikhoan.php';
                //     break;
                // case 'edit_query_user':
                //     if (isset($_GET['id_user'])) {
                //         $user_id = $_GET['id_user'];
                //         $result = edit_query_user($user_id);
                //     }
                //     include 'nguoidung/update_taikhoan.php';
                //     break;
                // case 'update_User':
                //     if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
                //         $user_id = $_POST['user_id'];
                //         $user_name = $_POST['user_name'];
                //         $pass = $_POST['pass'];
                //         $email = $_POST['email'];
                //         update_Users($user_id, $user_name, $pass, $email);
                //         header('Location:index.php?act=show_list_users');
                //     }
                //     include 'nguoidung/update_taikhoan.php';
                //     break;
                // case 'delete_User';
                //     if (isset($_GET['id_user']) && ($_GET['id_user']) > 0) {
                //         $user_id = $_GET['id_user'];
                //         delete_User($user_id);
                //     }
                //     header('Location:index.php?act=show_list_users');
                //     break;

                //comment 

                // case 'show_list_cmt':
                //     $list_cmt = show_list_cmt();
                //     include 'binhluan/show_cmt.php';
                //     break;
                // case 'show_list_cmt_user':
                //     $list_cmt = show_list_cmt_user();
                //     include 'binhluan/show_cmt_user.php';
                //     break;

                // case 'delete_cmt';
                //     if (isset($_GET['id_cmt']) && ($_GET['id_cmt']) > 0) {
                //         $cmt_id = $_GET['id_cmt'];
                //         delete_cmt($cmt_id);
                //     }
                //     header('Location:index.php?act=show_list_cmt');
                //     break;

            default:
                include "home.php";
                break;
        }
    } else {
        include "home.php";
    }
    include "footer.php";
    // } else {
    //     header('Location:../index.php');
    // }
} else {
    header('location: ../login_admin/login_admin.php');
}
?>
    