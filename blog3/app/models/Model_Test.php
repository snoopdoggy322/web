<?php
require_once  'app/core/BaseActiveRecord.php';
class TestModel extends BaseActiveRecord
{
// список полей таблицы

public $id;

public $name;

public $grup;
public $f;
public $s;
public $t;
public static $table = 'test';


public static function GetParams(){
$st="(id,
        name,
            grup,
            f,
            s,
            t)";

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