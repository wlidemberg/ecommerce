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

/***** ROTAS DA VIEW/ADMIN/USERS - LISTA TODOS OS USUARIOS CADASTRADOS *****/
$app->get("/admin/users", function(){
    User::verifyLogin();
    $users = User::listAll();
    $page = new PageAdmin();
    $page->setTpl("users", array(
        "users" => $users
    ));
    
});

/***** ROTAS DA VIEW/ADMIN/USERS/CREATE - CRIAR USUARIOS *****/
$app->get('/admin/users/create', function(){
    User::verifyLogin();
    $page = new PageAdmin();
    $page->setTpl('users-create');
});

/***** ROTAS DA VIEW/ADMIN/USERS/CREATE - DELETAR USUARIOS NO BANCO *****/
$app->get('/admin/users/:iduser/delete', function($iduser){
    User::verifyLogin();
    $user = new User();
    $user->get((int)$iduser);
    $user->delete();
    header("Location:/admin/users");
    exit;
});

/***** ROTAS DA VIEW/ADMIN/USERS/CREATE - ATUALIZAR USUARIOS *****/
$app->get('/admin/users/:iduser', function($iduser){
    User::verifyLogin();
    $user = new User();
    $user->get((int)$iduser);
    $page = new PageAdmin();
    $page->setTpl('users-update', array(
        "user" => $user->getValues()
    ));
});

/***** ROTAS DA VIEW/ADMIN/USERS/CREATE - SALVAR USUARIOS NO BANCO *****/
$app->post('/admin/users/create', function(){
    User::verifyLogin();
    $user = new User();
    $_POST["inadmin"] = (isset($_POST["inadmin"]))?1:0;
    $user->setData($_POST);
    $user->save();
    header("Location:/admin/users");
    exit;
});

/***** ROTAS DA VIEW/ADMIN/USERS/UPDATE - ATUALIZAR USUARIOS NO BANCO *****/
$app->post('/admin/users/:iduser', function($iduser){
    User::verifyLogin();
    $user = new User();
    $_POST['inadmin'] = (isset($_POST['inadmin']))?1:0;
    $user->get((int)$iduser);
    $user->setData($_POST);
    $user->update();
    header("Location: /admin/users");
    exit;
});


$app->run();



 ?>