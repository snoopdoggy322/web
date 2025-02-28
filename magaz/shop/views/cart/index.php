<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2><?php echo $lang["Каталог"]; ?></h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id'];?>">
                                            <?php echo $categoryItem['name'];?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center"><?php echo $lang["Корзина"]; ?></h2>
                    
                    <?php if ($productsInCart): ?>
                        <p><?php echo $lang["Вы выбрали такие товары"]; ?>:</p>
                        <table class="table-bordered table-striped table">
                            <tr>
                                <th><?php echo $lang["Код товара"]; ?></th>
                                <th><?php echo $lang["Название"]; ?></th>
                                <th><?php echo $lang["Стоимость"]; ?>, ₽</th>
                                <th><?php echo $lang["Количество,шт"]; ?></th>
                                <th><?php echo $lang["Удалить"]; ?></th>
                            </tr>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td><?php echo $product['code'];?></td>
                                    <td>
                                        <a href="/product/<?php echo $product['id'];?>">
                                            <?php echo $product['name'];?>
                                        </a>
                                    </td>
                                    <td><?php echo $product['price'];?></td>
                                    <td><?php echo $productsInCart[$product['id']];?></td> 
                                    <td>
                                        <a href="/cart/delete/<?php echo $product['id'];?>">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                <tr>
                                    <td colspan="4"><?php echo $lang["Общая стоимость"]; ?>, ₽:</td>
                                    <td><?php echo $totalPrice;?></td>
                                </tr>
                            
                        </table>
                        
                        <a class="btn btn-default checkout" href="/cart/checkout"><i class="fa fa-shopping-cart"></i> <?php echo $lang["Оформить заказ"]; ?></a>
                    <?php else: ?>
                        <p><?php echo $lang["Корзина пуста"]; ?></p>
                        
                        <a class="btn btn-default checkout" href="/"><i class="fa fa-shopping-cart"></i> <?php echo $lang["Вернутся к покупкам"]; ?></a>
                    <?php endif; ?>

                </div>

                
                
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>