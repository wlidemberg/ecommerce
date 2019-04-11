<?php

use \Hcode\Page;

/***** ROTAS DA VIEW *****/
$app->get('/', function() {
    
	$page = new Page();
        $page->setTpl("index");
});

