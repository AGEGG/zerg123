<?php
/**
 * Created by PhpStorm.
 * User: AGEGG
 * Date: 2019/4/7
 * Time: 10:55
 */

namespace app\api\model;


class User extends BaseModel
{
    public function address()
    {
        return $this->hasOne('UserAddress', 'user_id', 'id');
    }

    public static function getByOpenID($openid)
    {
        $user = self::where('openid','=',$openid)->find();
        return $user;
    }




}