
    <link rel="stylesheet" href="public/css/style1.css">

<script src="public/scripts/jquery.js"></script>
<script src="public/scripts/photo.js"></script>

	<title>Гусев В.Я. Обо мне</title>
	<link rel="stylesheet" href="style1.css">
	
<body>
	<header>
		<h1>Мои фотографии</h1>
	</header>

<div class="gallery-box">
    <div class="view">
        <div class="big-image"><img src="public/photo/1.jpg" alt="1.jpg"></div>
        <a href="#" class="prev"><</a>
        <a href="#" class="next">></a>
    </div>
    <div class="thumbnails">

<?php
            foreach(photo::$photos as $photo) {
                echo "<a href='${photo['image']}'><img src='${photo['image']}' alt='${photo['name']}' title='${photo['name']}'></a>";
            }
        ?>


    </div>
</div>
