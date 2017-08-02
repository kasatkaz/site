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
define('DB_NAME', 'sdru');

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
define('AUTH_KEY',         'p,Vv_@{(???Af~mQ(uW^R.xd^8OG-+w&^N*-)-XaH~9T$z.yQGXsZA]?VW%0ug0q');
define('SECURE_AUTH_KEY',  'Pnum^_ `jV,z%;[zK1AFEi4%5tASI4aGbwsHje~f>7:uZ;r$Zf]U7(KtwZH9?hKN');
define('LOGGED_IN_KEY',    'fa}Ws8(8>G[]wZ$VjV[paR_0-PVBfm_GtkJceQj|M[HH;d0mG`0z2aNG*-#pq)7U');
define('NONCE_KEY',        't9O[PK*~wy|1(x!cB8SG3nL? D&N1hpqVACVYu{f$m.jD{:j%ho!f.ixWu#]s_eH');
define('AUTH_SALT',        'd`7EID3!-Ok(b|1wTE!ad58SmvBVL|3?V[2<?Y.$nZuEpP5,NI^^7/8v ]#Odc{l');
define('SECURE_AUTH_SALT', '5gj6H6H{Sw$)v6!a,t#L/bKI-7NZ],N&gEY3+Dwjs-[&;^50u@UBCw$_q9D)w$L(');
define('LOGGED_IN_SALT',   'Pr[CT8Hmjwo$ZuF[TkH=/g;kk|KK[VlV=Sx%V`r=8qH Y|(g@?V_3x.[W3(56J9&');
define('NONCE_SALT',       'gDl@^`i3Z#]umjahc&N$P)N}TP27+A!t(4|-G~n86V@$+(c)7% ^,saK /^qgf]5');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'sd_';

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
