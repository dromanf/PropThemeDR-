<?php get_header();?>
    <section class="bg-light page-section" id="Testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">
                    <?php echo get_cat_name(3);?>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="/temaPrba/wordpress/wp-content/themes/edTheme/img/team/1.jpg" alt="">
                        <h6><?php $examplePost = get_post( 8 ); echo apply_filters( 'the_content', $examplePost->post_content );?></h6>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="/temaPrba/wordpress/wp-content/themes/edTheme/img/team/2.jpg" alt="">
                        <h6><?php $examplePost = get_post( 27 ); echo apply_filters( 'the_content', $examplePost->post_content );?></h6>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="/temaPrba/wordpress/wp-content/themes/edTheme/img/team/3.jpg" alt="">
                        <h6><?php $examplePost = get_post( 27 ); echo apply_filters( 'the_content', $examplePost->post_content );?></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light page-section" id="divRwDb">
    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <h1><?php echo get_cat_name(4);?></h1>
                        <h6><?php $examplePost = get_post( 31 ); echo apply_filters( 'the_content', $examplePost->post_content );?></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-member">
                        <h1 class="tleleft"><?php echo get_cat_name(2);?></h1>
                        <img class="mx-auto rounded-circle test" src="/temaPrba/wordpress/wp-content/themes/edTheme/img/team/1.jpg" alt="">
                        <!-- Traemos el post referenciado (Nro 22) de manera que, no traiga el Query todos los post existentes -->
                        <?php $examplePost = get_post( 22 ); echo apply_filters('the_content', $examplePost->post_content );?>
                            <!-- Fin de Query $examplePost -->
                            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#">Saber Más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>