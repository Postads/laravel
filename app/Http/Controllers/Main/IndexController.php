<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\BaseController;


class IndexController extends BaseController
{

    public function index()
    {


        return view('main.index');
    }


}
