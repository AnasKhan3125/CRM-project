<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userhomeController extends Controller
{
    public function index()
    {
        return view('user.userhome');
    }
}
