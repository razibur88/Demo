<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <?php wp_head()?>
</head>

<body>

    <header>
        <div class="container header">
            <div class="row">
                <div class="col-lg-6">
                    <h3><?= get_theme_mod('header_text_setting'); ?> </h3>
                </div>
                <div class="col-lg-6">
                    <h4>২৯ মাঘ, ১৪২৭ <span>English</span></h4>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-4">
                    <a href="#"><?= the_custom_logo(); ?></a>
                </div>
                <div class="col-lg-4 pt-3">
                    <div class="form_main">
                        <form class="form-inline" method="get">
                            <input class="form-control mr-sm-2 find" type="search" placeholder="Search" aria-label="Search" value="<?= the_search_query();?>" name="s">
                            <button class="btn btn-outline-success my-2 my-sm-0 pos_top" type="submit">Search</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--    navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light menu">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_class'        => "navbar-nav me-auto mb-2 mb-lg-0",
                ) );
            
            ?>
            </div>
        </div>
    </nav>
    <!--    navbar end -->

    <!--    banner part start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row banner">
                    <?php 
                        $args = array( 'post_type' => 'Banner', 'posts_per_page' => 10 );
                        $the_query = new WP_Query( $args ); 
                        ?>
                        <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <?php the_post_thumbnail(); ?>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                        <?php else:  ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>
                        
                    </div>
                    <div class="row marquee">
                        <div class="col-lg-12">
                            <marquee behavior="" direction=""><?= get_theme_mod('marquee_setting'); ?></marquee>
                        </div>
                    </div>
                    <div class="row marquee">
                        <div class="col-lg-12">
                            <marquee behavior="" direction=""><?= get_theme_mod('2nd_marquee_setting'); ?></marquee>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-lg-12 px-0">
                            <img src=" <?= get_theme_mod('custom_eseba_settings'); ?>" class="w-100" alt="eseba">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">জনপ্রিয় সেবা</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">নতুন সেবা</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">মোবাইল সেবা</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="extra-tab" data-bs-toggle="tab" href="#extra" role="tab" aria-controls="extra" aria-selected="false">দপ্তর ভিত্তিক সেবা</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="seba-tab" data-bs-toggle="tab" href="#seba" role="tab" aria-controls="seba" aria-selected="false">সকল ই-সেবা </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab1.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab2.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab1.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab4.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab5.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab1.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab2.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab4.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab2.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab5.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab1.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab2.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab1.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab2.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab1.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab4.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab5.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab1.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab2.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab4.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab2.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab5.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab1.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab2.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab1.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab2.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab1.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab4.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab5.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab1.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab2.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab4.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab2.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab5.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab1.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab2.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="extra" role="tabpanel" aria-labelledby="extra-tab">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab1.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab2.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab1.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab4.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab5.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab1.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab2.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab4.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab2.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab5.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab1.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#"><img src="assets/images/tab2.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="seba" role="tabpanel" aria-labelledby="seba-tab">
                                    <div class="row">
                                        <div class="col-lg-2 col-sm-6">
                                            <a href="#"><img src="assets/images/tab1.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2 col-sm-6">
                                            <a href="#"><img src="assets/images/tab2.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2 col-sm-6">
                                            <a href="#"><img src="assets/images/tab1.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2 col-sm-6">
                                            <a href="#"><img src="assets/images/tab4.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2 col-sm-6">
                                            <a href="#"><img src="assets/images/tab5.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2 col-sm-6">
                                            <a href="#"><img src="assets/images/tab1.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2 col-sm-6">
                                            <a href="#"><img src="assets/images/tab2.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2 col-sm-6">
                                            <a href="#"><img src="assets/images/tab4.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2 col-sm-6">
                                            <a href="#"><img src="assets/images/tab2.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2 col-sm-6">
                                            <a href="#"><img src="assets/images/tab5.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2 col-sm-6">
                                            <a href="#"><img src="assets/images/tab1.png" alt=""></a>
                                        </div>
                                        <div class="col-lg-2 col-sm-6">
                                            <a href="#"><img src="assets/images/tab2.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 pt-4">
                            <h2>উদ্যোগ</h2>
                            <ul>
                        <?php
                            $args = array(
                                'post_type'=> 'post',
                                'orderby'    => 'ID',
                                'post_status' => 'publish',
                                'order'    => 'DESC',
                                'posts_per_page' => -1 // this will retrive all the post that is published 
                                );
                                $result = new WP_Query( $args );
                                if ( $result-> have_posts() ) : ?>
                                <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                                <li><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></li>
                                <?php endwhile; ?>
                                <?php endif; wp_reset_postdata(); ?>
                        </ul>
                        </div>
                    </div>
                    <div class="row">
                    <?php dynamic_sidebar('gallery-1') ?>
                        <!-- <div class="col-lg-4">
                            <img src="assets/images/gal1.png" class="w-100" alt="">
                        </div>
                        <div class="col-lg-4">
                            <img src="assets/images/gal2.png" class="w-100" alt="">
                        </div>
                        <div class="col-lg-4">
                            <img src="assets/images/gal3.png" class="w-100" alt="">
                        </div>
                        <div class="col-lg-4">
                            <img src="assets/images/gal1.png" class="w-100" alt="">
                        </div>
                        <div class="col-lg-4">
                            <img src="assets/images/gal2.png" class="w-100" alt="">
                        </div>
                        <div class="col-lg-4">
                            <img src="assets/images/gal3.png" class="w-100" alt="">
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <?php dynamic_sidebar('sidebar-1') ?>
                </div>
            </div>
        </div>
    </section>

    <!--    banner part end -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pt-4">
                    <img src="<?= get_theme_mod('footer_settings'); ?>" alt="" class="w-100">
                </div>
            </div>
            <div class="row footer_menu py-4">
                <div class="col-lg-7">
                    <ul>
                        <li>
                            <a href="#"> গোপনীয়তার নীতিমালা</a>
                        </li>
                        <li>
                            <a href="#"> ব্যবহারের শর্তাবলি</a>
                        </li>
                        <li>
                            <a href="#">সার্বিক সহযোগিতায়</a>
                        </li>
                        <li>
                            <a href="#"> সাইট ম্যাপ</a>
                        </li>
                        <li>
                            <a href="#"> সচরাচর জিজ্ঞাসা</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <p>পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <span>
                        <?php dynamic_sidebar('footer-text'); ?>
                    </span>
                </div>
                <div class="col-lg-4">
                
                    <?php dynamic_sidebar('footer-1')?>
                
                   
                </div>
                <div class="col-lg-4">
                    <img src="assets/images/foot_screen.png" class="w-100" alt="">
                </div>
            </div>
        </div>
    </section>




<?php wp_footer() ?>

    <!-- <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/custom.js"></script> -->

</body>

</html>
