<?php

/**
 * Контроллер AdminController
 * Главная страница в админпанели
 */
class AdminController extends AdminBase
{
    /**
     * Action для стартовой страницы "Панель администратора"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Подключаем вид
        require_once(ROOT . '/views/admin/index.php');
        return true;
    }
public function actionLogo()
    {
       
        // Проверка доступа
        self::checkAdmin();
  $about = Product::getAbout();
        // Подключаем вид
        require_once(ROOT . '/views/admin/logo.php');
        return true;
    }
}
