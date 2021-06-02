<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomedeController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('de.home', [
            'user' => $user,
                                  ]);
    }
    public function kompanii(){
        $user = Auth::user();
        return view('de.kompanii', [
            'user' => $user,
                                  ]);
    }
    public function rabota(){
        $user = Auth::user();
        return view('de.rabota', [
            'user' => $user,
                                  ]);
    }
    public function vakansii(){
        $user = Auth::user();
        return view('de.vakansii', [
            'user' => $user,
                                  ]);
    }
    public function izgotovleniya(){
        $user = Auth::user();
        return view('de.izgotovleniya', [
            'user' => $user,
                                  ]);
    }
    public function nashiraboty(){
        $user = Auth::user();
        return view('de.nashi-raboty', [
            'user' => $user,
                                  ]);
    }
    
    public function rabotodatelya(){
        $user = Auth::user();
        return view('de.rabotodatelya', [
            'user' => $user,
                                  ]);
    }
    public function novosti(){
        $user = Auth::user();
        return view('de.novosti', [
            'user' => $user,
                                  ]);
    }
    public function otzyvy(){
        $user = Auth::user();
        return view('de.otzyvy', [
            'user' => $user,
                                  ]);
    }
    public function kontakty(){
        $user = Auth::user();
        return view('de.kontakty', [
            'user' => $user,
                                  ]);
    }
    public function politika(){
        $user = Auth::user();
        return view('de.politika-konfidenczialnosti', [
            'user' => $user,
                                  ]);
    }
    public function youtube(){
        $user = Auth::user();
        return view('de.youtube', [
            'user' => $user,
                                  ]);
    }
}
