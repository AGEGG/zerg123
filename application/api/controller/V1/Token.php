<?php
/**
 * Created by PhpStorm.
 * User: AGEGG
 * Date: 2019/4/7
 * Time: 10:00
 */

namespace app\api\controller\V1;


use app\api\service\UserToken;
use app\api\vaildate\TokenGet;

class Token
{
    public function getToken($code='')
    {
        (new TokenGet())->goCheck();
        $ut = new UserToken($code);
        $token = $ut->get();
        return [
            'token' => $token//不要以字符串返回给客户端
        ];
    }

}