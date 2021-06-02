<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeenController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('en.home', [
            'user' => $user,
                                  ]);
    }
    public function kompanii(){
        $user = Auth::user();
        return view('en.kompanii', [
            'user' => $user,
                                  ]);
    }
    public function rabota(){
        $user = Auth::user();
        return view('en.rabota', [
            'user' => $user,
                                  ]);
    }
    public function vakansii(){
        $user = Auth::user();
        return view('en.vakansii', [
            'user' => $user,
                                  ]);
    }
    public function izgotovleniya(){
        $user = Auth::user();
        return view('en.izgotovleniya', [
            'user' => $user,
                                  ]);
    }
    public function nashiraboty(){
        $user = Auth::user();
        return view('en.nashi-raboty', [
            'user' => $user,
                                  ]);
    }
    
    public function rabotodatelya(){
        $user = Auth::user();
        return view('en.rabotodatelya', [
            'user' => $user,
                                  ]);
    }
    public function novosti(){
        $user = Auth::user();
        return view('en.novosti', [
            'user' => $user,
                                  ]);
    }
    public function otzyvy(){
        $user = Auth::user();
        return view('en.otzyvy', [
            'user' => $user,
                                  ]);
    }
    public function kontakty(){
        $user = Auth::user();
        return view('en.kontakty', [
            'user' => $user,
                                  ]);
    }
    public function politika(){
        $user = Auth::user();
        return view('en.politika-konfidenczialnosti', [
            'user' => $user,
                                  ]);
    }
    public function youtube(){
        $user = Auth::user();
        return view('en.youtube', [
            'user' => $user,
                                  ]);
    }
}
