<?php
/**
 * Created by PhpStorm.
 * User: AGEGG-WORK
 * Date: 2019/3/19
 * Time: 12:20
 */

namespace app\api\controller\V2;

use app\api\vaildate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;
use app\lib\exception\ParameterException;
use think\Exception;

class Banner
{

    public function getBanner()
    {
        return 'this is V2 version';

    }

}