<body>
</ul>
	<meta charset="utf-8">
	<title>Гусев В.Я. Мои интересы</title>
	<link rel="stylesheet" href="public/css/style1.css">

	<header>
		<h1>Мои интересы</h1>
	</header>

 <p style="font-size: 20px; color: white ;">Содержание</p>
<ol id="list"	style="font-family: 'arial',cursive; font-size: 20px; color: white ;  word-wrap: break-word;">
<l1><a href="#увлечение1">Мое хобби</a></l1> <br>
<l1><a href="#увлечение2">Мои любимые фильмы</a></l1><br>
<l1><a href="#увлечение3">Моя любимая музыка</a></l1><br>
<l1><a href="#увлечение4">Моё увлечение4</a></l1><br>
</ol>



<div display="inline-block"; class="tex">
 <?php
    foreach(Interests::$interestsArr as $interests) {
        echo "<h2 id='${interests['anchor']}'>${interests['title']}</h2>
<p class='interestPR'> ${interests['description']}</p>";
    }
    ?>
</div>

</body>
