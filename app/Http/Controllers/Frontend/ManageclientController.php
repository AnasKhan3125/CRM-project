<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageclientController extends Controller
{
    public function index()
    {
        return view('manageclient');
    }
}
