<aside class="col-md-4">
    <?php get_search_form(); ?>

    <div class="widget stock">
        <h3 class="widget-title">Акции</h3>

        <ul>
            <li>
                <a class="img-wrap" href="#">
                    <img src="<?php bloginfo('template_url'); ?>/img/temp/w1.jpg" alt=""/>
                </a>
                <h3>Пластика груди
                    (маммопластика)</h3>

                <a class="read-more" href="#">Подробнее</a>
            </li>
            <li>
                <a class="img-wrap" href="#">
                    <img src="<?php bloginfo('template_url'); ?>/img/temp/w2.jpg" alt=""/>
                </a>
                <h3>Пластика груди
                    (маммопластика)</h3>

                <a class="read-more" href="#">Подробнее</a>
            </li>
            <li>
                <a class="img-wrap" href="#">
                    <img src="<?php bloginfo('template_url'); ?>/img/temp/w3.jpg" alt=""/>
                </a>
                <h3>Пластика груди
                    (маммопластика)</h3>

                <a class="read-more" href="#">Подробнее</a>
            </li>
        </ul>
    </div>

    <div class="widget last-news">
        <h2 class="widget-title">Последние новости</h2>

        <ul>
            <?php
            $args = array(
                'post_type' => 'news',
                'posts_per_page' => 4
            );
            $posts = new WP_Query($args);
            ?>
            <?php
            while ($posts->have_posts()) {
                $posts->the_post();
                ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <div class="img-wrap">
                            <?php if (has_post_thumbnail()) { ?>
                                <?php the_post_thumbnail(); ?>
                            <?php } ?>
                        </div>

                        <h4><?php the_title(); ?></h4>

                        <time><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('d F Y г.'); ?></time>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</aside>