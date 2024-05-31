<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InventoryCategoryController extends Controller
{
    public function index()
    {
        return view('dashboard.inventory-category.index', [
            'title' => 'Kategori Barang',
        ]);
    }
}
