<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        return view('dashboard.inventory.index', [
            'title' => 'Barang',
            'inventories' => Inventory::options(request(Inventory::$allowedParams))
                ->paginate($this->validateAndGetLimit(request('limit'), 10)),
            'sortables' => Inventory::$sortables,
            'allowedParams' => Inventory::$allowedParams
        ]);
    }
}
