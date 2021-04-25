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
define( 'DB_NAME', 'wordpress_hosco' );

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
define( 'AUTH_KEY',         'glscL>)S0VUas2i6#&kzQz1_D_%LCzluAGfY8V$VVoFy_zTc2<4amtW5Zhg7u>Ce' );
define( 'SECURE_AUTH_KEY',  'S|Wc!o`Eh3S.F?UQv5CX#q<%] T|.>;I2^(z69c,_90 )J)%7gJ-:EBt5zl=Y!%k' );
define( 'LOGGED_IN_KEY',    'Au}+u ;W9([NWTGGes*B?EzZCyPLoP>_t=52`8Y,Lh(M_mAtLmsmj7MS!&Gq%E7V' );
define( 'NONCE_KEY',        '`$U=d;!&A|Un%`q~PO|$fkA2?Jtp!-UsP-wn[?eW?5fM[+-L**?8=+UuyHukgUFt' );
define( 'AUTH_SALT',        '^UDm,rwoY?%]Bx*b+5JLzb%x0qIx;? 2MtI|qWMekI:k|,&l(3eRjnE+r1kD!Ey~' );
define( 'SECURE_AUTH_SALT', '9&)s`bJsL;~^nNlbc^eENXW_3,{sxHwoCv;B!]<ZCqewCn2k,19fx|SCK5l 7{N4' );
define( 'LOGGED_IN_SALT',   'S{QT/KhTH#YTt `-gFd)WB5+RBNN}e,R(~sJC#Vzwm[InGrxq0!-?Z?h6vqrsXj/' );
define( 'NONCE_SALT',       'N.P>Pj+iW<lYCh2W27O<?O#)(y5k8PX&yfHbh4isBs )`QsnOd|70L%S8YSn _5G' );

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
