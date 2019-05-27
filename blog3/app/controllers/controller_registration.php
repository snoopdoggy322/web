<?php
require 'app/models/Validation.php';
class Controller_registration extends Controller
{
 protected $_rules = [
    'name'           =>'required,',
    'text'          =>'required',
];
    protected $_messages = [
        'name'           => [
            'required'=>'Поле обязательное',
            'words'    =>'Введите в формате: Фамилия Имя Отчество',
        ],
        'text'          =>'Поле обязательное',
        'points'         =>'Поле обязательное',
        'event_'=>'Должно быть выбрано 1-3 пунктов',
        'mark'           => [
            'required'=>'Поле обязательное',
            'int'      =>'Должно быть числом',
        ],
    ];


	function action_index()
	{	$validator = new Validation($_POST, $this->_rules, $this->_messages);
        $validator->validate();
		$this->view->generate('registration_view.php', 'template_view.php',$validator);
	}
function check(){
  $login = strtolower(htmlspecialchars($_POST["login"])); // Получаем логин, преобразуем ряд спецсимволов и приводим строку к нижнему регистру
  $mysqli = new mysqli("localhost", "root", "", "mydb"); // Подключаемся к базе данных
  $query = "SELECT `id` FROM `users` WHERE `login`='".$mysqli->real_escape_string($login)."'"; // Формируем запрос на поиск пользователя с полученным логином
  $result_set = $mysqli->query($query); // Отправляем запрос
   return  $result_set->num_rows != 0; // Если ничего не найдено, то выводим false, иначе true
 
}

}