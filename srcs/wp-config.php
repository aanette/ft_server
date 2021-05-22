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
define('DB_NAME', 'wordpress');
/** Имя пользователя MySQL */
define('DB_USER', 'aanette');
/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'aanette');
/** Имя сервера MySQL */
define('DB_HOST', 'localhost');
/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');
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
define('AUTH_KEY',         '85mGS*S>}K~ls_Na.rKDNuQw}%iW?yl,T&&2_.HlmL-Sz/iyL,Q(^iUA@`j{2&Cz');
define('SECURE_AUTH_KEY',  'odN-#3:-@v--$`AkRqUrLrVN*)T2h*g,22|O16tmOQ,HA`0E4o#6--qLkmX-b`X(');
define('LOGGED_IN_KEY',    '0/|_!&MC-L( (avENm,7Z8mkeuKLg.xaMzlTZzA6EUm4bBS3J^+=6b-+l@lt/1^Z');
define('NONCE_KEY',        '+ufo@mA0K?UcFic2S?K^?)9H:Aq-Bha}c~NJmQ=S 7||5q:4;!;Z@@6pi@-;H:w,');
define('AUTH_SALT',        'X#Yd[V+m+u*?3_-{[1wu]tI?)]v8cG|kDX!d|2OlGH^7+]+zR>]nG@PWTzpe|T&O');
define('SECURE_AUTH_SALT', '[-!)r/oQ.Z~*f-luu^zDF;[yS0Pqo#hc0+|78 ,4?{`cR2<I4nJKPv?MMtC*e}u0');
define('LOGGED_IN_SALT',   'DWN~!stkrsdV!E(,ZE!PmO2Qd8ONoX_:<_GleR=qYw+I|NGv-TRm|A&_;A$XJ2v:');
define('NONCE_SALT',       'gn@u)S2{*~l|u}8kAp^S]E6nN2YNzSiF}#-!1qP{5:P_Y !0 Nxp1f-5HyNewt~E');
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