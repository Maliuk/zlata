<?php get_header(); ?>

<div id="content">

    <div class="container">
        <?php while (have_posts()) { the_post(); ?>
            <h1 class="page-title"><?php the_title(); ?></h1>

            <article>
                <?php if (has_post_thumbnail()) { ?>
                    <div class="blog-image">
                        <div class="img-wrap">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    </div>
                <?php } ?>

                <?php the_content(); ?>
            </article>

            <!--<div class="article-footer">
                <a class="read-more" href="#">Вернуться назад</a>
            </div>-->
        <?php } ?>

    </div>


</div>

<?php get_footer(); ?>