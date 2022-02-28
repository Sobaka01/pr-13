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

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'pr-13' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'pr13' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'fB&lm:tE@]=)^xqi:BqGJE](um^=PQ2qVcs(I6k3.*xJ(|iwWq~t|:>MrVG?:V4/' );
define( 'SECURE_AUTH_KEY',  'k580b?+rgx,-b]:f dT]z0{h{p+<Np!r!NX<YROOgT75<Wvq?4D&}1{Kj|+/jcQd' );
define( 'LOGGED_IN_KEY',    'EY{$&rJO00-/={p}J<H&-+/[dbsg(EKUP>KDeH/*QkM^s^B;uqzRt+_R$l!c(;T0' );
define( 'NONCE_KEY',        '9@N|0d{ZCfoje!,vO)LhgW`bV09EM_6k7+!f;ud^ruLYA!7R|=J|0QcPjG;/qrB]' );
define( 'AUTH_SALT',        'J%LWc_Z4y^-z5pqE5;~kqg-$C.tUfiv=9U#d>.(.}TS5b|V,$*V?UNQTE~gi]X+8' );
define( 'SECURE_AUTH_SALT', '*S;LOrJ+`po$Bv7koTgvK|@FC79S#)Wt>Tk3]a{lOmaNFwl>lNl#8WdNw+ppe,Er' );
define( 'LOGGED_IN_SALT',   'MxY41{2HDnMSQy2YHE7jNtmca#xSz*:%^lpIL~jx@B5cHOnZO<T?0uy&La,ef|iS' );
define( 'NONCE_SALT',       'cchl.@boUlu{^~|ynBg{y$*?*MLqiHc((zbDss|IKW!y9m6+;;RgjcZLCFtlhd/d' );

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
