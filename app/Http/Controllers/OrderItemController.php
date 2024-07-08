<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function index()
    {
        return view('dashboard.orderItem.index', [
            'title' => 'Orders Item',
            'desc' => 'List of orders item available in the system.',
        ]);
    }
}
