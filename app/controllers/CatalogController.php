<?php

use App\models\Category;
use App\models\Product;

class CatalogController
{

    public function actionIndex()
    {
        $categoriesWomen = array();
        $categoriesWomen = Category::getCategoriesWomen();

        $categoriesMen = array();
        $categoriesMen = Category::getCategoriesMen();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(60);

        require_once(ROOT . '/app/views/catalog/index.php');

        return true;
    }

    public function actionCategory($categoryId)
    {

        $categoriesWomen = array();
        $categoriesWomen = Category::getCategoriesWomen();

        $categoriesMen = array();
        $categoriesMen = Category::getCategoriesMen();

        $categoryProductsMen = array();
        $categoryProductsMen = Product::getMenProductsListByCategory($categoryId);

        $categoryProductsWomen = array();
        $categoryProductsWomen = Product::getWomenProductsListByCategory($categoryId);

        require_once(ROOT . '/app/views/catalog/category.php');

        return true;
    }

}