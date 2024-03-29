<?php get_header();?>
    <section class="bg-light page-section" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="/temaPrba/wordpress/wp-content/themes/edTheme/img/team/1.jpg" alt="">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <!--Agrego la función que me permite mostrar el título the-tittle y la fecha the_date();!-->
                                <h3><?php the_title();?>
                                    <br><small></small></h3></a>
                                <?php the_post_thumbnail();?>
                                    <h5><p><?php the_excerpt();?></p></h5>
                                    <?php endwhile; endif;?>
                                        <ul class="list-inline social-buttons">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="/temaPrba/wordpress/wp-content/themes/edTheme/img/team/2.jpg" alt="">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <!--Agrego la función que me permite mostrar el título the-tittle y la fecha the_date();!-->
                                <h3><?php the_title();?>
                                    <br><small></small></h3></a>
                                <?php the_post_thumbnail();?>
                                    <h5><p><?php the_excerpt();?></p></h5>
                                    <?php endwhile; endif;?>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="/temaPrba/wordpress/wp-content/themes/edTheme/img/team/3.jpg" alt="">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <!--Agrego la función que me permite mostrar el título the-tittle y la fecha the_date();!-->
                                <h3><?php the_title();?>
                                    <br><small></small></h3></a>
                                <?php the_post_thumbnail();?>
                                    <h5><p><?php the_excerpt();?></p></h5>
                                    <?php endwhile; endif;?>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>