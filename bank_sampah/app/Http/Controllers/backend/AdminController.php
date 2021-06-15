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
    public function adminform()
    {
        return view('backend.layouts.adminform');
    }
    public function adminlist()
    {
        return view('backend.layouts.adminlist');
    }
    public function transaksi()
    {
        return view('backend.layouts.transaksi');
    }
}
