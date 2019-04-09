<?php
/**
 * Created by PhpStorm.
 * User: AGEGG-WORK
 * Date: 2019/4/9
 * Time: 17:02
 */

namespace app\lib\exception;


class UserException extends BaseException
{
    public $code = 404;
    public $msg = '用户不存在';
    public $errorCode = 60000;
}