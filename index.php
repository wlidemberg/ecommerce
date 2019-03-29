<?php 
session_start();
require_once("vendor/autoload.php");

use \Slin\Slin;
use \Hcode\Page;
use \Hcode\PageAdmin;
use \Hcode\Model\User;

$app = new \Slim\Slim();

$app->config('debug', true);

/***** ROTAS DA VIEW *****/
$app->get('/', function() {
    
	$page = new Page();
        $page->setTpl("index");
});

/***** ROTAS DA VIEW/ADMIN *****/
$app->get('/admin', function(){
    User::verifyLogin();
    $page = new PageAdmin();
    $page->setTpl('index');
});

/***** ROTAS DA VIEW/ADMIN/LOGIN *****/
$app->get('/admin/login/', function(){
    $page = new PageAdmin([
        "header" => false,
        "footer" => false
    ]);
    $page->setTpl('login');
});

$app->post('/admin/login', function(){
    User::login($_POST["login"], $_POST["password"]);
    
    header("Location:/admin");
    exit;
});

$app->get('/admin/logout', function(){
    User::logout();
    header("Location:/admin/login");
    exit;

    
});

$app->run();



 ?>