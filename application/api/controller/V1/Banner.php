<?php
/**
 * Created by PhpStorm.
 * User: AGEGG-WORK
 * Date: 2019/3/19
 * Time: 12:20
 */

namespace app\api\controller\V1;

use app\api\vaildate\IDMustBePostiveInt;
use app\api\vaildate\TestVaildate;
use think\Validate;

class Banner
{
    /**
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @id banner的id号
     *
     */
    public function getBanner($id)
    {
//        return 1;
        (new IDMustBePostiveInt())->goCheck();
        $c =1;

    }

}