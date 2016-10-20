<?php



require '../vendor/autoload.php';
require '../models/Cliente.php';
require 'functions.php';


// Prepare app
$app = new \Slim\Slim(array(
    'templates.path' => '../templates',
));

$app->container->singleton('log', function () {
    $log = new \Monolog\Logger('humantech');
    $log->pushHandler(new \Monolog\Handler\StreamHandler('../logs/app.log', \Monolog\Logger::DEBUG));
    return $log;
});

// Prepare view
$app->view(new \Slim\Views\Twig());
$app->view->parserOptions = array(
    'charset'          => 'utf-8',
    'cache'            => realpath('../templates/cache'),
    'auto_reload'      => true,
    'strict_variables' => false,
    'autoescape'       => true
);
$app->view->parserExtensions = array(new \Slim\Views\TwigExtension());

// Define routes
$app->map('/', function () use ($app) {

    if($app->request->isGet()){
        $app->render('index.php');
        
    }elseif ($app->request->isPost()) {

        $name   = $app->request->post('name');
        $email  = $app->request->post('email');
        $website= $app->request->post('website');
        $comment= $app->request->post('comment');

        if(verificar_email($email)){
            
            //Instancia al modelo de cliente
            $cliente = new Cliente();

            $cliente->setName($name);
            $cliente->setEmail($email);
            $cliente->setWebsite($website);
            $cliente->setcomments($comment);
            // Guardando en base de datos
            $cliente->save();

            enviarMensaje();

            echo "Exito";
            
        }else{
            echo "Error";
        }
    }

    // Render index view
})->via(['GET', 'POST']);

// Run app
$app->run();
