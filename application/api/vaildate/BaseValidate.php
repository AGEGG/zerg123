<?php
/**
 * Created by PhpStorm.
 * User: AGEGG
 * Date: 2019/3/19
 * Time: 22:42
 */

namespace app\api\vaildate;


use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        //获取http传入参数
        //对这些参数校验
        $request = Request::instance();
        $params = $request->param();
        $result = $this->check($params);
        if(!$result) {
            $error = $this->error;
            throw new Exception($error);
        } else {
            return true;
        }

    }

}