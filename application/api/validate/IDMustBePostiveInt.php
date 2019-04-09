<?php
/**
 * Created by PhpStorm.
 * User: AGEGG
 * Date: 2019/3/19
 * Time: 20:55
 */

namespace app\api\validate;



class IDMustBePostiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPostiveInteger'
    ];

    protected $message = [
        'id' => 'id必须是正整数'
    ];

}