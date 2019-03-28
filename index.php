<?php 

require_once("vendor/autoload.php");

use \Slin\Slin;
use \Hcode\Page;
use \Hcode\PageAdmin;

$app = new \Slim\Slim();

$app->config('debug', true);

/***** ROTAS DA VIEW *****/
$app->get('/', function() {
    
	$page = new Page();
        $page->setTpl("index");
});

/***** ROTAS DA VIEW/ADMIN *****/
$app->get('/admin', function(){
    
    $page = new PageAdmin();
    $page->setTpl('index');
});

$app->run();

 ?>