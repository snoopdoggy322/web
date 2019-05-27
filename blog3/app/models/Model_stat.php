<?php
require_once 'app/core/BaseActiveRecord.php';
class StatModel extends BaseActiveRecord
{
// список полей таблицы

protected static $fields = array();

public $id;

public $time;

public $page;

public $ip;

public $host;

public $browser;

public static $table = 'stat';

function save_statistic($page){

$time_statistic = date('Y-m-d h:m:s');

$web_page = $page;

$ip_address = $_SERVER['REMOTE_ADDR'];

$host_name = gethostbyaddr($_SERVER['REMOTE_ADDR']);

$browser_name = $_SERVER['HTTP_USER_AGENT'];

  $params = [0,$time_statistic,$web_page,$ip_address,$host_name,$browser_name];

StatModel::save($params);

}

public static function GetParams(){
$st="(id,
      time,
      page,
      ip,
      host,
      browser)";

return $st;
}

}
// делаем PDO доступным для всех AR классов
BaseActiveRecord::$pdo = $pdo;
// получаем запись из БД с id = 1
//$test = TestModel::find(1);
//var_dump($test->id);
//var_dump($test->group);
//var_dump($test->first);
//var_dump($test->three);
//var_dump($test);