<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use App\Models\InventoryCategory;
use App\Models\Transaction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard.home.index', [
            'title' => 'Beranda',
            'inventoryCount' => Inventory::count(),
            'categoryCount' => InventoryCategory::count(),
            'stockCount' => Inventory::sum('stock'),
            'transactionCount' => Transaction::count(),
            'transactionInCount' => Transaction::where('type', 'Masuk')->count(),
            'transactionOutCount' => Transaction::where('type', 'Keluar')->count(),
        ]);
    }
}
