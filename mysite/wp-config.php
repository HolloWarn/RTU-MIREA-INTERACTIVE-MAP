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
define( 'DB_NAME', 'mybaza' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mybaza' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'mybaza' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zv`U_oL1G+`n?:iKj&6JXR63xl&~/D#eufLi^^[@X3W<7C[9pFIbt*;5BS/f1DpB' );
define( 'SECURE_AUTH_KEY',  ',nAiD#_cmdB=24N}X@JgRR&-d>+Ochx[C]W=8>s^/Is:07(|c.>v7u@<S>CHrHSY' );
define( 'LOGGED_IN_KEY',    '9$=z3:kxA_<{[t$c=%mS@GkD6FfXHKl%kH`,{cY)^,e7@Q*yo-&S<t&Epm-6v.C3' );
define( 'NONCE_KEY',        'o|rO~lxO 5uz#V#F)}Nyr$E8@;sIe-0x5.D2DJH.y]`AA-FaRql9/?>YuuWx~~1F' );
define( 'AUTH_SALT',        'u#X(8!,jE)f?$:n{^R<@KC7~&Yk1?ya509J6)PQL-h4iL2?j8LE+(=d/4c%P,N(E' );
define( 'SECURE_AUTH_SALT', 'VFQUAI/cAO%j !d>9zaN)VDNt*OJ c s&s2>gD~P{(324]hF:e&xLx.K{2I{LJP&' );
define( 'LOGGED_IN_SALT',   'Cv!J(+(tC}Q&vq@}!;Fx].)5f./$s:-X8J<bx;:rk*!x%%c[tLM<F~1k]bCouyy1' );
define( 'NONCE_SALT',       '0*e9,ZaemFE%VKmnx)Y65qsss8KCz`7ghI<Wi9okxzuv5*NjaM[WTZm4gC.!22n#' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
