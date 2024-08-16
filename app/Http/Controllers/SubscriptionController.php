<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index()
    {
        $subscriptions = Subscription::with('customer', 'product')->get();
        return view('dashboard.subscriptions.index', compact('subscriptions'));
    }

    public function create()
    {
        $customers = Customer::all();
        $products = Product::all();
        return view('dashboard.subscriptions.create', compact('customers', 'products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'product_id' => 'required|exists:products,id',
            'status' => 'string',
        ]);

        Subscription::create($request->all());

        return redirect()->route('subscriptions.index')->with('success', 'Subscription created successfully.');
    }

    public function show(Subscription $subscription)
    {
        return view('subscriptions.show', compact('subscription'));
    }

    public function edit(Subscription $subscription)
    {
        $customers = Customer::all();
        $products = Product::all();
        return view('subscriptions.edit', compact('subscription', 'customers', 'products'));
    }

    public function update(Request $request, Subscription $subscription)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'product_id' => 'required|exists:products,id',
            'subscription_start' => 'nullable|date',
            'subscription_end' => 'nullable|date',
            'status' => 'required|string',
        ]);

        $subscription->update($request->all());

        return redirect()->route('subscriptions.index')->with('success', 'Subscription updated successfully.');
    }

    public function destroy(Subscription $subscription)
    {
        $subscription->delete();
        return redirect()->route('subscriptions.index')->with('success', 'Subscription deleted successfully.');
    }
}
