<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <script type="text/javascript" src="/template/js/ckeditor/ckeditor.js"></script>
     <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
       <form action="#" method="post" enctype="multipart/form-data"; 
       onsubmit=
       '$("#ab").val(CKEDITOR.instances["editor1"].getData());'>
<textarea id="editor1" name="txt" cols="100" rows="20">
  <?php
  if ($_SESSION["lang"]=="ru")
   echo $about["about_ru"];
   else echo $about["about_en"]; ?>  

</textarea>
<script type="text/javascript">

           editor1=CKEDITOR.replace( 'editor1' );

  </script>
<input type="text" name="about" id="ab" hidden>
<input type="submit" name="submit" class="btn btn-default" value="Сохранить">


</form>
<?php 
// Проверка доступа

        // Обработка формы
        if (isset($_POST['submit'])) {
                    self::checkAdmin();
            $about = $_POST['about'];
            // Сохраняем изменения
              if ($_SESSION["lang"]=="ru")
   Product::updateAboutRu($about);
   else Product::updateAboutEn($about);
            

            // Перенаправляем пользователя на страницу управлениями заказами
        }
        return true;
 ?>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

