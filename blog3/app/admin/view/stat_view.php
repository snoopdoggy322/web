

<style>
    .error {
        color : red;
    }
</style>


<body>
	<link rel="stylesheet" href="public/css/style1.css">

	<header>
		<h1>Статистика посещений</h1>
	</header>
<?php

 $test = StatModel::find_all();

if (count($test)) {
    // Open the table
echo '<table >';
          foreach ($test as $tests) {

 echo "
  <tr>
    <td>№</td>
        <td>  $tests[id]</td>

    </tr>
     <tr  text-align='left'>
        <td>Дата</td>
        <td>$tests[time]</td>
    </tr>
    <tr>
        <td>Страница</td>
        <td>$tests[page]</td>
    </tr>
    <tr>
        <td>ip-адрес</td>
        <td>$tests[ip]</td>
    </tr>
    <tr>
        <td>Браузер</td>
        <td>$tests[browser]</td>

    <tr>
    </tr>
    ";
}
    echo "</table>";
}

?>








</body>

