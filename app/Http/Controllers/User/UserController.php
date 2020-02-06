<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\UserModel;

class UserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 注册页面
     */
    public function reg()
    {
        return view('user.reg');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 登陆页面
     */
    public function login()
    {
        return view('user.login');
    }
    /**
     * APP注册
     * @return bool|string
     */
    public function regDo()
    {
        //请求passport
        $url = 'http://laravel.1905.com/reg';
        $response = UserModel::curlPost($url,$_POST);
        if(json_decode($response,true)['msg'] == 'ok'){
            return  view('/user/login');
        }else{
            return $response;
        }
    }

    /**
     * APP 登录
     */
    public function loginDo()
    {
        //请求passport
        $url = 'http://laravel.1905.com/login';
        $response = UserModel::curlPost($url,$_POST);
        return $response;
    }
}
