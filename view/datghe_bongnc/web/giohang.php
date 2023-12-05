<style>
    /*
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
*/

    /*--reset--*/

    html,
    body,
    div,
    span,
    applet,
    object,
    iframe,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    pre,
    a,
    abbr,
    acronym,
    address,
    big,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    s,
    samp,
    small,
    strike,
    strong,
    sub,
    sup,
    tt,
    var,
    b,
    u,
    i,
    dl,
    dt,
    dd,
    ol,
    nav ul,
    nav li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    embed,
    figure,
    figcaption,
    footer,
    header,
    hgroup,
    menu,
    nav,
    output,
    ruby,
    section,
    summary,
    time,
    mark,
    audio,
    video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
        display: block;
    }

    ol,
    ul {
        list-style: none;
        margin: 0px;
        padding: 0px;
    }

    blockquote,
    q {
        quotes: none;
    }

    blockquote:before,
    blockquote:after,
    q:before,
    q:after {
        content: '';
        content: none;
    }

    table {
        display: table;
        border-collapse: separate;
        border-spacing: 2px;
        border-color: grey;
    }

    td {
        width: 40px;
        font-weight: 600;
        font-size: 1em;
        padding-top: 7px;
        height: 24px;
        color: #fff;
    }

    /*--start editing from here--*/

    a {
        text-decoration: none;
    }

    .txt-rt {
        text-align: right;
    }

    /* text align right */

    .txt-lt {
        text-align: left;
    }

    /* text align left */

    .txt-center {
        text-align: center;
    }

    /* text align center */

    .float-rt {
        float: right;
    }

    /* float right */

    .float-lt {
        float: left;
    }

    /* float left */

    .clearfix {
        clear: both;
    }

    /* clear float */

    .pos-relative {
        position: relative;
    }

    /* Position Relative */

    .pos-absolute {
        position: absolute;
    }

    /* Position Absolute */

    .vertical-base {
        vertical-align: baseline;
    }

    /* vertical align baseline */

    .vertical-top {
        vertical-align: top;
    }

    /* vertical align top */

    nav.vertical ul li {
        display: block;
    }

    /* vertical menu */

    nav.horizontal ul li {
        display: inline-block;
    }

    /* horizontal menu */

    img {
        max-width: 100%;
    }

    /*--end reset--*/

    button.w3l-cart {
        transition: 0.5s all;
        -webkit-transition: 0.5s all;
        -moz-transition: 0.5s all;
        -o-transition: 0.5s all;
        -ms-transition: 0.5s all;
        text-decoration: none;
        outline: none;
    }

    body a:hover {
        text-decoration: none;
    }

    .clearfix {
        clear: both;
    }

    /* content */

    body {
        background: url(view/datghe_bongnc/web/images/banner.jpg) no-repeat center;
        background-size: cover;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        -ms-background-size: cover;
        background-attachment: fixed;
        font-family: 'Source Sans Pro', sans-serif;
    }

    .mr_agilemain span {
        color: #f00;
    }

    .w3ls-reg {
        width: 700px;
        margin: 0 5vw;
        background: rgba(128, 128, 128, 0.34);
        padding: 3.5vw;
        box-sizing: border-box;
        display: flex;
        display: -webkit-flex;
        flex-wrap: wrap;
    }

    .contaicon {
        display: -webkit-flex;
        display: -webkit-box;
        display: -moz-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        -webkit-box-pack: center;
        -moz-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        padding-top: 100px;
    }

    h1 {
        font-size: 2.9em;
        text-transform: uppercase;
        color: #fff;
        font-weight: 600;
        text-shadow: 4px 3px 1px rgba(0, 0, 0, 0.22);
        letter-spacing: 2px;
        text-align: center;
        margin: 0.8em 1vw .9em;
        font-family: 'Source Sans Pro', sans-serif;
    }

    h2 {
        color: #ff9800;
        text-transform: capitalize;
        margin-bottom: 25px;
        font-size: 1em;
        letter-spacing: 0.5px;
        line-height: 1.7;
    }

    .mr_agilemain {
        display: flex;
        justify-content: space-between;
        width: 100%;
    }

    .agileits-left {
        flex-basis: 60%;
        margin-bottom: 1.5em;
    }

    li.smallBox {
        text-align: left;
        display: inline-block;
        margin-right: 1em;
        color: #fff;
    }

    .agileits-right {
        flex-basis: 40%;
        margin-bottom: 1.5em;
    }

    .tw {
        width: 50%;
    }

    label {
        font-size: 1em;
        color: #fff;
        font-weight: 600;
    }

    input[type="text"],
    input[type="number"] {
        padding: 1em;
        width: 80%;
        background: transparent;
        border: 1px solid #888686;
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 1em;
        margin-top: 10px;
        color: #fff;
    }

    button {
        background: #f5f5f5;
        border: none;
        color: #000;
        font-weight: 600;
        padding: 8px 20px;
        border-radius: 10px;
        font-size: 1em;
        letter-spacing: 1px;
        font-family: 'Source Sans Pro', sans-serif;
        cursor: pointer;
    }

    ul.seat_w3ls {
        margin: 2em 0;
    }

    .screen {
        width: 100%;
        background: #ff9800;
        margin: 2em 0;
    }

    h2.wthree {
        padding: 0.8em;
        font-size: 1.2em;
        color: #000;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 7px;
        word-spacing: 10px;
    }

    .smallBox::before {
        content: "";
        width: 15px;
        height: 15px;
        display: inline-block;
        margin-right: 10px;
    }

    .greenBox::before {
        content: "";
        background: Green;
    }

    .redBox::before {
        content: "";
        background: Red;
    }

    .emptyBox::before {
        content: "";
        box-shadow: inset 0px 2px 3px 0px rgb(255, 152, 0), 0px 1px 0px 0px rgba(255, 255, 255, .8);
        -moz-box-shadow: inset 0px 2px 3px 0px rgb(255, 152, 0), 0px 1px 0px 0px rgba(255, 255, 255, .8);
        -webkit-box-shadow: inset 0px 2px 3px 0px rgb(255, 152, 0), 0px 1px 0px 0px rgba(255, 255, 255, .8);
        background-color: #fff;
    }

    .seats {
        border: 1px solid red;
        background: yellow;
    }

    .seatGap {
        width: 40px;
    }

    .seatVGap {
        height: 40px;
    }

    table {
        text-align: center;
    }

    .Displaytable {
        text-align: center;
    }

    .Displaytable td,
    .Displaytable th {
        width: 100%;
        padding: 7px 10px;
        color: #000;
        font-weight: 600;
    }

    table.Displaytable tr {
        background: #fff;
        color: #fff;
    }

    textarea {
        border: none;
        background: transparent;
        resize: none;
    }

    .copy-wthree p {
        color: #fff;
        font-size: 15px;
        letter-spacing: 1px;
        font-weight: 600;
        line-height: 1.7;
        padding: 0 1em;
    }

    .copy-wthree p a {
        color: #fff;
    }

    .copy-wthree {
        margin: 3em 0em;
        text-align: center;
    }

    .displayerBoxes {
        margin-top: 2em;
    }

    /*--responsive--*/

    @media(max-width:1920px) {
        h1 {
            font-size: 3.5vw;
        }
    }

    @media(max-width:1024px) {
        h1 {
            font-size: 4.5vw;
        }
    }

    @media(max-width:800px) {
        h1 {
            font-size: 5vw;
        }
    }

    @media(max-width:667px) {
        h2.wthree {
            padding: 0.7em;
            font-size: 1em;
        }
    }

    @media(max-width:600px) {
        .w3ls-reg {
            width: 500px;
        }
    }

    @media(max-width:568px) {
        .mr_agilemain {
            display: block;
        }

        input[type="text"],
        input[type="number"] {
            padding: 10px 15px;
            width: 100%;
        }
    }

    @media(max-width:480px) {
        .w3ls-reg {
            width: 450px;
        }

        h1 {
            font-size: 2.5em;
        }

        .w3ls-login form {
            padding: 7.5vw;
        }
    }

    @media(max-width:440px) {
        h1 {
            font-size: 2.3em;
        }
    }

    @media(max-width:414px) {
        h1 {
            font-size: 2em;
        }

        .w3ls-reg {
            width: 370px;
        }

        input[type="text"],
        input[type="number"] {
            width: 92%;
        }

        li.smallBox {
            margin: 1em 0 0;
            display: block;
        }
    }

    @media(max-width:384px) {
        h1 {
            font-size: 1.9em;
        }

        .w3ls-reg {
            width: 350px;
        }

        h2.wthree {
            padding: 0.5em;
        }
    }

    @media(max-width:320px) {
        h1 {
            font-size: 1.5em;
        }

        .w3ls-reg {
            width: 280px;
        }

        input[type="text"],
        input[type="number"] {
            width: 88%;
        }

        h2.wthree {
            font-size: 0.95em;
            letter-spacing: 5px;
        }

        .copy-wthree p {
            padding: 0 0.5em;
        }
    }

    .formxacnhan {
        border: 1px solid #ccc;
        width: 800px;
        background: #333;
    }

    .form_muc {
        display: flex;
        justify-content: center;
    }

    .form_muc p {
        padding: 10px 0;
    }

    .noidung_muc {
        display: flex;
        justify-content: center;
    }

    .muccon p {
        padding: 10px 50px;
    }

    .tongtien {
        display: flex;
        justify-content: center;
    }

    .tongtien p {
        padding: 10px 10px;
    }

    .formttcanhan {
        display: flex;
        justify-content: center;
    }

    .formttcanhan li {
        display: flex;

        flex-direction: column;
    }

    .formttcanhan input {
        width: 300px;
        height: 30px;
    }

    .input_chon {
        background: #f5f5f5;
        border: none;
        color: #000;
        font-weight: 600;
        padding: 8px 20px;
        border-radius: 10px;
        font-size: 1em;
        letter-spacing: 1px;
    }

    .input_chon:hover {
        background-color: #e4d804;
    }

    /*--//responsive--*/
    .payment-form {
        display: flex;
        justify-content: center;
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    #selectedPayment {
        margin-top: 20px;
    }
</style>


<?php
if (isset($_SESSION['my_seat']) && count($_SESSION['my_seat']) != 0 && isset($_SESSION['my_user']) && count($_SESSION['my_user']) != 0) {
?>
    <h1></h1>
    <div class="contaicon">
        <!-- Xác nhận -->
        <div class="formxacnhan">
            <form action="index.php?act=thanh_toan" method="post">
                <h2 style="text-align: center; font-size: 30px; font-weight: bold; color: #ffffff; padding: 30px 0; border-bottom: 1px solid #ccc;">Giỏ hàng của bạn</h2>
                <div class="form_muc">
                    <ul>
                        <li style="position: relative; right: 200px;">
                            <p style="color: #e4d804;">Phim/Title: <?php echo $phim_da_chon['ten_phim']; ?></p>
                            <p>Rạp/Cinema: <?php echo $phim_da_chon['ten_rap']; ?> - <?php echo $phim_da_chon['dia_diem']; ?></p>
                            <p>Ngày/Date: <?php echo $phim_da_chon['ngay_chieu']; ?></p>
                            <p>Suất/Session: <?php echo $phim_da_chon['gio_chieu']; ?></p>
                            <p>Ghế/Seat:
                                <?php
                                $tong_tien_ghe = 0;
                                foreach ($_SESSION['my_seat'] as $seat) {
                                    echo $seat['ten_ghe'] . ' ';
                                    $tong_tien_ghe = $tong_tien_ghe + $seat['gia'];
                                }
                                ?>
                            </p>
                            <p>Thành tiền/Toal:<?php echo $tong_tien_ghe; ?></p>
                        </li>
                    </ul>
                </div>
                <div style="margin-left: 12%; padding: 20px 0;">
                    <p>Quý khách vui lòng kiểm tra lại thông tin trước khi thanh toán</p>
                    <p style="color: red;">Vé mua sẽ không được đổi hoặc trả lại</p>
                    <p>Please check the information before purchasing ticket</p>
                    <p style="color: red;">Purchased ticket can not be changed or refunded</p>
                </div>

                <div class="noidung_muc">
                    <div class="muccon">
                        <p style="color: #e4d804;">Mục</p>
                        <p style="color: #e4d804;">Số lượng</p>
                        <p style="color: #e4d804;">Giá</p>
                        <p style="color: #e4d804;">Cộng</p>
                    </div>
                    <div class="muccon">
                        <?php
                        $tong_tien_ve = 0;
                        foreach ($_SESSION['my_ticket'] as $type => $ticket) : ?>
                            <?php
                            if (isset($ticket['so_luong']) && $ticket['so_luong'] > 0) :
                                $tong_tien_ve += $ticket['so_luong'] * $ticket['gia_ve'];
                            ?>
                                <p><?php echo $ticket['ten_gia_ve'] ?></p>
                                <p><?php echo $ticket['so_luong'] ?></p>
                                <p><?php echo $ticket['gia_ve'] ?> VND</p>

                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <div class="muccon">
                        <?php
                        $tong_tien_bonus = 0;
                        foreach ($_SESSION['my_bonus'] as $type => $bonus) : ?>
                            <?php
                            if (isset($bonus['so_luong']) && $bonus['so_luong'] > 0) :
                                $tong_tien_bonus += $bonus['so_luong'] * $bonus['gia_do_an'];

                            ?>
                                <p><?php echo $bonus['ten_do_an'] ?></p>
                                <p><?php echo $bonus['so_luong'] ?></p>
                                <p><?php echo $bonus['gia_do_an'] ?> VND</p>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="tongtien">
                    <ul>
                        <li style="display: flex; margin-right: 390px;">
                            <p style="font-size: 20px; font-weight: 600;">Tổng cộng:</p>
                            <p style="position: relative; left: 420px; font-size: 20px; font-weight: 600;"><?php echo $_SESSION['my_total'][0]; ?></p>
                        </li>
                    </ul>
                </div>

        </div>
       
    </div>
    </div>

    <!--  -->
    <h2 style="text-align: center; font-size: 30px; font-weight: bold; color: #ffffff; padding-top: 30px;">Chi tiết cá nhân</h2>
    <div class="formttcanhan">
        <ul>
            <li>
                <label for="">Tên*</label>
                <input type="text" require name="name">
            </li>
            <li>
                <label for="">Email*</label>
                <input type="text" require name="email">
            </li>
            <li>
                <label for="">Điện thoại*</label>
                <input type="text" require name="phone">
            </li>
            <li>
                <label for="">Địa chỉ*</label>
                <input type="text" require name="address">
            </li>
        </ul>
    </div>
    <div style="text-align: center;">
        <input type="submit" name="redirect" value="Thanh toán">
    </div>
    </form>
    <a href="index.php?act=huy_dat_ve"><input type="submit" style="margin: 30px 15px;" value="Hủy đặt vé"></input></a>
<?php
} else {
    header('Location:index.php');
}
?>