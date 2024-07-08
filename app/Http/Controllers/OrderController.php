<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('dashboard.order.index', [
            'title' => 'Orders',
            'desc' => 'List of orders available in the system.',
        ]);
    }
}
