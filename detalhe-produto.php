<?php 
    include "includes/header.php";
 ?>
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Nome do produto</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Procurar Produtos</h2>
                        <form action="">
                            <input type="text" placeholder="Nome do produto">
                            <input type="submit" value="Procurar">
                        </form>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Outros Produtos</h2>
                        <div class="thubmnail-recent">
                            <img src="http://placehold.it/75x75" class="recent-thumb" alt="">
                            <h2><a href="">Produto 1</a></h2>
                            <div class="product-sidebar-price">
                                <ins>R$700.00</ins>
                            </div>                             
                        </div>
                         <div class="thubmnail-recent">
                            <img src="http://placehold.it/75x75" class="recent-thumb" alt="">
                            <h2><a href="">Produto 2</a></h2>
                            <div class="product-sidebar-price">
                                <ins>R$700.00</ins>
                            </div>                             
                        </div>
                         <div class="thubmnail-recent">
                            <img src="http://placehold.it/75x75" class="recent-thumb" alt="">
                            <h2><a href="">Produto 3</a></h2>
                            <div class="product-sidebar-price">
                                <ins>R$700.00</ins>
                            </div>                             
                        </div>
                         <div class="thubmnail-recent">
                            <img src="http://placehold.it/75x75" class="recent-thumb" alt="">
                            <h2><a href="">Produto 4</a></h2>
                            <div class="product-sidebar-price">
                                <ins>R$700.00</ins>
                            </div>                             
                        </div>
                         <div class="thubmnail-recent">
                            <img src="http://placehold.it/75x75" class="recent-thumb" alt="">
                            <h2><a href="">Produto 5</a></h2>
                            <div class="product-sidebar-price">
                                <ins>R$700.00</ins>
                            </div>                             
                        </div>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="#">Home</a>
                            <a href="#">Nome da categoria</a>
                            <a href="#">Nome do produto</a>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">

                                    <div class="product-main-img">
                                        <img src="http://placehold.it/275x345" alt="Produto">
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name">Nome do produto</h2>
                                    <div class="product-inner-price">
                                        <ins>R$700.00</ins>
                                    </div>    
                                    
                                    <form action="cart.html" class="cart">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                        <button class="add_to_cart_button" type="submit">Comprar</button>
                                    </form>   
                                    
                                    <div class="product-inner-category">
                                        <p>Categoria: <a href="">nome da categoria</a>. 
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Descrição</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Descrição do produto</h2>  
                                                <p>Descrição detalhada do produto</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

<?php 
    include "includes/footer.php";
 ?>