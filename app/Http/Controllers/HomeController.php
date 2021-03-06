<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
  
        public function index(){
            $user = Auth::user();
            return view('admin.index', [
                'user' => $user,
                                      ]);
        }

    public function indexadmin()
    {
        $user = Auth::user();
        return view('admin.index', [
            'user' => $user,
                                  ]);
    }
}

