<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = User::where('role', 'customer')->get();

        return view('dashboard.customer.index', [
            'title' => 'Customers',
            'desc' => 'List of customers registered in the system.',
            'customers' => $customers
        ]);
    }

    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect('/dashboard/customers')->with('success', 'User successfully deleted!');
    }
}
