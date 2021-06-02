<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeruController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('ru.home', [
            'user' => $user,
                                  ]);
    }
    public function kompanii(){
        $user = Auth::user();
        return view('ru.kompanii', [
            'user' => $user,
                                  ]);
    }
    public function rabota(){
        $user = Auth::user();
        return view('ru.rabota', [
            'user' => $user,
                                  ]);
    }
    public function vakansii(){
        $user = Auth::user();
        return view('ru.vakansii', [
            'user' => $user,
                                  ]);
    }
    public function izgotovleniya(){
        $user = Auth::user();
        return view('ru.izgotovleniya', [
            'user' => $user,
                                  ]);
    }
    public function nashiraboty(){
        $user = Auth::user();
        return view('ru.nashi-raboty', [
            'user' => $user,
                                  ]);
    }
    
    public function rabotodatelya(){
        $user = Auth::user();
        return view('ru.rabotodatelya', [
            'user' => $user,
                                  ]);
    }
    public function novosti(){
        $user = Auth::user();
        return view('ru.novosti', [
            'user' => $user,
                                  ]);
    }
    public function otzyvy(){
        $user = Auth::user();
        return view('ru.otzyvy', [
            'user' => $user,
                                  ]);
    }
    public function kontakty(){
        $user = Auth::user();
        return view('ru.kontakty', [
            'user' => $user,
                                  ]);
    }
    public function politika(){
        $user = Auth::user();
        return view('ru.politika-konfidenczialnosti', [
            'user' => $user,
                                  ]);
    }
    public function youtube(){
        $user = Auth::user();
        return view('ru.youtube', [
            'user' => $user,
                                  ]);
    }
    
   
}
