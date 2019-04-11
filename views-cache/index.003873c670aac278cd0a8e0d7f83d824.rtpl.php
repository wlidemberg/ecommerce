<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="slide-area">
    <!-- SLIDER -->
    <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
            <li>
                <img src="res/site/img/h4-slide.png" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">iPhone <span class="primary">6 <strong>Plus</strong></span></h2>
                    <h4 class="caption subtitle">Dual SIM</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Comprar</a>
                </div>
            </li>
            <li>
                <img src="res/site/img/h4-slide2.png" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">by one, get one <span class="primary">50% <strong> off</strong></span></h2>
                    <h4 class="caption subtitle">school supplies & blackpacks.*</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Comprar</a>
                </div>
            </li>
            <li>
                <img src="res/site/img/h4-slide3.png" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">Apple <span class="primary">Store <strong>Ipod</strong></span></h2>
                    <h4 class="caption subtitle">Select Item</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Comprar</a>
                </div>
            </li>
            <li>
                <img src="res/site/img/h4-slide4.png" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">Apple <span class="primary">Store <strong> Ipod</strong></span></h2>
                    <h4 class="caption subtitle">& Phone</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Comprar</a>
                </div>
            </li>
        </ul>
    </div>
    <!-- FIM SLIDER -->
</div><!-- FIM DIV SLIDE_AREA -->

<div class="promo-area">
    <div class="zigzag-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>1 ano de garantia</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Frete Grátis</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Pagamento Seguro</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>Novos Produtos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- FIM DIV PROMO-AREA -->
<div class="maincontent-area">
    <div class="zigzag-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Produtos</h2>
                        <div class="product-carousel">
                            <?php $counter1=-1;  if( isset($product) && ( is_array($product) || $product instanceof Traversable ) && sizeof($product) ) foreach( $product as $key1 => $value1 ){ $counter1++; ?>

                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Produto 1">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i>Comprar</a>
                                        <a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="view-details-link"><i class="fa fa-link"></i>Ver Detalhes</a>
                                    </div>
                                </div>
                                <h2><a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></h2>
                                <div class="product-carousel-price">
                                    <ins>R$<?php echo formatPrice($value1["vlprice"]); ?></ins>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- FIM DIV MAINCONTENT_AREA -->
<div class="brands-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="brand-wrapper">
                    <div class="brand-list">
                        <img src="res/site/img/brand1.png">
                        <img src="res/site/img/brand2.png">
                        <img src="res/site/img/brand3.png">
                        <img src="res/site/img/brand4.png">
                        <img src="res/site/img/brand5.png">
                        <img src="res/site/img/brand6.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- FIM DIV BRANDS-AREA -->