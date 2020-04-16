<?php

namespace App\models;

use App\components\Db;
use PDO;

class Product
{

    const SHOW_BY_DEFAULT = 9;

    /**
     * Returns an array of products
     */
    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);

        $db = Db::getConnection();

        $productList = array();

        $result = $db->query('SELECT * FROM products '
            . 'WHERE status = "1" '
            . 'ORDER BY RAND() '
            . 'LIMIT ' . $count);

        $i = 0;
        while ($row = $result->fetch()) {
            $productList[$i]['id'] = $row['id'];
            $productList[$i]['name'] = $row['name'];
            $productList[$i]['image'] = $row['image'];
            $productList[$i]['size'] = $row['size'];
            $productList[$i]['color'] = $row['color'];
            $i++;
        }

        return $productList;
    }

    /**
     * Returns an array of products
     */
    public static function getMenProductsListByCategory($categoryId = false)
    {
        if ($categoryId) {

            $db = Db::getConnection();
            $products = array();
            $result = $db->query("SELECT * FROM products "
                . "WHERE status = '1' AND category_id = '$categoryId'  AND gender = '1'"
                . "ORDER BY id DESC "
                . "LIMIT ".self::SHOW_BY_DEFAULT);

            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['image'] = $row['image'];
                $products[$i]['size'] = $row['size'];
                $products[$i]['color'] = $row['color'];
                $i++;
            }

            return $products;
        }
    }

    public static function getWomenProductsListByCategory($categoryId = false)
    {
        if ($categoryId) {

            $db = Db::getConnection();
            $products = array();
            $result = $db->query("SELECT * FROM products "
                . "WHERE status = '1' AND category_id = '$categoryId' AND gender = '0'"
                . "ORDER BY id DESC "
                . "LIMIT ".self::SHOW_BY_DEFAULT);

            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['image'] = $row['image'];
                $products[$i]['size'] = $row['size'];
                $products[$i]['color'] = $row['color'];
                $i++;
            }

            return $products;
        }
    }


    public static function getAllProductsListByCategory($categoryId = false)
    {
        if ($categoryId) {

            $db = Db::getConnection();
            $products = array();
            $result = $db->query("SELECT * FROM products "
                . "WHERE status = '1' AND category_all_id = '$categoryId' "
                . "ORDER BY RAND() "
                . "LIMIT ".self::SHOW_BY_DEFAULT);

            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['image'] = $row['image'];
                $products[$i]['size'] = $row['size'];
                $products[$i]['color'] = $row['color'];
                $i++;
            }

            return $products;
        }
    }

    public static function getProductsByIds($idsArray)
    {

        $products = array();

        $db = Db::getConnection();

        $idsString = implode(',', $idsArray);

        $sql = "SELECT * FROM products WHERE status = 1 AND id IN ($idsString)";

        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $i = 0;
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['image'] = $row['image'];
            $products[$i]['size'] = $row['size'];
            $products[$i]['color'] = $row['color'];
            $i++;
        }

        return $products;

    }


    /**
     * Return product item by id
     * @param integer $id
     */
    public static function getProductById($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM products WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }

    /**
     * Returns total products
     */
    public static function getTotalProductsInCategory($categoryId)
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT count(id) AS count FROM products '
            . 'WHERE status="1" AND category_all_id ="'.$categoryId.'"');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];
    }

    public static function getProductsList()
    {

        $db = Db::getConnection();

        $result = $db->query('SELECT * FROM products ORDER BY id ASC');
        $productsList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['gender'] = $row['gender'];
            $productsList[$i]['category_all_id'] = $row['category_all_id'];
            $productsList[$i]['size'] = $row['size'];
            $productsList[$i]['color'] = $row['color'];
            $i++;
        }

        return $productsList;
    }

    public static function getProductCategory()
    {

        $product = self::getProductsList();

    }

}