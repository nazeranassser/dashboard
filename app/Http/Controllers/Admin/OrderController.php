<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Display all orders
    public function index()
    {
        // Fetch all orders from the database
        $orders = Order::with('user')->get();
         

        // Return the view with the orders data
        return view('admin.orders.index', compact('orders'));
    }
}

