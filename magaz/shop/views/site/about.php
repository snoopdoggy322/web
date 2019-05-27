<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div id="raz" class="col-lg-6">
                       <?php 
        if ($_SESSION["lang"]=="ru")
        echo $about["about_ru"];
        else echo $about["about_en"];
         ?>
            </div>


            <div class="col-lg-6">
                <h4><?php echo $lang["Мы на карте"]; ?></h4>

                <br/>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2840.5650184140723!2d33.51937161558514!3d44.60592147910003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409524c7c2e9f15b%3A0xa4682f0a63ede3ec!2z0JHQvtC70YzRiNCw0Y8g0JzQvtGA0YHQutCw0Y8g0YPQuy4sIDMyLCDQodC10LLQsNGB0YLQvtC_0L7Qu9GM!5e0!3m2!1sru!2s!4v1556968990488!5m2!1sru!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>