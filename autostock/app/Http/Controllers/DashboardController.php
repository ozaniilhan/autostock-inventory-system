<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
        $totalStock = Product::sum('stock_quantity');
        $outOfStock = Product::where('stock_quantity', 0)->count();

        $totalOrders = Order::count();
        $completedOrders = Order::where('status', 'Completed')->count();

        return view('dashboard.index', compact(
            'totalProducts', 'totalStock', 'outOfStock', 'totalOrders', 'completedOrders'
        ));
    }
}
