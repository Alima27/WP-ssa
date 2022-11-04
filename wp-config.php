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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'ssa' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );


/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         '<VCiD:^pUMo><#=BkBA}x[ZSkrxbnw G4J(WD@+H<^.t@58~j:1[SGFA*gQ2/O}Q' );
define( 'SECURE_AUTH_KEY',  ':2`ND-GHIP@t~h-tj^_g{BKZFw.:hou&W0EM7!*tnMjw<!VibTMbx(F,Y7}7r)jx' );
define( 'LOGGED_IN_KEY',    'T% >bWX+CwrN0uQOKY<?.#` +LP =%YY]ue5+T2t5OPBm~U8f[g7rGgULJ&sWUV_' );
define( 'NONCE_KEY',        'o[U6Q9f&0{x6l&6<riW-hh4y(L=eusX+H(vn3M(rYAD*Re.ZVl`f,<#Vu|(Q)$V:' );
define( 'AUTH_SALT',        'U+t?gglJ^wmeJ6be;6efcHAsuhsm6`*Y)lzzjn-v#|yx`P~xI(x1kTB`LW0a1w [' );
define( 'SECURE_AUTH_SALT', '!W#)=E3@r>w!o]g|3z_-bR4XXv6%>O;rB_bf2.W*bgtY_$(H_VL.= wf4M^4Cx<>' );
define( 'LOGGED_IN_SALT',   ';:ra07rO#(T%IIfLg203xib;nBb-}P)W_^,RA!KGdTsLiD}R-5;tYH(Kq*s#2~$k' );
define( 'NONCE_SALT',       '#hwtQh7TO&H^wgxU9kC%%X}K*aZA@zx3ku8aqBvG.ub&c$Z(2n<SIsgEpOMXGNYB' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
