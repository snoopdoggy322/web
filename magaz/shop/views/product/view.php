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
                <div class="product-details"><!--product-details-->
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="<?php echo Product::getImage($product['id']); ?>" class="image" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->

                                <?php if ($product['is_new']): ?>
                                    <img src="/template/images/product-details/new.jpg" class="newarrival" alt="" />
                                <?php endif; ?>

                                <h2><?php echo $product['name']; ?></h2>
                                <p><?php echo $lang["Код товара"]; ?> :<?php echo $product['code']; ?></p>
                                <span>
                                    <span>Rub <?php echo $product['price']; ?></span>
                                    <a href="#" data-id="<?php echo $product['id']; ?>"
                                       class="btn btn-default add-to-cart">
                                        <i class="fa fa-shopping-cart"></i><?php echo $lang["В корзину"]; ?>
                                    </a>
                                </span>
                                <p><b><?php echo $lang["Наличие"]; ?>:</b> <?php echo Product::getAvailabilityText($product['availability']); ?></p>
                                <p><b><?php echo $lang["Производитель"]; ?>:</b> <?php echo $product['brand']; ?></p>
                            </div><!--/product-information-->
                        </div>
                    </div>
                    <div class="row">                                
                        <div class="col-sm-12">
                            <br/>
                            <h5><?php echo $lang["Описание товара"]; ?></h5>
                            <?php echo $product['description']; ?>
                        </div>
                    </div>
                </div><!--/product-details-->

<script type="text/javascript">
$(document).ready(function() { 
// Ждём загрузки страницы
    $(".image").click(function(){   // Событие клика на маленькое изображение
        var img = $(this);  // Получаем изображение, на которое кликнули
        var src = img.attr('src'); // Достаем из этого изображения путь до картинки
        $("body").append("<div class='popup'>"+ //Добавляем в тело документа разметку всплывающего окна
                         "<div class='popup_bg'></div>"+ // Блок, который будет служить фоном затемненным
                         "<img src='"+src+"' class='popup_img' />"+ // Само увеличенное фото
                         "</div>"); 
        $(".popup").fadeIn(800); // Медленно выводим изображение
        $(".popup_bg").click(function(){    // Событие клика на затемненный фон    
            $(".popup").fadeOut(800);   // Медленно убираем всплывающее окно
            setTimeout(function() { // Выставляем таймер
              $(".popup").remove(); // Удаляем разметку всплывающего окна
            }, 800);
        });
    });
    
});</script>
<style type="text/css">

.image {
    margin:30px; 
    float:left;
    cursor:pointer;
}

.popup {
    position: absolute;
    height:100%;
    width:100%;
    top:0;
    left:0;
    display:none;
    text-align:center;
}

.popup_bg {
    background:rgba(0,0,0,0.8);
    position:absolute;
    z-index:500;
    height:100%;
    width:100%;
}


.popup_img {
    position: relative;
    margin:0 auto;
    z-index:501;
    max-height:94%;
    max-width:94%;
    margin:1% 0 0 0;
}
</style>






            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>