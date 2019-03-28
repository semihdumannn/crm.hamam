<?php

namespace App\Http\Controllers;

use App\Lib\Helper as Helper;

class WebBaseController extends Controller
{
    public  $helper ;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->helper = new Helper();

    }









}
