<?php get_header(); ?>

<div id="content">

    <div class="container">
        <h1 class="page-title">Поиск</h1>

        <div class="row">
            <div class="col-md-8">

                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
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

                            <?php
                            $content = strip_tags(get_the_content());
                            echo substr($content, 0, 300);
                            ?>
                            <div class="article-footer">
                                <div class="right">
                                    <a class="read-more" href="<?php the_permalink(); ?>">Подробнее</a>
                                </div>
                            </div>
                        </article>

                    <?php } ?>
                <?php } else { ?>
                    <h2 class="text-center">Ничего не найдено</h2>
                <?php } ?>
                <?php wp_reset_query(); ?>

            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>


</div>

<?php get_footer(); ?>