<?php
require 'app/models/Validation.php';
class Controller_blogeditor extends Controller
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


	function action_blogeditor()
	{	$validator = new Validation($_POST, $this->_rules, $this->_messages);
        $validator->validate();
		$this->view->generate('blogeditor_view.php', 'template_admin.php',$validator);
	}
}