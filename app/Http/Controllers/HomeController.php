<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\IsAdmin;
Use Alert;

use App\Models\User;


class HomeController extends Controller
{



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware(['auth', IsAdmin::class]);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        {
            $user = auth::user();
            if ($user->is_admin == 1){
                return view('home');
            }else {
                return view('welcome');
            }
        }
    }
}
