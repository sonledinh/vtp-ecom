<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'ecom' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6WsT]q 76e$nN_Q 2M/np[Fc%H?9n#z+@>Nm ,BdI+ZC7vbeI%j+McnFx#Hj5UQH' );
define( 'SECURE_AUTH_KEY',  'd[,jL|]A/]{c-`])qsEO3g];9`4e365}l86+]Q8V,@A;*UU76](~w*[!b^ZYM5{!' );
define( 'LOGGED_IN_KEY',    'bK|3*|<VfiG+G AJ)$FIbO=KhM&e{$Bm~<870#y!xpxA $;Xw K0B1D/e~+=;IKw' );
define( 'NONCE_KEY',        'nMC7K>D.kb*6oA+8ur2  S4!e6tC>=VP)_oV7CF;#73<h~hsVAcG#K:__;g@YK*1' );
define( 'AUTH_SALT',        '!*ZO@]vr]q]S^Q *mMO}Mxbg*x9mU|wjvsqffNSd7sd{=lQ1dSBB]w,u-avR82y4' );
define( 'SECURE_AUTH_SALT', '!9peXLB$RfdN(d#PX21~xlbxQrr*h.nSvmHX2_,47~$:KFuYN4R,:-bxK%6c*-Gb' );
define( 'LOGGED_IN_SALT',   'T#AQW4Ymu.n7 5dbd/)C9JC^DM |gcmLtqDr#*>`P{Kn3X*LitvWulkQ/I&N@g8I' );
define( 'NONCE_SALT',       '5jL{epff4,<vgB)yeW)lJq-`*3O:M|b1TvSc)fZf|h)u0pCd-ouMUhHyB@=Kk9gs' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
