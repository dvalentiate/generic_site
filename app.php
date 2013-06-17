<?php

// if requesting an existing file, serve it up
$filename = __DIR__ . '/web' . preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
	return false;
}

require_once __DIR__ . '/vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

$app->get('/', function () use ($app) {
	return $app->redirect('/helloworld');
});

$app->get('/helloworld', function() use ($app) {
	return (new Scenic\View('view'))->render('helloworld.phtml', array(
		'title' => 'Hello World!',
	));
});

$app->run();
