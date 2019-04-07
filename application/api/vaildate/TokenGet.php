<?php
/**
 * Created by PhpStorm.
 * User: AGEGG
 * Date: 2019/4/7
 * Time: 10:01
 */

namespace app\api\vaildate;


class TokenGet extends BaseValidate
{
    protected $rule = [
        'code' => 'require|isNotEmpty'
    ];

    protected $message =[
        'code' => '没有code，不能获取token'

    ];

}