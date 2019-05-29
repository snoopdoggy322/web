<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
            
            <br/>
            
            <h4>Добрый день, администратор!</h4>
            
            <br/>
            
            <p>Вам доступны такие возможности:</p>
            
            <br/>
            
            <ul  display=inline-block>
                <li> <a href="/admin/product"> <button type="button" class="btn btn-warning">Управление товарами</button></a></li>
                <li><a href="/admin/category"><button type="button" class="btn btn-warning">Управление категориями</button></a></li>
                <li><a href="/admin/order"><button type="button" class="btn btn-warning">Управление заказами</button></a></li>
                <li><a href="/admin/logo"><button type="button" class="btn btn-warning">Управление информации о магазине</button></a></li>
            </ul>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

