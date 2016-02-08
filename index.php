<?php 
    require "autoload.php";

    use MegaStore\Dao\ProdutoDao;
    use MegaStore\Dao\CategoriaDao;

    $produtoDao = new ProdutoDao();
    $categoriaDao = new CategoriaDao();

    $produtos = $produtoDao->listar();
    $categorias = $categoriaDao->listar();


 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mega Store</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="./">Mega<span>Store</span></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.html">Carrinho - <span class="cart-amunt">R$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Inicio</a></li>
                        <?php 
                            foreach($categorias as $categoria) {
                        ?>
                            <li><a href="#"><?= $categoria->getNome(); ?></a></li>
                        <?php 
                            }
                        ?>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
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
    
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>Mega<span>Store</span></h2>
                        <p>Somos uma empresa criada para ser o projeto do livro de php da casa do código, portanto nós não vendemos nenhum item sendo impossível realizar qualquer compra.Caso você queira aprender PHP você pode visitar o site do livro em php http://www.aprendendophp.com.br, participar do nosso forum e continuar aprendendo cada dia mais.</p>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Links Úteis </h2>
                        <ul>
                            <li><a href="#">Minha conta</a></li>
                            <li><a href="#">Contato</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Parceiros</a></li>
                            <li><a href="#">Termos de uso</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Marcas</h2>
                        <ul>
                            <li><a href="#">Marca 1</a></li>
                            <li><a href="#">Marca 2</a></li>
                            <li><a href="#">Marca 3</a></li>
                            <li><a href="#">Marca 4</a></li>
                            <li><a href="#">Marca 5</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Quer receber as nossas melhores ofertas antes de todo mundo! Deixe o seu email que nós te mantemos informado sobre nossas melhores oportunidades.</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Digite o seu email">
                                <input type="submit" value="Se inscrever">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2016 Mega Store. Todos os direitos reservados
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
  </body>
</html>