<?php
include_once 'app/core/BaseActiveRecord.php';
class CommentsModel extends BaseActiveRecord
{
// список полей таблицы

public $id;
public $name_user;
public $id_blog;
public $text;
public static $table = 'users_comments';
public static function GetParams(){
$st="(id,
        id_user,
            id_blog,
            text)";

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