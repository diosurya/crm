<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::with(['lead', 'subscriptions.product'])->get();
        return view('dashboard.customers.index', compact('customers'));
    }
}
