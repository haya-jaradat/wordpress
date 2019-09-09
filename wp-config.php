<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'wordpress' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'root' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', 'Haya3010!!' );

/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );

/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'O>Vw:(8E0QP|#n|RZ;i@_p_2}j0yehd`+C* w;8ZdOT;2o0x(G#A5pFn6BW+g@9I' );
define( 'SECURE_AUTH_KEY',  ';^[w@T<Y?CjKf8aYh;(==Q_~<R4rYqkk0Ynn{7gc}.Hcp79%G6^h&h5HbI) ~-Kx' );
define( 'LOGGED_IN_KEY',    'Xi{9-7rja^j1FJidoVF>ur/]iK^QZ|rh#7+E2[zCopZp0uGSq<flaxW1PId KS,2' );
define( 'NONCE_KEY',        '#fKPhXd9Ex31$T~#aCGo2N~>3^xgy:r:(FWRo36zsic^FXBxur8gkB=*2 qxj_:}' );
define( 'AUTH_SALT',        'h[^^XD=$Y$09?P5,n^@etCUQja:eJ5ns5x_M`l4z]]/K0k`ur_} ]Nn$0n9AN-ow' );
define( 'SECURE_AUTH_SALT', 'QSBxWY>oz#(oCT^;jj,|?L{29T~]IX;S,A-wq(Ns$a%p=7 BH][?et!r!jh@<,8Z' );
define( 'LOGGED_IN_SALT',   'Ra)f}B1ulY&rlc4ln)nw;D~)36%4k[Y24dYn;yE4*4Vgt-]1Pi^)>p-7HBGQZP)#' );
define( 'NONCE_SALT',       '_g*Q[4gR&L#kPZ$9dl#^&Uhs`-o>uG]HTdKt.X(M=Y.U@])9(1R{^Dw*Ck!Jcgu&' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once( ABSPATH . 'wp-settings.php' );

define('FS_METHOD', 'direct');
