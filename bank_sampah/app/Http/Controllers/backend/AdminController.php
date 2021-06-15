<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.layouts.home');
    }

    public function user()
    {
        return view('backend.layouts.user');
    }
    public function userform()
    {
        return view('backend.layouts.userform');
    }
    public function adminlist()
    {
        return view('backend.layouts.adminlist');
    }
}
