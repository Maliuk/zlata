<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title><?php
            global $page, $paged;
            wp_title('|', true, 'right');
            bloginfo('name');
            $site_description = get_bloginfo('description', 'display');
            if ($site_description && ( is_home() || is_front_page() ))
                echo " | $site_description";
            if ($paged >= 2 || $page >= 2)
                echo ' | ' . sprintf(__('Page %s'), max($paged, $page));
            ?>
        </title>


        <meta name="description" content="<?php
        if (is_single()) {
            single_post_title('', true);
        } else {
            bloginfo('name');
            echo " - ";
            bloginfo('description');
        }
        ?>" />
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- The little things -->
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <!-- The little things -->

        <!-- GOOGLE FONTS -->

        <!-- ./GOOGLE FONTS -->

        <!-- MODERNIZR -->
        <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- ./MODERNIZR -->

        <?php
        wp_deregister_script('jquery');
        wp_head();
        ?>

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function () {
                    try {
                        w.yaCounter37680035 = new Ya.Metrika({
                            id: 37680035,
                            clickmap: true,
                            trackLinks: true,
                            accurateTrackBounce: true,
                            webvisor: true
                        });
                    } catch (e) {
                    }
                });

                var n = d.getElementsByTagName("script")[0],
                        s = d.createElement("script"),
                        f = function () {
                            n.parentNode.insertBefore(s, n);
                        };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/watch.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else {
                    f();
                }
            })(document, window, "yandex_metrika_callbacks");
        </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/37680035" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

</head>

<body <?php body_class(); ?>>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- HEADER -->
    <header>

        <div class="container">
            <h4>лазерно-эстетической медицины, косметологии и пластической хирургии</h4>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-sm-3">
                    <a id="logo" href="<?php echo get_home_url(); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/img/logo-gold.png" alt=""/>
                    </a>
                </div>
                <div class="col-sm-9">
                    <div class="address">
                        Адрес:  <span>Украина, г.Николаев, ул.Бузника 14</span>
                    </div>
                    <div class="phones">
                        +38 <span>(073)</span> 242 - 42 - 42,<br class="hidden-lg hidden-md" />
                        +38 <span>(068)</span> 242 - 42 - 42,<br class="hidden-lg hidden-md" />
                        +38 <span>(095)</span> 242 - 42 - 42
                    </div>
                </div>
            </div>
        </div>

        <nav>
            <div class="container">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-nav',
                    'container' => false,
                    'echo' => true,
                    'items_wrap' => '<menu id="%1$s" class="%2$s">%3$s</menu>',
                    'depth' => 2,
                ));
                ?>

                <!-- BURGER -->
                <button class="c-hamburger c-hamburger--htx">
                    <span>toggle menu</span>
                </button>
                <!-- BURGER -->
            </div>
        </nav>

    </header>
    <!-- ./HEADER -->

    <!-- PRELOADER -->
    <div id="preloader">
        <div class="preloader-container">
            <div class="outer">

            </div>
            <div class="inner"></div>
        </div>
    </div>
    <!-- ./PRELOADER -->

    <?php if (is_home()) { ?>
        <div id="after-header">
            <div class="container">

                <div class="after-header-text col-xs-5 col-xs-offset-6">
                    <h4>Мы предлагаем:</h4>
                    <h3>более 150 видов процедур<br />
                        для красоты и здоровья</h3>

                    <a href="#" class="btn">Выбрать процедуру</a>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="container text-center">
            <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(' // '); ?>
        </div>
    <?php } ?>
