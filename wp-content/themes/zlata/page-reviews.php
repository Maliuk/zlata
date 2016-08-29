<?php
/*
  Template Name: Reviews
 */
?>

<?php get_header(); ?>

<div id="content">

    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>

        <div class="row">
            <div class="col-md-12">

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

                        <h3>Сергей Васильевич</h3>

                        <p>
                            Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезызвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия. Значимость этих проблем настолько очевидна, что консультация с широким активом обеспечивает широкому кругу (специалистов) участие в формировании форм развития.
                        </p>

                        <div class="article-footer">
                            <div class="">
                                <i class="fa fa-calendar" aria-hidden="true"></i> <time><?php the_time('d F Y г.'); ?></time>
                            </div>
                        </div>
                    </article>

                    <div class="article-separator">
                        <span class="rhombus"></span>
                    </div>

                <?php } ?>
                <?php wp_reset_query(); ?>

            </div>

        </div>
    </div>


</div>

<?php get_footer(); ?>