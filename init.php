<?php

require_once __DIR__.'/vendor/autoload.php';

//configure constants
define('DS', DIRECTORY_SEPARATOR);
define('EOL', PHP_EOL);
define('__DEV__', getenv('DEV') === 'on');

if (!isset($argv)) {
	$argv = array(isset($_SERVER['SCRIPT_FILENAME']) ? $_SERVER['SCRIPT_FILENAME'] : __FILE__);
	$args_list = isset($_GET['argv']) && is_array($_GET['argv']) ? $_GET['argv'] : $_GET;

	foreach ($args_list as $key => $value) {
		if ($value) $argv[] = $value;
	}
}

if (Common\Util::is_cli()) {
	$document_root = realpath(isset($argv[1]) && is_dir($argv[1]) ? $argv[1] : dirname(__DIR__));
	$server_name = gethostname();
	$request_uri = str_replace(DS, '/', substr($_SERVER['PHP_SELF'], strlen($document_root)));
} else {
	$document_root = realpath($_SERVER['DOCUMENT_ROOT']);
	$server_name = $_SERVER['HTTP_HOST'];
	$request_uri = $_SERVER['REQUEST_URI'];
}

$document_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on' ? 'https' : 'http').'://'.$server_name;

$app_path = $document_root;
$app_url = $document_url;

if (strpos(__DIR__, $document_root) === 0) {
	$app_uri = substr(__DIR__, strlen($document_root));
	$app_path .= $app_uri;
	$app_url .= str_replace(DS, '/', $app_uri);
}

define('DOCUMENT_ROOT', $document_root);
define('SERVER_NAME', $server_name);
define('SERVER_URL', $document_url);
define('SERVER_REQUEST', $document_url.$request_uri);

define('APP_PATH', $app_path);
define('APP_URL', $app_url);

//Assets URL, location of your css, img, js, etc. files
define('ASSETS_URL', APP_URL);
define('ASSETS_PATH', APP_PATH);

// configure global constants
// define('APP_TMP_PATH', APP_PATH.DS.'tmp');
// define('APP_TMP_URL', APP_URL.'/tmp');

// global functions
require_once __DIR__.'/lib/func.php';
require_once __DIR__.'/lib/config.php';

// configure SmartUI
\SmartUI\UI::$icon_source = 'fa';

// register our UI plugins
\SmartUI\UI::register('widget', 'SmartUI\Components\Widget');
\SmartUI\UI::register('datatable', 'SmartUI\Components\DataTable');
\SmartUI\UI::register('button', 'SmartUI\Components\Button');
\SmartUI\UI::register('tab', 'SmartUI\Components\Tab');
\SmartUI\UI::register('accordion', 'SmartUI\Components\Accordion');
\SmartUI\UI::register('carousel', 'SmartUI\Components\Carousel');
\SmartUI\UI::register('smartform', 'SmartUI\Components\SmartForm');
\SmartUI\UI::register('nav', 'SmartUI\Components\Nav');

$_ui = new \SmartUI\UI();