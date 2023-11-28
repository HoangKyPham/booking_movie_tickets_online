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
        padding: 100px 0;
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

    input[type=checkbox] {
        width: 13px;
        margin-right: 14px;
        cursor: pointer;
    }

    input[type=checkbox]:before {
        content: "";
        width: 25px;
        height: 18px;
        border-radius: 5px;
        /* Safari 3-4, iOS 1-3.2, Android 1.6- */
        -webkit-border-radius: 5px;
        /* Firefox 1-3.6 */
        -moz-border-radius: 5px;
        display: inline-block;
        /* vertical-align: middle; */
        text-align: center;
        border: 3px solid #ff9800;
        box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);
        -moz-box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);
        -webkit-box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);
        background-color: #ffffff;
    }

    input[type=checkbox]:checked:before {
        background-color: Green;
        font-size: 15px;
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

    .chonve p {
        padding: 5px 20px;
    }
    .btn_submit:hover{
background-color: #e4d804;
}
    /*--//responsive--*/
</style>

<body onload="onLoaderFunc()">

    <style>
        .formbongnuoc {
            display: flex;
            justify-content: center;
            max-width: 1200px;
            margin: auto;

        }

        .combo-bongnc {
            display: flex;
        }
        .combo-bongnc ul li {
            padding: 0 30px;
        }

        .combo-bongnc ul li p {
            padding: 10px 0;
        }

        .counter button {
            border-radius: 5px;
            padding: 0 15px;
        }

        #count {
            font-size: 1.3em;
            margin: 0px;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const decrementButton = document.getElementById('decrement');
            const incrementButton = document.getElementById('increment');
            const countElement = document.getElementById('count');

            let count = 0;

            function updateCount() {
                countElement.textContent = count;
            }

            decrementButton.addEventListener('click', function() {
                count = Math.max(0, count - 1);
                updateCount();
            });

            incrementButton.addEventListener('click', function() {
                count += 1;
                updateCount();
            });

            // Initialize count display
            updateCount();
        });
    </script>
    <h2 style="text-align: center; font-size: 30px; font-weight: bold; margin-top: 150px; color: #ffffff; height: 100px;">Combo Bỏng&Nước</h2>
    <div class="formbongnuoc">
        <?php 
        foreach ($show_do_an as $doan_item) {
            # code...
        
        ?>
        <section class="combo-bongnc">

            <img  style="width: 150px; height: 150px; object-fit:cover;" src="Assets/img/<?php echo $doan_item['img']; ?>" alt="">
 
            <ul>
                <li>
                    <p><?php echo $doan_item['ten_do_an'] ?></p>
                </li>
                <li>
                    <p>* <?php echo $doan_item['mo_ta'] ?></p>
                </li>
                <li>
                    <p>Giá: <?php echo $doan_item['gia'] ?>đ</p>
                </li>
                <li>
                    <div class="counter">
                        <button id="decrement">-</button>
                        <button id="count">0</button>
                        <button id="increment">+</button>
                    </div>
                </li>
            </ul>
            
           
           
        </section>
               
        <?php } ?>     
    </div>

    <!-- <div class="formbongnuoc" style="padding: 100px 0;">
        <section class="combo-bongnc">

            <img src="view/datghe_bongnc/web/images/bongnuoc.jpg" alt="" style="width: 150px; height: 150px;">
            <ul>
                <li>
                    <p>Line 3 single combo</p>
                </li>
                <li>
                    <p>* Miễn phí vị bắp phô mai, Caramel</p>
                </li>
                <li>
                    <p>* Nhận tronng ngày xem phim</p>
                </li>
                <li>
                    <p>Giá: 100.000đ</p>
                </li>
                <li>
                    <div class="counter">
                        <button id="decrement">-</button>
                        <button id="count">0</button>
                        <button id="increment">+</button>
                    </div>
                </li>
            </ul>
        </section>
        <section class="combo-bongnc">

            <img src="view/datghe_bongnc/web/images/bongnuoc.jpg" alt="" style="width: 150px; height: 150px;">
            <ul>
                <li>
                    <p>Line 3 single combo</p>
                </li>
                <li>
                    <p>* Miễn phí vị bắp phô mai, Caramel</p>
                </li>
                <li>
                    <p>* Nhận tronng ngày xem phim</p>
                </li>
                <li>
                    <p>Giá: 100.000đ</p>
                </li>
                <li>
                    <div class="counter">
                        <button id="decrement">-</button>
                        <button id="count">0</button>
                        <button id="increment">+</button>
                    </div>
                </li>
            </ul>
        </section>
        <section class="combo-bongnc">

            <img src="view/datghe_bongnc/web/images/bongnuoc.jpg" alt="" style="width: 150px; height: 150px;">
            <ul>
                <li>
                    <p>Line 3 single combo</p>
                </li>
                <li>
                    <p>* Miễn phí vị bắp phô mai, Caramel</p>
                </li>
                <li>
                    <p>* Nhận tronng ngày xem phim</p>
                </li>
                <li>
                    <p>Giá: 100.000đ</p>
                </li>
                <li>
                    <div class="counter">
                        <button id="decrement">-</button>
                        <button id="count">0</button>
                        <button id="increment">+</button>
                    </div>
                </li>
            </ul>
        </section>
    </div> -->
    <a href="index.php?act=giohang" style="display: flex; justify-content: center; padding: 50px;"><button class="btn_submit">Xác nhận</button></a>
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for seat selection -->
    <script>
        function onLoaderFunc() {
            $(".seatStructure *").prop("disabled", true);
            $(".displayerBoxes *").prop("disabled", true);
        }

        function takeData() {
            if (($("#Username").val().length == 0) || ($("#Numseats").val().length == 0)) {
                alert("Please Enter your Name and Number of Seats");
            } else {
                $(".inputForm *").prop("disabled", true);
                $(".seatStructure *").prop("disabled", false);
                document.getElementById("notification").innerHTML =
                    "<b style='margin-bottom:0px;background:#ff9800;letter-spacing:1px;'>Please Select your Seats NOW!</b>";
            }
        }


        function updateTextArea() {

            if ($("input:checked").length == ($("#Numseats").val())) {
                $(".seatStructure *").prop("disabled", true);

                var allNameVals = [];
                var allNumberVals = [];
                var allSeatsVals = [];

                //Storing in Array
                allNameVals.push($("#Username").val());
                allNumberVals.push($("#Numseats").val());
                $('#seatsBlock :checked').each(function() {
                    allSeatsVals.push($(this).val());
                });

                //Displaying 
                $('#nameDisplay').val(allNameVals);
                $('#NumberDisplay').val(allNumberVals);
                $('#seatsDisplay').val(allSeatsVals);
            } else {
                alert("Please select " + ($("#Numseats").val()) + " seats")
            }
        }


        function myFunction() {
            alert($("input:checked").length);
        }

        /*
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
        */


        $(":checkbox").click(function() {
            if ($("input:checked").length == ($("#Numseats").val())) {
                $(":checkbox").prop('disabled', true);
                $(':checked').prop('disabled', false);
            } else {
                $(":checkbox").prop('disabled', false);
            }
        });
    </script>
    <!-- //script for seat selection -->

</body>