<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInventoryRequest;
use App\Models\Inventory;
use App\Models\InventoryCategory;

class InventoryController extends Controller
{
    public function index()
    {
        return view('dashboard.inventory.index', [
            'title' => 'Barang',
            'inventories' => Inventory::options(request(Inventory::$allowedParams))
                ->paginate($this->validateAndGetLimit(request('limit'), 10)),
            'categories' => InventoryCategory::all(),
            'sortables' => Inventory::$sortables,
            'allowedParams' => Inventory::$allowedParams
        ]);
    }

    public function store(StoreInventoryRequest $request)
    {
        Inventory::create($request->validated());
        return redirect()->back()->with('success', 'Barang berhasil ditambahkan');
    }

    public function edit(Inventory $inventory)
    {
        return view('dashboard.inventory.edit', [
            'title' => 'Ubah Barang',
            'inventory' => $inventory,
            'categories' => InventoryCategory::all(),
        ]);
    }

    public function update(StoreInventoryRequest $request, Inventory $inventory)
    {
        $inventory->update($request->validated());
        return redirect()->route('dashboard.inventories.index')->with('success', 'Barang berhasil diperbarui');
    }

    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect()->back()->with('success', 'Barang berhasil dihapus');
    }
}
