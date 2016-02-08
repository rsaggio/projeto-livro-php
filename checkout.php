<?php 
    include "includes/header.php";
 ?>
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Checkout</h2>
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

                            <form id="login-form-wrap" class="login" method="post">


                                <p>Se você já comprou algum produto conosco faça login para finalizar a sua compra, se é sua primeira vez preencha os dados abaixo</p>

                                <p class="form-row form-row-first">
                                    <label for="email">Email <span class="required">*</span>
                                    </label>
                                    <input type="text" id="email" class="input-text">
                                </p>
                                <p class="form-row form-row-last">
                                    <label for="password">Senha <span class="required">*</span>
                                    </label>
                                    <input type="password" id="password" class="input-text">
                                </p>

                                <div class="clear"></div>


                                <p class="form-row">
                                    <input type="submit" value="Login" name="login" class="button">
                                </p>

                                <div class="clear"></div>
                            </form>

                            <form enctype="multipart/form-data" action="#" class="checkout" method="post" name="checkout">

                                <div id="customer_details" class="row">
                                    <div class="col-md-12">
                                        <div class="woocommerce-billing-fields">
                                            <h3>Novo Usuário</h3>

                                            <p class="form-row">
                                                <label for="billing_name">Nome Completo <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" id="billing_name" class="input-text" placeholder="Nome">
                                            </p>

                                            <div class="clear"></div>
                                            
                                            <p class="form-row">
                                                <label for="billing_postcode">CEP <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" placeholder="CEP" id="billing_postcode" class="input-text">
                                            </p>

                                            <p class="form-row">
                                                <label for="billing_address_1">Endereço <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" placeholder="Rua" id="billing_address_1" class="input-text">
                                            </p>

                                            <p class="form-row">
                                                <input type="text" value="" placeholder="Complemento (Opicional)" id="billing_address_2" class="input-text">
                                            </p>

                                            <div class="clear"></div>

                                            <p class="form-row">
                                                <label for="billing_email">Email <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" placeholder="Email" id="billing_email" class="input-text">
                                            </p>

                                            <p class="form-row">
                                                <label for="billing_password">Senha <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" id="billing_password"class="input-text">
                                            </p>
                                            <p class="form-row">
                                                <label for="billing_confirm_password">Confirmar senha <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" id="billing_confirm_password" class="input-text">
                                            </p>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>

                                <h3 id="order_review_heading">Seu pedido</h3>

                                <div id="order_review" style="position: relative;">
                                    <table class="shop_table">
                                        <thead>
                                            <tr>
                                                <th class="product-name">Produto</th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    Nome do produto <strong class="product-quantity">× 1</strong> </td>
                                                <td class="product-total">
                                                    <span class="amount">R$15.00</span> </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>

                                            <tr class="cart-subtotal">
                                                <th>Total do carrinho</th>
                                                <td><span class="amount">R$ 15.00</span>
                                                </td>
                                            </tr>

                                            <tr class="shipping">
                                                <th>Frete</th>
                                                <td>

                                                    R$ 30.00
                                                    <input type="hidden" class="shipping_method" value="free_shipping" id="shipping_method_0" data-index="0" name="shipping_method[0]">
                                                </td>
                                            </tr>


                                            <tr class="order-total">
                                                <th>Total pedido</th>
                                                <td><strong><span class="amount">R$ 15.00</span></strong> </td>
                                            </tr>

                                        </tfoot>
                                    </table>


                                    <div id="payment">
                                        <ul class="payment_methods methods">
                                            <li class="payment_method_paypal">
                                                <input type="radio" value="paypal" name="payment_method" class="input-radio" id="payment_method_paypal">

                                                <label for="payment_method_paypal">PayPal
                                                </label>
                                            </li>
                                            <li class="payment_method_paypal">
                                                <input type="radio" value="paypal" name="payment_method" class="input-radio" id="payment_method_paypal">

                                                <label for="payment_method_paypal">Pagseguro
                                                </label>
                                            </li>
                                        </ul>

                                        <div class="form-row place-order">

                                            <input type="submit" data-value="Finalizar pedido" value="Finalizar pedido" id="place_order" name="woocommerce_checkout_place_order" class="button alt">


                                        </div>

                                        <div class="clear"></div>

                                    </div>
                                </div>
                            </form>

                    </div>                    
                </div>
            </div>
        </div>
    </div>


<?php 
    include "includes/footer.php";
 ?>