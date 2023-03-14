<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $travels = Travel::orderBy('created_at', 'desc')->limit(6)->get();
        $travelsCount = Travel::count();

        return view('home', compact('travels', 'travelsCount'));
    }
}
