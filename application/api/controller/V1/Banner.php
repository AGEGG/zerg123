<?php
/**
 * Created by PhpStorm.
 * User: AGEGG-WORK
 * Date: 2019/3/19
 * Time: 12:20
 */

namespace app\api\controller\V1;

use app\api\validate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;
use app\lib\exception\ParameterException;
use think\Exception;

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
        (new IDMustBePostiveInt())->goCheck();
        $banner = BannerModel::getBannerByID($id);
        if(!$banner) {
            throw new BannerMissException();
        }
        return $banner;

    }

}