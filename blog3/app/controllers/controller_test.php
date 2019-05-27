<?php
require 'app/models/Validation.php';

class Controller_test extends Controller
{
	 protected $_rules = [
    'name'           =>'required,words:2-3',
    'group'          =>'required',
    'random_value'         =>'required',
    'mark'           =>'required,int',
    'event_'=>'count:1-3',
];
    protected $_messages = [
        'name'           => [
            'required'=>'Поле обязательное',
            'words'    =>'Введите в формате: Фамилия Имя Отчество',
        ],
        'group'          =>'Поле обязательное',
        'points'         =>'Поле обязательное',
        'event_'=>'Должно быть выбрано 1-3 пунктов',
        'mark'           => [
            'required'=>'Поле обязательное',
            'int'      =>'Должно быть числом',
        ],
    ];
	function action_index()
	{	

		$validator = new Validation($_POST, $this->_rules, $this->_messages);
        $validator->validate();
		$this->view->generate('test_view.php', 'template_view.php',$validator);
	}



}