<?php
/**
 * Created by PhpStorm.
 * User: AGEGG-WORK
 * Date: 2019/3/19
 * Time: 10:55
 */

namespace app\sample\controller;

use think\Request;
class Test
{
    public function hello(Request $request)
    {
//        $all = input('param.');
//        $all = input('post.name');
        $all = Request::instance()->param();
        $all = $request->param();
//        $all = Request::instance()->get();
//        $all = Request::instance()->route();
//        $all = Request::instance()->post();
        $name = $all['name'];
        $age = Request::instance()->param('age');
        echo '|';
        echo $name;
        echo '|';
        echo $age;
    }

}