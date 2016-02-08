<?php
    require_once "autoload.php"; 
    // tem o get ?
    if(!isset($_GET['idCategoria'])) {
        header("Location: index.php");
    }

    $idCategoria = $_GET['idCategoria'];

    use \MegaStore\Dao\ProdutoDao;
    use \MegaStore\Dao\CategoriaDao;

    $dao = new ProdutoDao();
    $categoriaDao = new CategoriaDao();
    $categoriaAtual = $categoriaDao->getPorId($idCategoria);
    
    if($categoriaAtual == null) {
        header("Location: index.php");
    }

    $produtos = $dao->getProdutoComCategoria($categoriaAtual);

    include "includes/header.php";

 ?>    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2><?= $categoriaAtual->getNome(); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="container">
            <div class="row">
                    <?php 
                        foreach($produtos as $produto) {
                     ?>
                    
                    <div class="col-md-3 col-sm-6">

                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="http://placehold.it/195x245" alt="Produto">
                            </div>
                            <h2><a href=""><?= $produto->getNome(); ?></a></h2>
                            <div class="product-carousel-price">
                                <ins>R$ <?= $produto->getPreco(); ?></ins>
                            </div>  
                            
                            <div class="product-option-shop">
                                <a class="add_to_cart_button" href="cart.html">Comprar</a>
                            </div>                       
                        </div>
                    </div>

                    <?php 
                        }
                     ?>
            </div>
            
        </div>
    </div>

<?php 
    include "includes/footer.php";
?>