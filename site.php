<?php

use \Hcode\Page;
use Hcode\Model\Products;

/***** ROTAS DA VIEW *****/
$app->get('/', function() {
        $product = Products::listAll();
	$page = new Page();
        $page->setTpl("index", array(
            'product' => Products::checkList($product)
        ));
});


