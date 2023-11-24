<style>
    body {
        background: #ccc;
    }

    .main {
        font-family: Arial;
        width: 500px;
        display: block;
        margin: 0 auto;
    }

    h1 {
        background: #040406;
        color: #e4d804;
        font-size: 15px;
        line-height: 25px;
        margin: 10px;
        padding: 2%;
        position: relative;
        text-align: center;
        width: 100px;
        cursor: pointer;
    }

    .action {
        display: block;
        margin: 100px auto;
        width: 100%;
        text-align: center;
    }

    .action a {
        display: inline-block;
        padding: 5px 10px;
        background: #f30;
        color: #fff;
        text-decoration: none;
    }

    .action a:hover {
        background: #000;
    }

    .inside {
        width: 220px;
        height: 120px;
        background-color: #1c2936;
    }

    .vitri a {
        text-decoration: none;
        color: #000;
        font-weight: 530;
        font-size: 14px;
    }

    .vitri {
        padding: 5px 67px;
        background-color: #e4d804;
        font-size: 16px;
    }

    .vitri:hover {
        padding: 5px 67px;
        background-color: #fff;
        font-size: 16px;
    }

    .rowthoigian {
        display: flex;
        align-items: center;
        padding: 0px 10px;
    }

    .thoigian a {
        padding: 10px 15px;
        background-color: #10171e;
        border: 2px solid #121c26;
        color: #97a5be;
        font-size: 20px;
        font-weight: 600;
    }

    .thoigian a:hover {
        padding: 10px 15px;
        background-color: #e4d804;
        border: 2px solid #121c26;
        color: #040406;
        font-size: 20px;
        font-weight: 600;
    }

    .gio {
        line-height: 50px;
        height: 110px;
    }

    .gio a {
        margin: 5px;
    }
</style>
<!-- main-area -->
<main>

    <!-- movie-details-area -->
    <section class="movie-details-area" data-background="img/bg/movie_details_bg.jpg">
        <div class="container">
            <?php
            extract($movie_detail);
            ?>
            <div class="row align-items-center position-relative">
                <div class="col-xl-3 col-lg-4">
                    <div class="movie-details-img">
                        <img style="width: 303px; height: 430px;" src="Assets/img/<?php echo $movie_detail['anh']; ?>" alt="">
                        <a href="<?php echo $movie_detail['trailer']; ?>" class="popup-video"><img src="img/images/play_icon.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8">
                    <div class="movie-details-content">
                        <h5>New Episodes</h5>
                        <!-- <h2>The Easy <span>Reach</span></h2> -->
                        <h2><?php echo $movie_detail['ten_phim'] ?></h2>
                        <div class="banner-meta">
                            <ul>
                                <li class="quality">
                                    <span>Pg 18</span>
                                    <span>hd</span>
                                </li>
                                <li class="category">
                                    <a href="#">Romance,</a>
                                    <a href="#">Drama</a>
                                </li>
                                <li class="release-time">
                                    <span><i class="far fa-calendar-alt"></i> 2021</span>
                                    <span><i class="far fa-clock"></i> 128 min</span>
                                </li>
                            </ul>
                        </div>
                        <p><?php echo $movie_detail['mo_ta'] ?></p>
                        <div class="movie-details-prime">
                            <ul>
                                <li class="share"><a href="#"><i class="fas fa-share-alt"></i> Share</a></li>
                                <li class="streaming">
                                    <h6>Prime Video</h6>
                                    <span>Streaming Channels</span>
                                </li>
                                <li class="watch"><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="btn popup-video"><i class="fas fa-play"></i> Watch Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="movie-details-btn">
                    <a href="img/poster/movie_details_img.jpg" class="download-btn" download="">Download <img src="fonts/download.svg" alt=""></a>
                </div>
            </div>
            <?php
            ?>
        </div>
    </section>
    <!-- movie-details-area-end -->

    <!-- episode-area -->
    <section class="episode-area episode-bg" data-background="img/bg/episode_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="movie-episode-wrap">
                        <div class="episode-top-wrap">
                            <div class="section-title">
                                <span class="sub-title">ONLINE STREAMING</span>
                                <h2 class="title">Watch Full Episode</h2>
                            </div>
                            <div class="total-views-count">
                                <p>2.7 million <i class="far fa-eye"></i></p>
                            </div>
                        </div>
                        <div class="episode-watch-wrap">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <button class="btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span class="season">Season 2</span>
                                            <span class="video-count">5 Full Episodes</span>
                                        </button>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul>
                                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 1 - The World Is Purple</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 2 - Meaner Than Evil</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 3 - I Killed a Man Today</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 4 - Cowboys and Dreamers</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 5 - Freight Trains and Monsters</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <button class="btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span class="season">Season 1</span>
                                            <span class="video-count">5 Full Episodes</span>
                                        </button>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul>
                                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 1 - The World Is Purple</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span>
                                                </li>
                                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 2 - Meaner Than Evil</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 3 - I Killed a Man Today</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span>
                                                </li>
                                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 4 - Cowboys and Dreamers</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span>
                                                </li>
                                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 5 - Freight Trains and Monsters</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="episode-img">
                        <img src="img/images/episode_img.jpg" alt="">
                    </div>
                </div>
            </div>
            <!-- gio chieu -->
            <!--  -->
            <br>
            <div class="main" style="width: 750px; margin-left: 50px;">
                <div class="slider slider-nav">

                    <?php
                    // $ngayHienTai = date('Y-m-d'); // Lấy ngày hiện tại
                    // $soNgayGioiHan = 14; // Giới hạn trong 1 tuần

                    // // echo "Ngày và thứ trong 1 tuần kể từ ngày $ngayHienTai:";

                    // for ($i = 0; $i < $soNgayGioiHan; $i++) {
                    //     $ngayHienTai = date('Y-m-d', strtotime("+$i days"));
                    //     $thuHienTai = date('l', strtotime($ngayHienTai));

                    //     echo '<div>
                    //         <h1>' . $thuHienTai . '<br>
                    //         <p style="font-size: 14px; height: 10px;">' . $ngayHienTai . '</p>           
                    //        </div>';

                    //     // echo "\nNgày $ngayHienTai là thứ $thuHienTai";
                    // }

                    ?>
                    <?php
                    foreach ($ngay_chieu as $ngay_chieu_item) {
                        // var_dump($ngay_chieu_item);
                    ?>

                        <div>

                            <div>
                                <h1><?= date('l', strtotime($ngay_chieu_item['ngaychieu'])) ?><br>
                                    <p style="font-size: 14px; height: 10px;"><?= $ngay_chieu_item['ngaychieu'] ?></p>
                            </div>

                        </div>
                    <?php
                    }
                    ?>

                </div>

                <div class="slider slider-for">
                    <div>
                        <div class="rowthoigian">
                            <div class="info">
                                <div class="inside">
                                    <h4 style="color: #ffffff; padding: 10px; font-size: 20px;">BHD Star 3.2</h4>
                                    <p style="padding: 0px 10px; color: #90a0ba;">dia diem</p>
                                </div>
                                <div class="vitri">
                                    <a href=""><i></i>XEM VỊ TRÍ</a>
                                </div>
                            </div>
                            <div class="thoigian">
                                <ul>
                                    <li class="gio" style="padding: 0 50px">
                                        <?php
                                        foreach ($lich as $lich_item) {
                                            // var_dump($lich_item);
                                        ?>
                                            <a href="index.php?act=chon_ve&id_phim=<?php echo $lich_item['id_phim']; ?>"><?= $lich_item['gio_chieu'] ?></a>
                                        <?php

                                        }
                                        ?>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div>
                        <div class="rowthoigian">
                            <div class="info">
                                <div class="inside">
                                    <h4 style="color: #ffffff; padding: 10px; font-size: 20px;">BHD Star 3.2</h4>
                                    <p style="padding: 0px 10px; color: #90a0ba;">Lầu 5, Siêu Thị Vincom 3/2, 3C Đường 3/2, Quận 10, TPHCM</p>
                                </div>
                                <div class="vitri">
                                    <a href=""><i></i>XEM VỊ TRÍ</a>
                                </div>

                            </div>
                            <div class="thoigian">
                                <ul>
                                    <li class="gio" style="padding: 0 50px">
                                        <a href="">10:10</a>
                                        <a href="">11:20</a>
                                        <a href="">12:35</a>
                                        <a href="">15:00</a>
                                        <a href="">15:55</a>
                                        <a href="">17:25</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div>
                        <div class="rowthoigian">
                            <div class="info">
                                <div class="inside">
                                    <h4 style="color: #ffffff; padding: 10px; font-size: 20px;">BHD Star 3.2</h4>
                                    <p style="padding: 0px 10px; color: #90a0ba;">Lầu 5, Siêu Thị Vincom 3/2, 3C Đường 3/2, Quận 10, TPHCM</p>
                                </div>
                                <div class="vitri">
                                    <a href=""><i></i>XEM VỊ TRÍ</a>
                                </div>

                            </div>
                            <div class="thoigian">
                                <ul>
                                    <li class="gio" style="padding: 0 50px">
                                        <a href="">10:10</a>
                                        <a href="">11:20</a>
                                        <a href="">12:35</a>
                                        <a href="">15:00</a>
                                        <a href="">15:55</a>
                                        <a href="">17:25</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div>
                        <div class="rowthoigian">
                            <div class="info">
                                <div class="inside">
                                    <h4 style="color: #ffffff; padding: 10px; font-size: 20px;">BHD Star 3.2</h4>
                                    <p style="padding: 0px 10px; color: #90a0ba;">Lầu 5, Siêu Thị Vincom 3/2, 3C Đường 3/2, Quận 10, TPHCM</p>
                                </div>
                                <div class="vitri">
                                    <a href=""><i></i>XEM VỊ TRÍ</a>
                                </div>

                            </div>
                            <div class="thoigian">
                                <ul>
                                    <li class="gio" style="padding: 0 50px">
                                        <a href="">10:10</a>
                                        <a href="">11:20</a>
                                        <a href="">12:35</a>
                                        <a href="">15:00</a>
                                        <a href="">15:55</a>
                                        <a href="">17:25</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div>
                        <div class="rowthoigian">
                            <div class="info">
                                <div class="inside">
                                    <h4 style="color: #ffffff; padding: 10px; font-size: 20px;">BHD Star 3.2</h4>
                                    <p style="padding: 0px 10px; color: #90a0ba;">Lầu 5, Siêu Thị Vincom 3/2, 3C Đường 3/2, Quận 10, TPHCM</p>
                                </div>
                                <div class="vitri">
                                    <a href=""><i></i>XEM VỊ TRÍ</a>
                                </div>

                            </div>
                            <div class="thoigian">
                                <ul>
                                    <li class="gio" style="padding: 0 50px">
                                        <a href="">10:10</a>
                                        <a href="">11:20</a>
                                        <a href="">12:35</a>
                                        <a href="">15:00</a>
                                        <a href="">15:55</a>
                                        <a href="">17:25</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="rowthoigian">
                            <div class="info">
                                <div class="inside">
                                    <h4 style="color: #ffffff; padding: 10px; font-size: 20px;">BHD Star 3.2</h4>
                                    <p style="padding: 0px 10px; color: #90a0ba;">Lầu 5, Siêu Thị Vincom 3/2, 3C Đường 3/2, Quận 10, TPHCM</p>
                                </div>
                                <div class="vitri">
                                    <a href=""><i></i>XEM VỊ TRÍ</a>
                                </div>

                            </div>
                            <div class="thoigian">
                                <ul>
                                    <li class="gio" style="padding: 0 50px">
                                        <a href="">10:10</a>
                                        <a href="">11:20</a>
                                        <a href="">12:35</a>
                                        <a href="">15:00</a>
                                        <a href="">15:55</a>
                                        <a href="">17:25</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="rowthoigian">
                            <div class="info">
                                <div class="inside">
                                    <h4 style="color: #ffffff; padding: 10px; font-size: 20px;">BHD Star 3.2</h4>
                                    <p style="padding: 0px 10px; color: #90a0ba;">Lầu 5, Siêu Thị Vincom 3/2, 3C Đường 3/2, Quận 10, TPHCM</p>
                                </div>
                                <div class="vitri">
                                    <a href=""><i></i>XEM VỊ TRÍ</a>
                                </div>

                            </div>
                            <div class="thoigian">
                                <ul>
                                    <li class="gio" style="padding: 0 50px">
                                        <a href="">10:10</a>
                                        <a href="">11:20</a>
                                        <a href="">12:35</a>
                                        <a href="">15:00</a>
                                        <a href="">15:55</a>
                                        <a href="">17:25</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <br>
                <div class="slider slider-for">
                    <div>
                        <div class="rowthoigian">
                            <div class="info">
                                <div class="inside">
                                    <h4 style="color: #ffffff; padding: 10px; font-size: 20px;">BHD Star 3.2</h4>
                                    <p style="padding: 0px 10px; color: #90a0ba;">Lầu 5, Siêu Thị Vincom 3/2, 3C Đường 3/2, Quận 10, TPHCM</p>
                                </div>
                                <div class="vitri">
                                    <a href=""><i></i>XEM VỊ TRÍ</a>
                                </div>

                            </div>
                            <div class="thoigian">
                                <ul>
                                    <li class="gio" style="padding: 0 50px">
                                        <a href="">10:10</a>
                                        <a href="">11:20</a>
                                        <a href="">12:35</a>
                                        <a href="">15:00</a>
                                        <a href="">15:55</a>
                                        <a href="">17:25</a>
                                        <a href="">17:25</a>
                                        <a href="">17:25</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="rowthoigian">
                            <div class="info">
                                <div class="inside">
                                    <h4 style="color: #ffffff; padding: 10px; font-size: 20px;">BHD Star 3.2</h4>
                                    <p style="padding: 0px 10px; color: #90a0ba;">Lầu 5, Siêu Thị Vincom 3/2, 3C Đường 3/2, Quận 10, TPHCM</p>
                                </div>
                                <div class="vitri">
                                    <a href=""><i></i>XEM VỊ TRÍ</a>
                                </div>

                            </div>
                            <div class="thoigian">
                                <ul>
                                    <li class="gio" style="padding: 0 50px">
                                        <a href="">10:10</a>
                                        <a href="">11:20</a>
                                        <a href="">12:35</a>
                                        <a href="">15:00</a>
                                        <a href="">15:55</a>
                                        <a href="">17:25</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="rowthoigian">
                            <div class="info">
                                <div class="inside">
                                    <h4 style="color: #ffffff; padding: 10px; font-size: 20px;">BHD Star 3.2</h4>
                                    <p style="padding: 0px 10px; color: #90a0ba;">Lầu 5, Siêu Thị Vincom 3/2, 3C Đường 3/2, Quận 10, TPHCM</p>
                                </div>
                                <div class="vitri">
                                    <a href=""><i></i>XEM VỊ TRÍ</a>
                                </div>

                            </div>
                            <div class="thoigian">
                                <ul>
                                    <li class="gio" style="padding: 0 50px">
                                        <a href="">10:10</a>
                                        <a href="">11:20</a>
                                        <a href="">12:35</a>
                                        <a href="">15:00</a>
                                        <a href="">15:55</a>
                                        <a href="">17:25</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="rowthoigian">
                            <div class="info">
                                <div class="inside">
                                    <h4 style="color: #ffffff; padding: 10px; font-size: 20px;">BHD Star 3.2</h4>
                                    <p style="padding: 0px 10px; color: #90a0ba;">Lầu 5, Siêu Thị Vincom 3/2, 3C Đường 3/2, Quận 10, TPHCM</p>
                                </div>
                                <div class="vitri">
                                    <a href=""><i></i>XEM VỊ TRÍ</a>
                                </div>

                            </div>
                            <div class="thoigian">
                                <ul>
                                    <li class="gio" style="padding: 0 50px">
                                        <a href="">10:10</a>
                                        <a href="">11:20</a>
                                        <a href="">12:35</a>
                                        <a href="">15:00</a>
                                        <a href="">15:55</a>
                                        <a href="">17:25</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="rowthoigian">
                            <div class="info">
                                <div class="inside">
                                    <h4 style="color: #ffffff; padding: 10px; font-size: 20px;">BHD Star 3.2</h4>
                                    <p style="padding: 0px 10px; color: #90a0ba;">Lầu 5, Siêu Thị Vincom 3/2, 3C Đường 3/2, Quận 10, TPHCM</p>
                                </div>
                                <div class="vitri">
                                    <a href=""><i></i>XEM VỊ TRÍ</a>
                                </div>

                            </div>
                            <div class="thoigian">
                                <ul>
                                    <li class="gio" style="padding: 0 50px">
                                        <a href="">10:10</a>
                                        <a href="">11:20</a>
                                        <a href="">12:35</a>
                                        <a href="">15:00</a>
                                        <a href="">15:55</a>
                                        <a href="">17:25</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="rowthoigian">
                            <div class="info">
                                <div class="inside">
                                    <h4 style="color: #ffffff; padding: 10px; font-size: 20px;">BHD Star 3.2</h4>
                                    <p style="padding: 0px 10px; color: #90a0ba;">Lầu 5, Siêu Thị Vincom 3/2, 3C Đường 3/2, Quận 10, TPHCM</p>
                                </div>
                                <div class="vitri">
                                    <a href=""><i></i>XEM VỊ TRÍ</a>
                                </div>

                            </div>
                            <div class="thoigian">
                                <ul>
                                    <li class="gio" style="padding: 0 50px">
                                        <a href="">10:10</a>
                                        <a href="">11:20</a>
                                        <a href="">12:35</a>
                                        <a href="">15:00</a>
                                        <a href="">15:55</a>
                                        <a href="">17:25</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="rowthoigian">
                            <div class="info">
                                <div class="inside">
                                    <h4 style="color: #ffffff; padding: 10px; font-size: 20px;">BHD Star 3.2</h4>
                                    <p style="padding: 0px 10px; color: #90a0ba;">Lầu 5, Siêu Thị Vincom 3/2, 3C Đường 3/2, Quận 10, TPHCM</p>
                                </div>
                                <div class="vitri">
                                    <a href=""><i></i>XEM VỊ TRÍ</a>
                                </div>

                            </div>
                            <div class="thoigian">
                                <ul>
                                    <li class="gio" style="padding: 0 50px">
                                        <a href="">10:10</a>
                                        <a href="">11:20</a>
                                        <a href="">12:35</a>
                                        <a href="">15:00</a>
                                        <a href="">15:55</a>
                                        <a href="">17:25</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="action">
        <a href="#" data-slide="3">go to slide 3</a>
        <a href="#" data-slide="4">go to slide 4</a>
        <a href="#" data-slide="5">go to slide 5</a>
      </div> -->
            </div>
            <!--  -->
            <div class="row">
                <div class="col-12">
                    <div class="movie-history-wrap">
                        <h3 class="title">About <span>History</span></h3>
                        <p>Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod tempor.There are many variations of passages of lorem
                            Ipsum available, but the majority have suffered alteration in some injected humour.There are many variations of passages
                            of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure
                            there isn't anything errassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                            repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of
                            over 200 Latin words, combined with a handful</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- episode-area-end -->


</main>
<!-- main-area-end -->