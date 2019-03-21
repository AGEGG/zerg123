<?php
/**
 * Created by PhpStorm.
 * User: AGEGG-WORK
 * Date: 2019/3/20
 * Time: 9:50
 */

namespace app\api\model;


use think\Db;

class Banner
{
    public static function getBannerByID($id) {
//        $result = Db::query('select * from banner_item where banner_id=?',[$id]);
        $result = Db::table('banner_item')
            ->where('banner_id','=',$id)
            ->select();
        return $result;
    }

}