<?php
/*
  Template Name: FAQ
 */
?>

<?php get_header(); ?>

<div id="content">

    <h1 class="page-title"><?php the_title(); ?></h1>
    
    <div class="container">
        <?php
        $args = array(
            'post_type' => 'FAQ_post',
            'posts_per_page' => -1
        );
        $posts = new WP_Query($args);
        ?>
        <?php
        while ($posts->have_posts()) {
            $posts->the_post();
            ?>
        
            <div class="zl-collapse">
                <div class="zl-collapse-title"><?php the_title(); ?></div>
                <div class="zl-collapse-content"><?php the_content(); ?></div>
            </div>

        <?php } ?>

    </div>


</div>

<?php get_footer(); ?>