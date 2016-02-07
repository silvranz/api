<?php
use Phalcon\Loader;
use Phalcon\Mvc\Micro;
use Phalcon\Di\FactoryDefault;
use Phalcon\Db\Adapter\Pdo\Mysql as PdoMysql;
use Phalcon\Mvc\Micro\Collection as MicroCollection;

// Use Loader() to autoload our model
$loader = new Loader();
$loader->registerNamespaces(
    array(
        'Controllers' => __DIR__ . '\controllers'
    )
)->register();
$loader->registerDirs(
    array(
        __DIR__ . '/models/'
    )
)->register();

$di = new FactoryDefault();

// Set up the database service
$di->set('db', function () {
    return new PdoMysql(
        array(
            "host"     => "localhost",
            "username" => "root",
            "password" => "",
            "dbname"   => "oversign"
        )
    );
});

// Create and bind the DI to the application
$app = new Micro($di);

$posts = new MicroCollection();

// Set the main handler. ie. a controller instance
$posts->setHandler('Controllers\PostController', true);

// Set a common prefix for all routes
$posts->setPrefix('/posts');

// Use the method 'index' in PostsController
$posts->get('/', 'index');

// Use the method 'show' in PostsController
$posts->get('/show/{slug}', 'show');

$app->get('/hello-world/{name}', function ($name) use($app) {	
	/* example returning response
    $response = new Response();

    $response->setStatusCode(401, "Unauthorized");

    $response->setContent("Access is not authorized");
	*/
    echo "<h1>Welcome $name!</h1>";
});

$app->notFound(function () use ($app) {
    $app->response->setStatusCode(404, "Not Found")->sendHeaders();
    echo 'This is crazy, but this page was not found!';
});

$app->handle();
?>