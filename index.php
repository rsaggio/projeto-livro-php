<?php 
    require_once "autoload.php";

    use MegaStore\Dao\ProdutoDao;

    $produtoDao = new ProdutoDao();

    $produtos = $produtoDao->listar();


    include "includes/header.php";
 ?> 
    <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider">
				<ul class="" id="bxslider-home">
					<li>
						<img src="http://placehold.it/1160x360" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								Banner <span class="primary">1</span>
							</h2>
							<h4 class="caption subtitle">Subtítulo</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Comprar agora</a>
						</div>
					</li>
					<li>
                        <img src="http://placehold.it/1160x360" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title">
                                Banner <span class="primary">2</span>
                            </h2>
                            <h4 class="caption subtitle">Subtítulo</h4>
                            <a class="caption button-radius" href="#"><span class="icon"></span>Comprar agora</a>
                        </div>
                    </li>
                    <li>
                        <img src="http://placehold.it/1160x360" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title">
                                Banner <span class="primary">3</span>
                            </h2>
                            <h4 class="caption subtitle">Subtítulo</h4>
                            <a class="caption button-radius" href="#"><span class="icon"></span>Comprar agora</a>
                        </div>
                    </li>
                    <li>
                        <img src="http://placehold.it/1160x360" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title">
                                Banner <span class="primary">4</span>
                            </h2>
                            <h4 class="caption subtitle">Subtítulo</h4>
                            <a class="caption button-radius" href="#"><span class="icon"></span>Comprar agora</a>
                        </div>
                    </li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-mobile"></i>
                        <p>Compre pelo celular</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Entrega Rápida</p>
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
                        <p>Produtos Exclusivos</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Novidades</h2>
                        <div class="product-carousel">
                            <?php 

                                foreach($produtos as $produto) {
                            ?>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="http://placehold.it/195x245" alt="Produto">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Comprar</a>
                                            <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> Detalhes</a>
                                        </div>
                                    </div>
                                    
                                    <h2><a href="single-product.html"><?= $produto->getNome(); ?></a></h2>
                                    
                                    <div class="product-carousel-price">
                                        <ins>R$ <?= $produto->getPreco(); ?></ins>
                                    </div> 
                                </div>
                            <?php 
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
 <?php 
    include "includes/footer.php";
  ?>