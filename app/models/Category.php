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

}