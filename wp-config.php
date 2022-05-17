<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_soviet-cup_2670' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%V`0AAbQN>k;1H*sQQWb*RiXjHUJ!7KVP[3Mk}=V46Loz<$HH}Ynu#rYq=y5*lbu' );
define( 'SECURE_AUTH_KEY',  'Ez%{4l#,M ^J.10{zybs@@}$N{dRi%qrr7w5mq4K6c7;] 1clqWc%jo_e<3I%d$[' );
define( 'LOGGED_IN_KEY',    '>QM`EH^VUb[(eU;*BsI=/tojO9bo$n`L2X!i#T_(giGBGuN yrTw9eHtHgsC8)r4' );
define( 'NONCE_KEY',        '65e:p/U9Q!Rh?+_-dN1lj)weK>,>P>#r7sVumyk{~3x3AU27r}ZMT=6~QmodW$EY' );
define( 'AUTH_SALT',        'Oke?7=PycF$Dan#C3[2CABc*_ySl4VU=&p<u{t#&+:i/W](+C0UV0I`5*#{+J.0d' );
define( 'SECURE_AUTH_SALT', 'WbE*=08|%}Iof2-8O>E@25E6`u]5O&t)F&RCW-##mv0oH|3]{ZK;=cOJ=>+Jw/O+' );
define( 'LOGGED_IN_SALT',   ':dZ!*Y3#,~]?tRfbng~/XFP]ZFQzSzR{eRTO%:%To!tr1MeSh0SDn!^#1dY@_G#S' );
define( 'NONCE_SALT',       'KS*33-b5af>k_scR!FcU^l[H>q3U4LY~@ONs]i(!r*1*0Ui<u2u+-fIz_)/s)[E,' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_2670';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
