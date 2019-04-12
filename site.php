<?php

use \Hcode\Page;
use Hcode\Model\Products;
use Hcode\Model\Category;

/***** ROTAS DA VIEW *****/
$app->get('/', function() {
        $product = Products::listAll();
	$page = new Page();
        $page->setTpl("index", array(
            'product' => Products::checkList($product)
        ));
});

$app->get('/categories/:idcategory', function($idcategory){
   $category = new Category();
   $category->get((int)$idcategory);
   $page = new Page();
   $page->setTpl('category', array(
       'category' => $category->getValues(),
       'products' => Products::checkList($category->getProducts())
   ));
});


