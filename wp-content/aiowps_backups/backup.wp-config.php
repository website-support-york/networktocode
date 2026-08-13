<?php

# Database Configuration
define( 'DB_NAME', 'wp_net2codestg' );
define( 'DB_USER', 'net2codestg' );
define( 'DB_PASSWORD', 'X5lwvRfAXSvSSygxCxfk' );
define( 'DB_HOST', '127.0.0.1:3306' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';
# Security Salts, Keys, Etc
define('AUTH_KEY',         '$X+G00|Vkyf[g|&KAr.vUm)0x]Sg7hPJ*!|);hk$O+wX*$;(-~R#cQXw*U,ND!,p');
define('SECURE_AUTH_KEY',  '8dB!;{t/H-]lsN.Nf6dg&cult|DTu14|_m4e$~fm2-S>Zeh-he.~EF`YQ@R:.C+j');
define('LOGGED_IN_KEY',    'y7?;q?NK6XId-i.XBjJJ$Gs}q),5|`P[}hN]bfZtmA y;vDl):(-XplOEP@)*F]A');
define('NONCE_KEY',        '|0IP(8Xuui$x!L|+@5mjA(+m[9/&:oQCV7.+!l!+x6$Y.4+sXsyjS.q(E_Bp8GG?');
define('AUTH_SALT',        'bb-{<2f3Evp@SZvMcu|8fx&oAIt-+-PVr6:Ljkj{ll1!?r6g?68p+0J:t*|CezJ~');
define('SECURE_AUTH_SALT', '(bLs+}k<Ou$-v(#>Kn*>dV8|8u3ODEDnkHRg%0c;VZIX@IYyJ)C|hG@)yX8TSX6d');
define('LOGGED_IN_SALT',   '3x,[+cGp+O?QN=GKi.0UDO{g4N%) spO5>PzLK+v<S*0}-0( 0I[Dl/-epPVlf');
define('NONCE_SALT',       'l6f+8/q=O5+|<}fA^L#|s>kLGX>ef/qOnXC~Q;Q}oHv-_&Y}W6LL=YjW1JqaFGqO');
# Localized Language Stuff
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'PWP_NAME', 'net2codestg' );
define( 'FS_METHOD', 'direct' );
define( 'FS_CHMOD_DIR', 0775 );
define( 'FS_CHMOD_FILE', 0664 );
define( 'WPE_APIKEY', 'f7d4bb99485ab7270524891dc878f9761857466c' );
define( 'WPE_CLUSTER_ID', '218760' );
define( 'WPE_CLUSTER_TYPE', 'pod' );
define( 'WPE_ISP', true );
define( 'WPE_BPOD', false );
define( 'WPE_RO_FILESYSTEM', false );
define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );
define( 'WPE_SFTP_PORT', 2222 );
define( 'WPE_SFTP_ENDPOINT', '34.170.115.148' );
define( 'WPE_LBMASTER_IP', '' );
define( 'WPE_CDN_DISABLE_ALLOWED', true );
define( 'DISALLOW_FILE_MODS', FALSE );
define( 'DISALLOW_FILE_EDIT', FALSE );
define( 'DISABLE_WP_CRON', false );
define( 'WPE_FORCE_SSL_LOGIN', false );
define( 'FORCE_SSL_LOGIN', false );
/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/
define( 'WPE_EXTERNAL_URL', false );
define( 'WP_POST_REVISIONS', FALSE );
define( 'WPE_WHITELABEL', 'wpengine' );
define( 'WP_TURN_OFF_ADMIN_BAR', false );
define( 'WPE_BETA_TESTER', false );
// Enable WP_DEBUG mode
define( 'WP_DEBUG', false);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
define('SCRIPT_DEBUG', true);
// Increases memrory limit
define( 'WP_MEMORY_LIMIT', '2048M' );
define( 'WP_MAX_MEMORY_LIMIT', '2048M' );
umask(0002);
$wpe_cdn_uris=array ( );
$wpe_no_cdn_uris=array ( );
$wpe_content_regexs=array ( );
$wpe_all_domains=array ( 0 => 'net2codestg.wpengine.com', 1 => 'net2codestg.wpenginepowered.com', 2 => 'network2code.com', 3 => 'www.network2code.com', 4 => 'blog.network2code.com', );
$wpe_varnish_servers=array ( 0 => '127.0.0.1', );
$wpe_special_ips=array ( 0 => '34.132.201.4', 1 => 'pod-218760-utility.pod-218760.svc.cluster.local', );
$wpe_netdna_domains=array ( );
$wpe_netdna_domains_secure=array ( );
$wpe_netdna_push_domains=array ( );
$wpe_domain_mappings=array ( );
$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );

define( 'WP_CACHE', TRUE );
define('WPLANG','');
# WP Engine ID
# WP Engine Settings
header('X-Frame-Options: SAMEORIGIN');
# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');//Disable File Edits
if (!defined('DISALLOW_FILE_EDIT')) { define( 'DISALLOW_FILE_EDIT', FALSE ); }