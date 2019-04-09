<?php
/**
 * Created by PhpStorm.
 * User: AGEGG
 * Date: 2019/4/5
 * Time: 15:35
 */

namespace app\api\validate;


class Count extends BaseValidate
{
    protected $rule = [
        'count' => 'isPostiveInteger|between:1,15'
    ];

}