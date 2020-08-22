<?php
get_header(); ?>
<div id="root">
    <!-- header -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 col-12 mx-auto">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="#">
                            <img src="<?php echo THEME_ASSET_WEB; ?>images/logo.png" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-bar"
                                aria-controls="menu-bar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                  <i class="fas fa-bars"></i>
                </span>
                        </button>

                        <div class="collapse navbar-collapse" id="menu-bar">
                            <ul class="navbar-nav align-items-md-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#thongtin">Thông tin khóa học</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#thuvien">Thư viện ảnh</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#form-section">Liên hệ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn--rounded btn--yellow btn--wave" href="#form-section">đăng
                                        ký</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header -->

    <!-- main -->
    <main class="main">
        <!-- ảnh hoa  -->
        <img class="img-fluid hoa hoa1" src="<?php echo THEME_ASSET_WEB; ?>images/hoa1.png" alt="">
        <img class="img-fluid hoa hoa2" src="<?php echo THEME_ASSET_WEB; ?>images/hoa2.png" alt="">
        <img class="img-fluid hoa hoa3" src="<?php echo THEME_ASSET_WEB; ?>images/hoa3.png" alt="">
        <img class="img-fluid hoa hoa4" src="<?php echo THEME_ASSET_WEB; ?>images/hoa4.png" alt="">
        <img class="img-fluid hoa hoa5" src="<?php echo THEME_ASSET_WEB; ?>images/hoa5.png" alt="">
        <!-- ảnh hoa  -->

        <!-- section banner -->
        <section class="banner">
            <div class="banner-slide swiper-container">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php
                    $banners = new WP_Query([
                        'post_type' => 'banner',
                    ]);

                    while ($banners->have_posts()) {
                        $banners->the_post(); ?>
                        <div class="swiper-slide banner__item">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
                                 class="img-fluid">
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <a href="#form-section" class="btn btn--wave btn--rounded btn-bg--yellow register-btn">Đăng ký</a>
        </section>
        <!-- !section banner -->

        <!-- section content -->
        <section class="inner-content">
            <div class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2 class="heading">
                                tại sao nên chọn hera queen?
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="box">
                                <img class="img-fluid box__image" src="<?php echo THEME_ASSET_WEB; ?>images/keo.png"
                                     alt="">
                                <div class="box-detail">
                                    <h3 class="box__title"><?php echo get_field('box_title_1'); ?></h3>
                                    <p class="box__desc">
                                        <?php echo get_field('box_content_1'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box">
                                <img class="img-fluid box__image"
                                     src="<?php echo THEME_ASSET_WEB; ?>images/may-khau.png" alt="">
                                <div class="box-detail">
                                    <h3 class="box__title"><?php echo get_field('box_title_2'); ?></h3>
                                    <p class="box__desc">
                                        <?php echo get_field('box_content_2'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box">
                                <img class="img-fluid box__image" src="<?php echo THEME_ASSET_WEB; ?>images/kimchi.png"
                                     alt="">
                                <div class="box-detail">
                                    <h3 class="box__title"><?php echo get_field('box_title_3'); ?></h3>
                                    <p class="box__desc">
                                        <?php echo get_field('box_content_3'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-sc">
                <div class="container">
                    <div class="row">
                        <?php
                        $url = get_field('video_frame_2');
                        preg_match("#(?<=v=|v\/|vi=|vi\/|youtu.be\/)[a-zA-Z0-9_-]{11}#", $url, $matches);
                        $youtubeId = $matches[0];
                        ?>
                        <div class="col-md-10 offset-md-1 text-right">
                            <div class="embed-responsive embed-responsive-16by9">

                                <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/<?php echo $youtubeId; ?>"
                                        allowfullscreen></iframe>
                            </div>
                            <a class="d-inline-block" href="<?php echo get_field('youtube_page'); ?>" target="_blank">Xem
                                thêm <i
                                        class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="thongtin" class="info"
                 style="background-image: url('<?php echo THEME_ASSET_WEB; ?>images/39621-O2DGUE-04.png');">
                <div class="background--full"
                     style="background-image: url('<?php echo THEME_ASSET_WEB; ?>images/39621-O2DGUE-04.png'); position: absolute; width: 100%; height: 100%; background-position: center; background-size: cover; top: 0; left: 0;">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2 class="heading">
                                THÔNG TIN KHÓA HỌC
                            </h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10 offset-md-1 info__heading">
                            <div class="info__image">
                                <?php
                                $arrayObject = get_field('image_frame_3');
                                $url = $arrayObject['url'];
                                ?>
                                <img class="img-fluid" src="<?php echo $url; ?>" alt="">
                                <a class="btn btn--rounded btn-bg--yellow btn--wave register-btn" href="#form-section">đăng
                                    ký</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <!-- slide -->
                            <div class="course-slide swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- slide item -->
                                    <?php
                                    $course = new WP_Query([
                                        'post_type' => 'course',
                                    ]);

                                    while ($course->have_posts()) {
                                        $course->the_post(); ?>
                                        <div class="swiper-slide"
                                             style="background-image: url('<?php echo THEME_ASSET_WEB; ?>images/bg-course.png');">
                                            <div class="slide__image">
                                                <img src="<?php the_post_thumbnail_url(); ?>"
                                                     class="img-fluid"
                                                     alt="">
                                            </div>
                                            <div class="slide-content">
                                                <div class="slide-content__heading">
                          <span>
                            <h3>KHÓA HỌC</h3>
                          </span>
                                                    <span>
                            <p><?php the_title(); ?></p>
                            <b><?php echo get_field('time'); ?> | <?php echo get_field('price'); ?></b>
                          </span>
                                                </div>
                                                <ul class="slide-content__list">
                                                    <?php the_content(); ?>
                                                </ul>
                                                <a href="#form-section"
                                                   class="btn btn--wave btn--rounded btn-bg--yellow register-btn">Đăng
                                                    ký</a>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    wp_reset_postdata();
                                    ?>
                                    <!-- !slide item -->
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev"><i class="fal fa-long-arrow-left"></i></div>
                                <div class="swiper-button-next"><i class="fal fa-long-arrow-right"></i></div>
                            </div>
                            <!-- slide -->
                        </div>
                    </div>
                </div>
        </section>
        <!-- !section content -->

        <!-- section form -->
        <section id="form-section" class="form-course"
                 style="background-image: url('<?php echo THEME_ASSET_WEB; ?>images/bg-countdown.png');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="countdown-container">
                            <h2>ƯU ĐÃI SẼ KẾT THÚC SAU:</h2>
                            <?php $time_start = get_field('time_start', false, false);
                            $time_start = strtotime($time_start);
                            $now =  current_time('timestamp');
                            $secondsFromStartToNow = $now - $time_start;
                            $result = $secondsFromStartToNow % 432000;
                            $conlai = 432000 - $result;
                            ?>
                            <span id="timeconlai" value="<?php echo $conlai; ?>" hidden></span>
                            <ul class="countdown">
                                <li><span id="days">1</span>Ngày</li>
                                <li><span id="hours">2</span>Giờ</li>
                                <li><span id="minutes">3</span>Phút</li>
                                <li><span id="seconds">4</span>Giây</li>
                            </ul>

                            <div class="voucher"
                                 style="background-image: url('<?php echo THEME_ASSET_WEB; ?>images/border.png');">
                                <p>Chương trình ưu đãi áp dụng từ
                                    11/08/2020 đến 20/08/2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-container">
                            <h2>ĐĂNG KÝ KHÓA HỌC NGAY</h2>
                            <h3>ĐỂ NHẬN ƯU ĐÃI &nbsp; <span>50%</span> &nbsp; HỌC PHÍ</h3>

                            <form style="background-image: url('<?php echo THEME_ASSET_WEB; ?>images/form.png');">
                                <div class="form-group">
                                    <label for="text">Họ tên:</label>
                                    <input type="text" class="form-control" placeholder="Tên của bạn...">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Số điện thoại(*):</label>
                                    <input type="tel" class="form-control" placeholder="Số điện thoại của bạn...">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" placeholder="Email của bạn...">
                                </div>
                                <div class="form-group">
                                    <label for="course">Khóa học quan tâm</label>
                                    <select id="course" class="form-control">
                                        <option selected>Choose...</option>
                                        <option value="0">Đào tạo Kỹ thuật đính kết làm phụ kiện & handmade</option>
                                        <option value="1">Đào tạo Kỹ thuật đính kết làm phụ kiện & handmade</option>
                                        <option value="2">Đào tạo Kỹ thuật đính kết làm phụ kiện & handmade</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn--rounded btn--wave btn-bg--yellow">ĐĂNG
                                    KÝ
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- !section form -->

        <!-- section library -->
        <section id="thuvien" class="library"
                 style="background-image: url('<?php echo THEME_ASSET_WEB; ?>images/lib-bg.png');">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="heading">
                            THƯ VIỆN ẢNH
                        </h2>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <a data-fancybox="gallery" href="<?php echo THEME_ASSET_WEB; ?>images/lib1.png">
                            <img class="img-fluid" src="<?php echo THEME_ASSET_WEB; ?>images/lib1.png">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a data-fancybox="gallery" href="<?php echo THEME_ASSET_WEB; ?>images/lib2.png">
                            <img class="img-fluid" src="<?php echo THEME_ASSET_WEB; ?>images/lib2.png">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a data-fancybox="gallery" href="<?php echo THEME_ASSET_WEB; ?>images/lib3.png">
                            <img class="img-fluid" src="<?php echo THEME_ASSET_WEB; ?>images/lib3.png">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a data-fancybox="gallery" href="<?php echo THEME_ASSET_WEB; ?>images/lib4.png">
                            <img class="img-fluid" src="<?php echo THEME_ASSET_WEB; ?>images/lib4.png">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a data-fancybox="gallery" href="<?php echo THEME_ASSET_WEB; ?>images/lib5.png">
                            <img class="img-fluid" src="<?php echo THEME_ASSET_WEB; ?>images/lib5.png">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a data-fancybox="gallery" href="<?php echo THEME_ASSET_WEB; ?>images/lib6.png">
                            <img class="img-fluid" src="<?php echo THEME_ASSET_WEB; ?>images/lib6.png">
                        </a>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-12">
                        <nav>
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <p class="page-link">1</p>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- !section library -->

    </main>
    <!-- main -->

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row text-white">

                <div class="col-md-4">
                    <a href="#"><img class="img-fluid" src="<?php echo THEME_ASSET_WEB; ?>images/logo-footer.png"
                                     alt=""></a>
                </div>

                <div class="col-md-5">
                    <div class="footer__info">
                        <p>
                            <i class="fas fa-map-marker-alt"></i>
                            <?php echo get_field('address'); ?>
                        </p>
                        <p>
                            <i class="fas fa-phone-alt"></i>
                            <?php echo get_field('phone'); ?>
                        </p>
                        <p>
                            <i class="fas fa-envelope"></i>
                            <?php echo get_field('email'); ?>
                        </p>
                    </div>
                </div>

                <div class="col-md-3 text-md-center">
                    <p>
                        Theo dõi thêm về Hera Queen tại:
                    </p>
                    <a href="<?php echo get_field('facebook_link'); ?>" target="_blank">
                        <i class="fab fa-facebook-f text-white social-link"></i>
                    </a>
                    <a href="<?php echo get_field('youtube_link'); ?>" target="_blank">
                        <i class="fab fa-youtube text-white social-link"></i>
                    </a>
                </div>

            </div>
        </div>
    </footer>
    <!-- footer -->
</div>

<?php
get_footer();
?>
