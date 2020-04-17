<?php

namespace App\models;

use App\components\Db;
use PDO;


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

    public static function createCategory($name, $gender, $sort_order, $status)
    {

        $db = Db::getConnection();

        $sql = 'INSERT INTO category (name, gender, sort_order, status) '
                . 'VALUES (:name, :gender, :sort_order, :status)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':gender', $gender, PDO::PARAM_STR);
        $result->bindParam(':sort_order', $sort_order, PDO::PARAM_STR);
        $result->bindParam(':status', $status, PDO::PARAM_STR);

        return $result->execute();

    }

    public static function updateCategoryById($id, $name, $gender, $sort_order, $status)
    {

        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса в БД
        $sql = "UPDATE category
            SET
                name = :name,
                gender = :gender,
                sort_order = :sort_order,
                status = :status
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':gender', $gender, PDO::PARAM_STR);
        $result->bindParam(':sort_order', $sort_order, PDO::PARAM_STR);
        $result->bindParam(':status', $status, PDO::PARAM_STR);
        return $result->execute();

    }

    public static function deleteCategoryById($id)
    {

        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM category WHERE id = :id';

        // Получение и возврат результатов. Используеся подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();

    }

}