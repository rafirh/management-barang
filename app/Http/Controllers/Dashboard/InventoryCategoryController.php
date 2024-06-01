<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInventoryCategoryRequest;
use App\Models\InventoryCategory;
use Illuminate\Http\Request;

class InventoryCategoryController extends Controller
{
    public function index()
    {
        return view('dashboard.inventory-category.index', [
            'title' => 'Kategori Barang',
            'categories' => InventoryCategory::options(request(InventoryCategory::$allowedParams))
                ->withCount('inventories')
                ->paginate($this->validateAndGetLimit(request('limit'), 10)),
            'sortables' => InventoryCategory::$sortables,
            'allowedParams' => InventoryCategory::$allowedParams
        ]);
    }

    public function store(StoreInventoryCategoryRequest $request)
    {
        InventoryCategory::create($request->validated());
        return redirect()->back()->with('success', 'Kategori barang berhasil ditambahkan');
    }

    public function edit(InventoryCategory $inventoryCategory)
    {
        return view('dashboard.inventory-category.edit', [
            'title' => 'Ubah Kategori Barang',
            'category' => $inventoryCategory,
        ]);
    }

    public function update(StoreInventoryCategoryRequest $request, InventoryCategory $inventoryCategory)
    {
        $inventoryCategory->update($request->validated());
        return redirect()->route('dashboard.inventory-categories.index')->with('success', 'Kategori barang berhasil diperbarui');
    }

    public function destroy(InventoryCategory $inventoryCategory)
    {
        $inventoryCategory->delete();
        return redirect()->back()->with('success', 'Kategori barang berhasil dihapus');
    }
}
