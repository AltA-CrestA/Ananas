<?php

namespace App\models;

use App\components\Db;


class Category
{

    /**
     * Returns an array of categories
     */
    public static function getCategoriesWomen()
    {

        $db = Db::getConnection();

        $categoryList = array();

        $result = $db->query('SELECT * FROM category WHERE gender = 0 '
            . 'ORDER BY sort_order ASC');

        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }

        return $categoryList;
    }

    public static function getCategoriesMen()
    {

        $db = Db::getConnection();

        $categoryList = array();

        $result = $db->query('SELECT * FROM category WHERE gender = 1 '
            . 'ORDER BY sort_order ASC');

        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }

        return $categoryList;
    }

    public static function getCategoriesAll()
    {

        $db = Db::getConnection();

        $categoryList = array();

        $result = $db->query('SELECT * FROM category WHERE gender = 2 '
                . 'ORDER BY sort_order ASC');

        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }

        return $categoryList;
    }

    /**
     * Возвращаем массив категорий для списка в админпанели
     * (при этом в результат попадают и включенные и выключенные категории)
     * @return array <p>Массив категории</p>
     */
    public static function getCategoriesListWomanAdmin()
    {

        // Соединение с БД
        $db = Db::getConnection();

        // Запрос в БД
        $result = $db->query('SELECT * FROM category WHERE gender = 0 ORDER BY sort_order ASC ');

        // Получение и возврат результатов
        $categoryList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['sort_order'] = $row['sort_order'];
            $categoryList[$i]['status'] = $row['status'];
            $i++;
        }
        return $categoryList;

    }

    public static function getCategoriesListManAdmin()
    {

        // Соединение с БД
        $db = Db::getConnection();

        // Запрос в БД
        $result = $db->query('SELECT * FROM category WHERE gender = 1 ORDER BY sort_order ASC ');

        // Получение и возврат результатов
        $categoryList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['sort_order'] = $row['sort_order'];
            $categoryList[$i]['status'] = $row['status'];
            $i++;
        }
        return $categoryList;

    }

    public static function getCategoriesListAllAdmin()
    {

        // Соединение с БД
        $db = Db::getConnection();

        // Запрос в БД
        $result = $db->query('SELECT * FROM category WHERE gender = 2 ORDER BY sort_order ASC ');

        // Получение и возврат результатов
        $categoryList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['sort_order'] = $row['sort_order'];
            $categoryList[$i]['status'] = $row['status'];
            $i++;
        }
        return $categoryList;

    }

    public static function getCategoryText($category)
    {

        switch ($category) {
            case '12':
                return 'Верхняя одежда';
                break;
            case '13':
                return 'Рубашки/блузки/футболки';
                break;
            case '14':
                return 'Свитера/толстовки';
                break;
            case '15':
                return 'Платья/юбки';
                break;
            case '16':
                return 'Джинсы/шорты';
                break;
            case '17':
                return 'Аксессуары';
                break;
        }

    }

}