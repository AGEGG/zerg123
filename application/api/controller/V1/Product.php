<?php
/**
 * Created by PhpStorm.
 * User: AGEGG
 * Date: 2019/4/5
 * Time: 15:32
 */

namespace app\api\controller\V1;


use app\api\vaildate\Count;
use app\api\model\Product as ProductModel;
use app\api\vaildate\IDMustBePostiveInt;
use app\lib\exception\ProduxtException;

class Product
{
    public function getRecent($count=15)
    {
        (new Count())->goCheck();
        $products = ProductModel::getMostRecent($count);
        if($products->isEmpty()) {
            throw new ProduxtException();
        }
        $products = $products->hidden(['summary']);
        return $products;
    }

    public function getAllInCategory($id)
    {
        (new IDMustBePostiveInt())->goCheck();
        $products = ProductModel::getProductByCategoryID($id);
        if($products->isEmpty()) {
            throw new ProduxtException();
        }
        $products = $products->hidden(['summary']);
        return $products;
    }



}