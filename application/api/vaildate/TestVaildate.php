<?php
/**
 * Created by PhpStorm.
 * User: AGEGG-WORK
 * Date: 2019/3/19
 * Time: 17:00
 */

namespace app\api\vaildate;


use think\Validate;

class TestVaildate extends Validate
{
    protected $rule = [
        'name' => 'require|max:10',
        'email' => 'email'
    ];

}