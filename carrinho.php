<?php 
    include "includes/header.php";
 ?>
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Carrinho</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
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
                            <form method="post" action="checkout.html">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Produto</th>
                                            <th class="product-price">Preço</th>
                                            <th class="product-quantity">Quantidade</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a title="Remover este item" class="remove" href="#">×</a> 
                                            </td>

                                            <td class="product-thumbnail">
                                                <a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="http://placehold.it/75x75"></a>
                                            </td>

                                            <td class="product-name">
                                                <a href="single-product.html">Nome do produto</a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount">R$15.00</span> 
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                    <input type="button" class="minus" value="-">
                                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="1" min="0" step="1">
                                                    <input type="button" class="plus" value="+">
                                                </div>
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="amount">R$15.00</span> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="actions" colspan="6">
                                                <input type="submit" value="Atualizar Carrinho" name="update_cart" class="button">
                                                <input type="submit" value="Finalizar" name="proceed" class="checkout-button button alt wc-forward">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>

                            <div class="cart-collaterals">
                                
                                <div class="cart_totals">
                                    <h2>Total do carrinho</h2>

                                    <table cellspacing="0">
                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Total Carrinho</th>
                                                <td><span class="amount">R$ 15.00</span></td>
                                            </tr>

                                            <tr class="shipping">
                                                <th>Frete</th>
                                                <td>Não Calculado</td>
                                            </tr>

                                            <tr class="order-total">
                                                <th>Total do pedido</th>
                                                <td><strong><span class="amount">R$ 15.00</span></strong> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                                <form method="post" action="#" class="shipping_calculator">

                                    <h2>Simular Frete</h2>

                                    <section id="calcalute-shipping-wrap" class="shipping-calculator-form">

                                    <p class="form-row form-row-wide">
                                    <select rel="calc_shipping_state" class="country_to_state" id="calc_shipping_country" name="calc_shipping_country">
                                        <option value="BR">Selecione um método</option>
                                        <option value="BR">Sedex</option>
                                        <option value="BR">PAC</option>
                                        <option value="BR">Transportadora</option>
                                    </select>
                                    </p>

                                    <p class="form-row form-row-wide"><input type="text" id="calc_shipping_postcode" name="calc_shipping_postcode" placeholder="CEP" value="" class="input-text"></p>


                                    <p><button class="button" value="1" name="calc_shipping" type="submit">Calcular</button></p>

                                    </section>
                                </form>

                            </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

<?php 
    include "includes/footer.php";
 ?>