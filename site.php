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
   $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
   $category = new Category();
   $category->get((int)$idcategory);
   $pagination = $category->getProductsPage($page);
   $pages = [];
   for($i=1; $i <= $pagination["pages"]; $i++){
       array_push($pages, array(
           'link' => '/categories/'.$category->getidcategory().'?page='.$i,
           'page' => $i
       ));
   }
   $page = new Page();
   $page->setTpl('category', array(
       'category' => $category->getValues(),
       'products' => $pagination["data"],
       'pages' => $pages
   ));
});

$app->get('/products/:desurl', function($desurl){
    $product = new Products();
    $product->getFromURL($desurl);
    $page = new Page();
    $page->setTpl('product-detail', array(
        'products' => $product->getValues(),
        'categories' => $product->getCategories()
    ));
});


