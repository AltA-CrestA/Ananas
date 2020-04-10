<?php


class SiteController
{

    public function actionIndex()
    {

        require_once(ROOT . '/app/views/site/index.php');

        return true;

    }

    public function actionContact()
    {

        require_once(ROOT . '/app/views/site/contact.php');

        return true;

    }

}