<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddclientController extends Controller
{
    public function index()
    {
        return view('admin.addclient');
    }
}
