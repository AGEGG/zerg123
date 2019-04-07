<?php
/**
 * Created by PhpStorm.
 * User: AGEGG
 * Date: 2019/4/7
 * Time: 19:08
 */

namespace app\api\service;



class Token
{
    public static function generateToken()
    {
        //32个字符组成一组随机字符串
        $randChars = getRandChar(32);
        //自定义规则加密
        $timestamp = $_SERVER['REQUEST_TIME_FLOAT'];
        //salt 盐
        $salt = config('secure.token_salt');
        return md5($randChars.$timestamp.$salt);
    }


}