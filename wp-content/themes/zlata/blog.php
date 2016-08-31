<?php
/*
  Template Name: News
 */
?>

<?php get_header(); ?>

<div id="content">

    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>

        <div class="row">
            <div class="col-md-8">

                <?php
                $args = array(
                    'post_type' => 'news',
                    'posts_per_page' => -1
                );
                $posts = new WP_Query($args);
                ?>

                <?php
                while ($posts->have_posts()) {
                    $posts->the_post();
                    ?>

                    <article>
                        <?php if (has_post_thumbnail()) { ?>
                            <div class="blog-image">
                                <div class="img-wrap">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                        <?php } ?>

                        <h2><?php the_title(); ?></h2>

                        <?php the_excerpt(); ?>

                        <div class="article-footer">
                            <!--<i class="fa fa-comment-o" aria-hidden="true"></i> 3-->

                            <div class="right">
                                <time><?php the_time('d F Y г.'); ?></time> / <a class="read-more" href="<?php the_permalink(); ?>">Подробнее</a>
                            </div>
                        </div>
                    </article>

                <?php } ?>
                <?php wp_reset_query(); ?>

            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>


</div>

<?php get_footer(); ?>