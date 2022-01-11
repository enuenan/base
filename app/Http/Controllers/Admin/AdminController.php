<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $order = 1;
        $food = 1;
        $merchandise = 1;
        $feedback = 1;
        return view('website.pages.admin.index', compact('order', 'food', 'merchandise', 'feedback'));
    }
}
