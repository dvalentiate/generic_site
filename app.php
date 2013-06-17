<?php

// if requesting an existing file, serve it up
$filename = __DIR__ . '/web' . preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
	return false;
}

require_once __DIR__ . '/vendor/autoload.php';

$app = new Silex\Application();

ini_set('display_errors', 1);
$app['debug'] = true;

$app->get('/', function () use ($app) {
	return $app->redirect('/helloworld');
});

$app->get('/helloworld', function() use ($app) {
	$view = new Scenic\View(__DIR__ . '/view');
	return $view->render('helloworld.phtml', array(
		'title' => 'Hello World!',
	));
});

$app->run();
