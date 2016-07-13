<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'loc_zlata');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fD8U=1h?}BPJm+R<b&M#U(%Xq/sldYfLqBnUGA2<cQm.~Sp8A!78Rl|c:3Z<M`z8');
define('SECURE_AUTH_KEY',  'zybvC9G5yyJ%{muM5/IZA%AVF4z-na?.^JxAoE4P@f]]3v3tIyJIE-jaoD&}O%}X');
define('LOGGED_IN_KEY',    'CWY,R7:ht*S#:a7i=Go {p*9oB]i_>lQwQ]Vk%AwVZprcF.LJb$W,$gDPsQytPpX');
define('NONCE_KEY',        '8/%h=]f9]h,_az8qaNRglT-T(/n_Oni5=$)%da,fJl01_-IpR5.w*MqWQxr~8Ui,');
define('AUTH_SALT',        'y|+3U?eM31#HPMuW!<,W_vOqB701XKc!T<ok#5~/AF6&BiXr>/9@1NgQLOS@<&YE');
define('SECURE_AUTH_SALT', '5r<1UTc9EaVFm?cfqsDe MmZnATvAPk1dEiHg=ZsP^U+xweu@<tg; :G[(TH^~3!');
define('LOGGED_IN_SALT',   '=W_*E:A4odp;sGqR@: v/RK_jbR}pShbBd|suO(.q`&s3c<j;cHj}kvejIjmN*vb');
define('NONCE_SALT',       'S7np]GX.SFWZU<(T 3?NZ3|P|1=-Kk1bWg3(!xu`CmA?% zOYcmgvD_?CcCOt3-I');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
