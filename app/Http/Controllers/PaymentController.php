<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('dashboard.payment.index', [
            'title' => 'Payments',
            'desc' => 'List of payments available in the system.',
        ]);
    }
}
