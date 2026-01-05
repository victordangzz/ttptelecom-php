<?php
if (!defined('CONFIG')) die("Error");
date_default_timezone_set('Asia/Ho_Chi_Minh');
define('NN_CONTRACT', '');
define('NN_AUTHOR', 'fixhub');
define('NN_FINISH_TIME', '2025');
$config = array(
  'database' => array(
    'server-name' => $_SERVER["SERVER_NAME"],
    'url' => '/ttptelecom/',
    'type' => 'mysql',
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'dbname' => 'ttptelecom_db',
    'port' => 3306,
    'prefix' => 'table_',
    'charset' => 'utf8mb4'
  ),
  'website' => array(
    'error-reporting' => false,
    'secret' => '$!@#$*&!~@',
    'salt' => 'MPjC{ZaPd>',
    'debug-developer' => false,
    'debug-css' => true,
    'debug-js' => true,
    'index' => false,
    'linkredirect' => false,
    'image' => array(),
    'noseo' => array('user', 'order', 'search'),
    'video' => array(
      'extension' => array('mp4', 'mkv'),
      'poster' => array(
        'width' => 700,
        'height' => 610,
        'extension' => '.jpg|.png|.jpeg'
      ),
      'allow-size' => '100Mb',
      'max-size' => 100 * 1024 * 1024
    ),
    'upload' => array(
      'max-width' => 1600,
      'max-height' => 1600
    ),
    'adminlang' => array(
      'active' => false,
      'key' => array('vi'),
      'lang' => array(
        'vi' => 'Tiếng Việt'
      )
    ),
    'lang' => array(
      'vi' => 'Tiếng Việt'
    ),
    'lang-doc' => 'vi',
    'slug' => array(
      'vi' => 'Tiếng Việt'
    ),
    'seo' => array(
      'vi' => 'Tiếng Việt'
    ),
    'comlang' => array()
  ),
  'order' => array(
    'ship' => false
  ),
  'login' => array(
    'admin' => 'LoginAdmin' . NN_CONTRACT,
    'member' => 'LoginMember' . NN_CONTRACT,
    'attempt' => 5,
    'delay' => 1
  ),
  'googleAPI' => array(
    'recaptcha' => array(
      'active' => false,
      'urlapi' => 'https://www.google.com/recaptcha/api/siteverify',
      'sitekey' => '6LezS5kUAAAAAF2A6ICaSvm7R5M-BUAcVOgJT_31',
      'secretkey' => '6LezS5kUAAAAAGCGtfV7C1DyiqlPFFuxvacuJfdq'
    )
  ),
  'oneSignal' => array(
    'active' => false,
    'id' => 'af12ae0e-cfb7-41d0-91d8-8997fca889f8',
    'restId' => 'MWFmZGVhMzYtY2U0Zi00MjA0LTg0ODEtZWFkZTZlNmM1MDg4'
  )
);

error_reporting(($config['website']['error-reporting']) ? E_ALL : 0);
if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
  $http = 'https://';
} else {
  $http = 'http://';
}

/* Cấu hình base */
$configUrl = $config['database']['server-name'] . $config['database']['url'];
$configBase = $http . $configUrl;

/* Token */
define('TOKEN', md5(NN_CONTRACT . $config['database']['url']));

/* Path */
define('ROOT', str_replace(basename(__DIR__), '', __DIR__));
define('ASSET', $http . $configUrl);
define('ADMIN', 'admin');

/* Cấu hình login */
$loginAdmin = $config['login']['admin'];
$loginMember = $config['login']['member'];

/* Cấu hình upload */
require_once LIBRARIES . "constant.php";
