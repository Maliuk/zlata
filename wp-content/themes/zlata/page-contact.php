<?php
/*
  Template Name: Contact
 */
?>

<?php get_header(); ?>

<div id="content">

    <div class="container">
        <h1 class="page-title">Контакты</h1>

        <div class="row">

            <div class="col-md-4">
                <h3>Мы находимся по адресу:</h3>
                <p>
                    <i class="fa fa-location-arrow text-green" aria-hidden="true"></i> Украина, г.Николаев, ул. Бузника, 14<br />
                    <span class="text-green">Маршрут:</span> по пр.Ленина остановка Стадион
                </p>
                
                <h3>Email:</h3>
                <p><i class="fa fa-envelope text-green" aria-hidden="true"></i> <a href="mailto:lazerdot@list.ru">lazerdot@list.ru</a></p>
                
                <h3>Телефоны:</h3>
                <p><i class="fa fa-phone text-green" aria-hidden="true"></i> (0512) 71-35-45</p>
                <p><i class="fa fa-phone text-green" aria-hidden="true"></i> (0512) 71-35-75</p>
                
                <h3>Мы в социальных сетях:</h3>
                
                <ul class="social">
                    <li>
                        <a href="#" target="_blank">
                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="fa fa-vk" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-8">
                <div class="contact-image">
                    <div class="img-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/img/contact.jpg" alt=""/>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<div id="map"></div>

<?php get_footer(); ?>