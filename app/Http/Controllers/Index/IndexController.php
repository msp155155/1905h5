<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * 网址首页
     */
    public  function index()
    {
        return view('index.index');    
    }
}
