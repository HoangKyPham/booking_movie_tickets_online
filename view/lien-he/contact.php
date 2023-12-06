
        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 class="title">Contact Us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- contact-area -->
            <section class="contact-area contact-bg" data-background="img/bg/contact_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class="contact-form-wrap">
                                <div class="widget-title mb-50">
                                    <h5 class="title">Contact Form</h5>
                                </div>
                                <div class="contact-form">
                                    <form action="index.php?act=contact" method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                            <span style="color: red;"><?php echo (isset($err['ho_ten']))? $err['ho_ten']: '' ?></span> 
                                                <input type="text" name="ho_ten" placeholder="You Name *">
                                            </div>
                                            <div class="col-md-6">
                                            <span style="color: red;"><?php echo (isset($err['email']))? $err['email']: '' ?></span>  
                                                <input type="email" name="email" placeholder="You  Email *">
                                            </div>
                                        </div>
                                        <span style="color: red;"><?php echo (isset($err['chu_de']))? $err['chu_de']: '' ?></span> 
                                        <input type="text" name="chu_de" placeholder="Subject *">
                                        <span style="color: red;"><?php echo (isset($err['noi_dung']))? $err['noi_dung']: '' ?></span> 
                                        <textarea name="noi_dung" placeholder="Type Your Message..."></textarea>
                                        <input style="border: 2px solid #e4d804; border-radius: 30px; font-weight: 700;" class="btn" name="btn_contact" type="submit" value="Send Message">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="widget-title mb-50">
                                <h5 class="title">Information</h5>
                            </div>
                            <div class="contact-info-wrap">
                                <p><span>Find solutions :</span> to common problems, or get help from a support agent industry's standard .</p>
                                <div class="contact-info-list">
                                    <ul>
                                        <li>
                                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                            <p><span>Address :</span> W38 Park Road New York</p>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fas fa-phone-alt"></i></div>
                                            <p><span>Phone :</span> (09) 123 854 365</p>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fas fa-envelope"></i></div>
                                            <p><span>Email :</span> <a href="https://themebeyond.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="384b4d4848574a4c7855574e5e5440165b5755">[email&#160;protected]</a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->


        </main>
        <!-- main-area-end -->


 