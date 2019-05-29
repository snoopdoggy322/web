<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <h3><?php echo $lang["Кабинет пользователя"]; ?></h3>
            
            <h4><?php echo $lang["Привет"]; ?>, <?php echo $user['name'];?>!</h4>
            <ul>
                <li><a href="/cabinet/edit"><button type="button" class="btn btn-warning"><?php echo $lang["Редактировать данные аккаунта"]; ?></button></a></li>
            </ul>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>