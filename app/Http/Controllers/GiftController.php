<?php

namespace App\Http\Controllers;
use App\Gift;
use Illuminate\Http\Request;

class GiftController extends Controller
{
    //
    public function index(Gift $gift){
        $gifts = Gift::all();
        return view('index', compact('gifts'));
    }
}
