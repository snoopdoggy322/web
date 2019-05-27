<?php

$dsn = 'mysql:dbname=blog;host=127.0.0.1;charset=utf8';
$username = 'root';
$password = '';
try {
$pdo = new PDO($dsn, $username, $password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
echo 'Подключение не удалось: ' . $e->getMessage();

}
abstract class BaseActiveRecord
{
public static $pdo;
public static function find($id)
{

// подготавливаем SQL запрос
$query = 'SELECT * FROM '.static::$table.' WHERE id = :id';
$s = self::$pdo->prepare($query);
// подставляем в запрос идентификатор записи,
// которую необходимо извлечь из БД
$s->bindParam(':id', $id);
// получаем запись из БД в виде ассоциативного массива
$s->execute();
$row = $s->fetch(PDO::FETCH_ASSOC);
// если ничего не найдено, то возвращаем NULL
if (!$row) {
return null;
}
// создаем текущий AR объект и возвращаем его в качестве результата
$class = new static();
foreach ($row as $key => $value) {
$ar->$key = $value;
}
return $ar;
}



public static function find_param($name,$value)
{
$ar=NULL;
// подготавливаем SQL запрос
echo $table;
$query = 'SELECT * FROM '.static::$table.' WHERE '.$name.' = :value';
$s = self::$pdo->prepare($query);
// подставляем в запрос идентификатор записи,
// которую необходимо извлечь из БД
$s->bindParam(':value', $value);
// получаем запись из БД в виде ассоциативного массива
$s->execute();
$row = $s->fetch(PDO::FETCH_ASSOC);
// если ничего не найдено, то возвращаем NULL
if (!$row) {
return null;
}
// создаем текущий AR объект и возвращаем его в качестве результата
$class = new static();
foreach ($row as $key => $value) {
$ar->$key = $value;
}
return $ar;
}
public static function find_comments($value)
{
$ar=NULL;
// подготавливаем SQL запрос
echo $table;
$query = 'SELECT * FROM users_comments WHERE id_blog = '.$value.';';
$s = self::$pdo->query($query);
// подставляем в запрос идентификатор записи,
// которую необходимо извлечь из БД
$data = $s->fetchAll();
return $data;
}


public static function find_all()
{

// подготавливаем SQL запрос
$query = 'SELECT * FROM '.static::$table.';';
$s = self::$pdo->query($query);
// подставляем в запрос идентификатор записи,
// которую необходимо извлечь из БД
$data = $s->fetchAll();
return $data;

}

public static function find_id($id)
{

// подготавливаем SQL запрос
$query = 'SELECT * FROM '.static::$table.' WHERE id = '.$id;
$s = self::$pdo->query($query);
// подставляем в запрос идентификатор записи,
// которую необходимо извлечь из БД
$data = $s->fetchAll();
return $data;

}


public static function find_page($n1,$n2)
{

// подготавливаем SQL запрос
$query = 'SELECT * FROM '.static::$table.' WHERE (id>='.$n1.') AND (id<='.$n2.');';
$s = self::$pdo->query($query);
// подставляем в запрос идентификатор записи,
// которую необходимо извлечь из БД
$data = $s->fetchAll();
return $data;

}

public static function find_q($q)
{

// подготавливаем SQL запрос
$query = $q;
$s = self::$pdo->query($query);
// подставляем в запрос идентификатор записи,
// которую необходимо извлечь из БД
$data = $s->fetchAll();
return $data;

}

public static function get_q($q)
{

// подготавливаем SQL запрос
$query = $q;
$s = self::$pdo->query($query);
}

public static function save($param)
{
	$str="(";
foreach ($param as $params) {
	$str=$str." '".$params."',";
}
$str = substr($str, 0, -1);
$str=$str.")";
if($param[0]!=NULL)
$query = 'SELECT * FROM '.static::$table." WHERE id=$param[0]";
$query = 'SELECT * FROM '.static::$table.' WHERE id=666;';
 //echo $query;  
$s = self::$pdo->query($query);
$data = $s->fetchAll();
if(!$data) {
$sql = "INSERT INTO ".static::$table.static::GetParams()." VALUES".$str.";";  }
 else     {
 	$query = "DELETE FROM ".static::$table." WHERE id=$param[0];";
$s = self::$pdo->query($query);
 	$sql="INSERT INTO ".static::$table.static::GetParams()." VALUES".$str.";";
 	
 }   
// echo $sql;                            
$s = self::$pdo->query($sql);
}


}