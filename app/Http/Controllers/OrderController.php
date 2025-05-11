<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

use App\Models\Order;
use Illuminate\Http\Request;

use App\Models\Pizza;
use App\Models\Topping;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('orders.index', [
            'orders' => Order::where('user_id', Auth::id())->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('orders.create', [
            'pizzas' => Pizza::get(),
            'toppings' => Topping::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'pizzas' => 'required|array',
            'method' => 'required|string',
        ]);

        $pizzas = collect($validated['pizzas']);
        $pizza_ids = collect($validated['pizzas'])->keys();

        $totalPrice = Pizza::WhereIn('id', $pizza_ids)->sum('price');

        if ($validated['method'] == 'delivery')
        {
            $totalPrice += 5;
        }

        $order = Order::create([
            'user_id' => Auth::id(),
            'total_price' => $totalPrice,
        ]);

        $order->pizza_id()->attach($pizza_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
