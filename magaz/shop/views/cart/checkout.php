<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
                                        <a href="/category/<?php echo $categoryItem['id']; ?>">
                                            <?php echo $categoryItem['name']; ?>
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


                    <?php if ($result): ?>
                        <p><?php echo $lang["Заказ оформлен. Мы вам перезвоним"]; ?></p>
                    <?php else: ?>

                        <p><?php echo $lang["Выбрано товаров"]; ?>: <?php echo $totalQuantity; ?>, <?php echo $lang["на сумму"]; ?>: <?php echo $totalPrice; ?> ₽</p><br/>

                        <?php if (!$result): ?>                        

                            <div class="col-sm-10">
                                <?php if (isset($errors) && is_array($errors)): ?>
                                    <ul>
                                        <?php foreach ($errors as $error): ?>
                                            <li> - <?php echo $error; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <p><?php echo $lang["Для оформления заказа заполните форму. Наш менеджер свяжется с Вами."]; ?></p>

                                <div class="login-form">
                                    <form action="#" method="post">

                                        <p><?php echo $lang["Ваше имя"]; ?></p>
                                        <input type="text" name="userName" placeholder="" value="<?php echo $userName; ?>"/>

                                        <p><?php echo $lang["Номер телефона"]; ?>/email</p>
                                        <input type="text" name="userPhone" placeholder="" value="<?php echo $userPhone; ?>"/>

                                        <p><?php echo $lang["Коментарий к заказу"]; ?></p>
                                        <input type="text" name="userComment" placeholder="<?php echo $lang["Сообщение"]; ?>" value="<?php echo $userComment; ?>"/>

                                        <br/>
                                        <br/>
                                        <div class="g-recaptcha" data-sitekey="6Lfbr6UUAAAAAE7cOqZdw4Y3yVdSqojf5dDIagIS"></div>
                                        <input type="submit" name="submit" class="btn btn-default" value="<?php echo $lang["Оформить"]; ?>" />
                                    </form>
                                </div>
                            </div>

                        <?php endif; ?>

                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>