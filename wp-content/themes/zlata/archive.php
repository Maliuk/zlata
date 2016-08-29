<?php get_header(); ?>

<div id="content">

    <div class="container">
        <?php
        global $wp_query;
        $args = array_merge($wp_query->query, array('post_type' => 'services', 'posts_per_page' => -1));
        query_posts($args);
        ?>
        <?php
        while (have_posts()) {
            the_post();
            ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <!--<div class="article-footer">
                <a class="read-more" href="#">Вернуться назад</a>
            </div>-->
        <?php } ?>

    </div>


</div>

<?php get_footer(); ?>