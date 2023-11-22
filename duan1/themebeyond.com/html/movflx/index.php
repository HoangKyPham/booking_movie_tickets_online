<?php
include "model/pdo.php";
include "view/header.php";
include "model/users.php";
include "model/cinema.php";
include "model/khuyenmai.php";
// $he_thong_rap=show_he_thong_rap();
$show_rap = show_he_thong_rap();
$show_promotion = show_khuyen_mai();


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
            include 'view/movie-details.php';
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
            if (isset($_POST['btn_signin']) && ($_POST['btn_signin'])) {
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $result = sign_Users($email, $pass);
                if ($result) {
                    if ($result['vai_tro'] == 0) {
                        $_SESSION['user'] = $result;
                        if ($_GET['act'] === 'admin') {
                            header("Location: admin/index.php?act=show_thong_ke");
                        } else {
                            header("Location: index.php");
                        }
                    } else {
                        $_SESSION['user'] = $result;
                        header('Location: index.php');
                    }
                } else {
                    echo "Không đăng nhập được";
                }
            }
            include 'account/signin.php';
            break;

        case 'doimk':
            include 'account/doimk.php';
            break;
        case 'register':
            if (isset($_POST['btn_register']) && ($_POST['btn_register'])) {
                $mat_khau = $_POST['pass'];
                $email = $_POST['email'];
                $ho_ten = $_POST['ho_ten'];
                $so_dien_thoai = $_POST['so_dien_thoai'];
                $dia_chi = $_POST['dia_chi'];
                insert_Users($mat_khau, $email, $ho_ten, $dia_chi, $so_dien_thoai);
                header('Location:index.php?act=sign_in');
            }
            include 'account/signup.php';
            break;
        case 'quenmk':
            include 'account/quenmk.php';
            break;
        default:
            include 'view/home.php';
            break;
    }
} else {
    include 'view/home.php';
}

include "view/footer.php";
