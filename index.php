<?php
ob_start();
session_start();
include "model/pdo.php";
include "view/header.php";
include "model/users.php";
include "model/phim.php";


$phim_dangchieu = show_phim_dangchieu();
$phim_sapchieu = show_phim_sapchieu();
$phim_vebantruoc = show_phim_vebantruoc();


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'movie_show_schedule':
            include 'view/lich-chieu/movie-show-schedule.php';
            break;
        case 'movie_show_theater':
            include 'view/lich-chieu/movie-show-theater.php';
            break;
        case 'theaters':
            include 'view/he-thong-rap/list-theaters.php';
            break;
        case 'events':
            include 'view/khuyen-mai-va-su-kien/sale-events.php';
            break;
        case 'events_details':
            include 'view/khuyen-mai-va-su-kien/events_details.php';
            break;
            case 'movie_details':
                if (isset($_GET['id_phim']) && ($_GET['id_phim'] > 0)) {
                    $movie_detail = loadone_phim($_GET['id_phim']);
                    include 'view/movie-details.php';
                } else {
                    include 'view/home.php';
                }
    
                
                break;
        case 'chon_ve':
            include 'view/datghe_bongnc/web/chon_ve.php';
            break;
        case 'datghe':
            include 'view/datghe_bongnc/web/datghe.php';
            break;
        case 'giohang':
            include 'view/datghe_bongnc/web/giohang.php';
            break;
        case 'contact':
            include 'view/lien-he/contact.php';
            break;
        case 'login':
            if (isset($_POST['btn_signin'])&&($_POST['btn_signin'])) {
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $result=sign_Users($email,$pass);
                if ($result) {
                    // if ($result['vai_tro']==0) {
                    //     $_SESSION['user'] = $result;
                    //     if ($_GET['act'] === 'admin') {
                    //         header("Location: admin/index.php?act=show_thong_ke");
                    //     } else {
                    //         header("Location: index.php");
                    //     }
                    // } else {
                        $_SESSION['user'] = $result;
                        header('Location: index.php');
                    // }
                } else {
                    echo "Không đăng nhập được";
                }
            }
            include 'account/signin.php';
            break;
        case 'quenmk':
            if (isset($_POST['btn_verify']) && $_POST['btn_verify'] ) {
                $email = $_POST['email'];
                $result = sign_change_pass($email);
                if ($result) {
                    $_SESSION['user'] = $result;
                    header('Location:index.php?act=doimk');
                } else {
                    echo "Nhap sai thong tin tai khoan hoac mat khau";
                }
            };
            include 'account/quenmk.php';
            break;
        case 'doimk':
            if (isset($_POST['btn_restore']) && ($_POST['btn_restore'])) {
                $old_pass = $_POST['old_pass'];
                $new_pass = $_POST['new_pass'];
                $user_id = $_POST['id_user'];
                $result = edit_query_user($user_id,$old_pass);
                if($result){
                    restore_Pass($user_id, $new_pass);
                    header('Location:index.php?act=login');
                }else{
                    echo 'Nhap sai mat khau cu';
                }
                
            }
            include 'account/doimk.php';
            break;
        case 'register':
            if (isset($_POST['btn_register']) && ($_POST['btn_register'])) {
                $mat_khau = $_POST['pass'];
                $email = $_POST['email'];
                $ho_ten = $_POST['ho_ten'];
                $so_dien_thoai = $_POST['so_dien_thoai'];
                $dia_chi = $_POST['dia_chi'];
                insert_User($email, $ho_ten, $dia_chi, $so_dien_thoai, $mat_khau);
                $result = query_insert_role_User();
                insert_Role($result['id_user']);
                header('Location:index.php?act=login');
            }
            include 'account/signup.php';
            break;
        case 'register_insert_thong_tin':
            break;
        default:
            include 'view/home.php';
            break;
    }
} else {
    include 'view/home.php';
}

include "view/footer.php";
