<?php
/**
 * CloudPress WordPress 설정 (자동 생성)
 * DB: GitHub 레포 내 _db/wordpress.db (SQLite)
 */

// ── SQLite 연동 (sqlite-database-integration 플러그인) ──
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );
define( 'table_prefix', 'wp_' );

// SQLite 플러그인 설정 (DB_DIR/DB_FILE이 실제 사용되는 상수)
define( 'DB_DIR',  __DIR__ . '/../_db/' );
define( 'DB_FILE', 'wordpress.db' );

// ── 인증 키/솔트 ──
define( 'AUTH_KEY',         'pn0j67r6ygezjvzyek58ly2dcc8cr5j8arv34587qnx5ntwtzmzvwd1n0ocrpyly' );
define( 'SECURE_AUTH_KEY',  'va7fgodcnro6uslq3ssbx3ifyg93ll2oicadzs2bf6omwdfgv8rijhcaf7vroxg8' );
define( 'LOGGED_IN_KEY',    '6tj6ztg6iy8uhi9jg5awj4ggdxz8h4d3jbi8uv4abvozrwlruip88j04ybh1w58n' );
define( 'NONCE_KEY',        'ewatog80v8xcnrv7gvr5w7tbp6ubq3mpdshufxv0tgifow2ld743n67zj481rsnz' );
define( 'AUTH_SALT',        'la3a57du06exoogqwp4sm2hl71jb3euyx8shh6bdad3otw4d5ilhey3y18xbftxu' );
define( 'SECURE_AUTH_SALT', 'nvwu3xcn042jjvy1r6ctv7s633t7kzfn1li9ub2v3jfhab6q3ft6rxsyl46q25km' );
define( 'LOGGED_IN_SALT',   'vz4mbfcfi4hwi1dpnbfred6qr4t7dfjbch38erd00fxyyzeo03b2onvchg349tfw' );
define( 'NONCE_SALT',       '6eza5jgsm6n0u6r3u62m1bisc1mzo8uxarsh8zsygiaikedt6d6w1e6g5fk8asxq' );

// ── URL 설정 ──
define( 'WP_HOME',    'https://cp-4e4ae208-wp.choichoi3227.workers.dev' );
define( 'WP_SITEURL', 'https://cp-4e4ae208-wp.choichoi3227.workers.dev' );

// ── 기타 ──
define( 'WP_DEBUG',        false );
define( 'WP_CACHE',        true  );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT',  false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
