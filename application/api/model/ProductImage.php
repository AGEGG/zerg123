<?php
/**
 * Created by PhpStorm.
 * User: AGEGG-WORK
 * Date: 2019/4/9
 * Time: 15:19
 */

namespace app\api\model;


class ProductImage extends BaseModel
{
    protected $hidden = ['img_id','delete_time','product_id'];

    public function imgUrl()
    {
        return $this->belongsTo('Image', 'img_id', 'id');
    }

}