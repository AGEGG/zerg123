<?php


namespace app\api\controller\V1;


use app\api\validate\AddressNew;
use app\api\service\Token as TokenService;
use app\api\model\User as UserModel;
use app\lib\exception\SuccessMessage;
use app\lib\exception\UserException;

class Address
{
    public function createOrUpdateAddress()
    {
        $validate = new AddressNew();
        $validate->goCheck();
        $uid = TokenService::getCurrentUid();
        $user = UserModel::get($uid);

        $dataArry = $validate->getDataByRule(input('post.'));

        if(!$user) {
            throw new UserException();
        }
        $userAddress = $user->address;
        if(!$userAddress) {
            $user->address()->save($dataArry);
        } else {
            $user->address->save($dataArry);
        }
        return new SuccessMessage();
    }

}