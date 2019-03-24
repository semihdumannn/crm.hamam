<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\WebBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends WebBaseController
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }
}
