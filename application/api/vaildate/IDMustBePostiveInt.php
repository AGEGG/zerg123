<?php
/**
 * Created by PhpStorm.
 * User: AGEGG
 * Date: 2019/3/19
 * Time: 20:55
 */

namespace app\api\vaildate;



class IDMustBePostiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPostiveInteger'
    ];

}