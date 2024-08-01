<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Transaksi;
use App\Models\CartItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function checkout()
    {
        $user = auth()->user();
        if (!$user) {
            return redirect()->route('login')->with('error_message', 'Please login to proceed.');
        }

        $keranjangs = $user->keranjangs()->with('produk')->get();
        if ($keranjangs->isEmpty()) {
            return redirect()->route('keranjang')->with('error_message', 'Your cart is empty.');
        }

        $subTotal = $keranjangs->sum(function ($keranjang) {
            return $keranjang->quantity * $keranjang->product->price;
        });
        $total = $subTotal; // Include shipping or other fees as needed

        return view('cekout', compact('keranjangs', 'subTotal', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function placeOrder(Request $request)
    {
        $request->validate([
            'billing_address' => 'required|string',
            'order_notes' => 'nullable|string',
        ]);

        $user = auth()->user();
        if (!$user) {
            return redirect()->route('login')->with('error_message', 'Please login to proceed.');
        }

        $keranjangs = $user->keranjangs()->with('produk')->get();
        if ($keranjangs->isEmpty()) {
            return redirect()->route('keranjang')->with('error_message', 'Your cart is empty.');
        }

        DB::transaction(function () use ($request, $keranjangs) {
            $total = $keranjangs->sum(function ($keranjang) {
                return $keranjang->jumlah * $keranjang->product->harga;
            });

            $order = Order::create([
                'user_id' => auth()->user()->id,
                'billing_address' => $request->input('billing_address'),
                'order_notes' => $request->input('order_notes'),
                'total' => $total,
            ]);

            foreach ($keranjangs as $keranjang) {
                order_item::create([
                    'order_id' => $order->id,
                    'produk_id' => $keranjang->produk_id,
                    'jumlah' => $keranjang->jumlah,
                    'harga' => $keranjang->produk->harga,
                ]);
            }

            // Create the transaction record
            transaction::create([
                'order_id' => $order->id,
                'transaksi_id' => 'TXN' . strtoupper(uniqid()), // Replace with actual transaction ID from payment gateway
                'amount' => $total,
            ]);

            // Clear the user's cart
            auth()->user()->keranjangs()->delete();
        });

        return redirect()->route('done')->with('success_message', 'Your order has been placed successfully!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
