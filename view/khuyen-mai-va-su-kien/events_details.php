
        <!-- header-area-end -->


        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 class="title">News Details</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- blog-details-area -->
            <section class="blog-details-area blog-bg" data-background="img/bg/blog_bg.jpg">
                <div class="container">
                    <div class="row">
                        <?php 
                         extract($events_detail);
                        ?>
                        <div class="col-lg-8">
                            <div class="blog-post-item blog-details-wrap">
                                <div class="blog-post-thumb">
                                    <a href="blog-details.html"><img src="Assets/img/<?php echo $events_detail['img']; ?>" alt="" style="width: 856.66px; height: 451.86px; object-fit:cover"></a>
                                </div>
                                <div class="blog-post-content">
                                    <div class="banner-meta" style="height: 10px;">
                                        <ul>
                                            <li class="release-time">
                                                <span><i class="far fa-calendar-alt"></i>Áp dụng từ 20/11/2023 - 30/11/2023</span>
                                            </li>
                                            <li class="quality">
                                                <span style="margin-left: 400px;">Chia sẻ</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2 class="title"><?php echo $events_detail['ten_khuyen_mai'] ?></h2>
                                    <p style="font-weight: bold; color: #e4d804;">– Chương trình: ƯU ĐÃI SUẤT CHIẾU KHUYA</p>
                                <p><span style="color: #fff;">– Hình thức áp dụng:</span> Giá vé 2D đặc biệt cho khách hàng xem phim vào các suất
                                    chiếu sau 22:00</p>
                                <p><span style="color: #fff;">– Đối tượng áp dụng:</span> Tất cả đối tượng khách hàng</p>
                                <p><span style="color: #fff;">– Chính sách giá vé:</span> Thay đổi tuỳ vào các cụm rạp (Vui lòng tham khảo bảng giá vé tại các rạp)</p>
                                <p><span style="color: #fff;">– Điều kiện áp dụng:</span></p>
                                <p>+ Áp dụng cho mọi suất chiếu phim 2D sau 22:00</p>
                                <p>+ Áp dụng phụ thu ghế đôi, ghế Sofa, ghế Premium.</p>
                                <p>+ Không áp dụng phòng First Class.</p>
                                <p>+ Không áp dụng kèm các chương trình giảm giá vé khác.</p>
                                <p>+ Áp dụng phụ thu đối với phim 3D, phim bom tấn.</p>
                                <p>Ban Quản Lý Rạp có thể thay đổi hoặc dừng chương trình mà không thông báo trước.</p>
                                    <blockquote>
                                        <i class="fas fa-quote-right"></i>
                                        <p>Watch Mobflx movies & TV shows online or stream rights to your smart TV, game console, PC, mobile more.</p>
                                        <figure><span>Frenk Smith</span> Founder ceo</figure>
                                    </blockquote>
                                    
                                 
                                    <div class="blog-post-meta">
                                       
                                        <div class="blog-post-share">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                        </div>
                        <?php ?>
                        <div class="col-lg-4">
                            <aside class="blog-sidebar">
                                
                                <div class="widget blog-widget">
                                    <div class="widget-title mb-30">
                                        <h5 class="title">Khuyến mãi khác</h5>
                                    </div>
                                    <div class="rc-post">
                                        <ul>
                                            <li class="rc-post-item">
                                                <div class="thumb">
                                                    <a href="blog-details.html"><img src="img/blog/rc_post_thumb01.jpg" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title"><a href="blog-details.html">Express Management Effective</a></h5>
                                                    <span class="date"><i class="far fa-clock"></i> 10 Mar 2021</span>
                                                </div>
                                            </li>
                                            <li class="rc-post-item">
                                                <div class="thumb">
                                                    <a href="blog-details.html"><img src="img/blog/rc_post_thumb02.jpg" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title"><a href="blog-details.html">Where watch English movies free?</a></h5>
                                                    <span class="date"><i class="far fa-clock"></i> 10 Mar 2021</span>
                                                </div>
                                            </li>
                                            <li class="rc-post-item">
                                                <div class="thumb">
                                                    <a href="blog-details.html"><img src="img/blog/rc_post_thumb03.jpg" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title"><a href="blog-details.html">House movie streaming website</a></h5>
                                                    <span class="date"><i class="far fa-clock"></i> 10 Mar 2021</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->



            <!-- newsletter-area -->
           
            <!-- newsletter-area-end -->

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
