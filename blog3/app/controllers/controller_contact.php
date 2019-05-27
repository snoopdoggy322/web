<?php


require 'app/models/Validation.php';
class Controller_contact extends Controller
{

 protected $_rules = [
        'name'           =>'required,words:2-3',
        'email'         =>'required,email',
        'tel'           =>'required,phone',
    ];
    protected $_messages = [
        'name'           => [
            'required'=>'Поле обязательное',
            'words'    =>'Введите в формате: Фамилия Имя Отчество',
        ],
        'tel'           => [
            'required'=>'Поле обязательное',
            'phone'      =>'Должно быть существующим номером телефона, начиная с +',
        ],
        'email'           => [
            'required'=>'Поле обязательное',
            'phone'      =>'Должно быть существующим email',
        ],
    ];



	function action_index()
	{	

        $validator = new Validation($_POST, $this->_rules, $this->_messages);
        $validator->validate();
		$this->view->generate('contact_view.php', 'template_view.php', $validator);
	}

 public function submit()
    {

        $validator = new Validation($_POST, $this->_rules, $this->_messages);
        $validator->validate();
        if($validator->isValid()) {
            $this->view->render('contact_send.php', 'template_view.php');
        } else {
            $this->view->render('contact', 'contact', $validator);
        }




}
}