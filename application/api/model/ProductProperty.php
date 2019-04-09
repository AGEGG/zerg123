<?php
/**
 * Created by PhpStorm.
 * User: AGEGG-WORK
 * Date: 2019/4/9
 * Time: 15:19
 */

namespace app\api\model;


class ProductProperty extends BaseModel
{
    protected $hidden=['product_id', 'delete_time', 'id'];
}