<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\Inventory;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        return view('dashboard.transaction.index', [
            'title' => 'Transaksi',
            'transactions' => Transaction::options(request(Transaction::$allowedParams))
                ->with('inventory')
                ->paginate($this->validateAndGetLimit(request('limit'), 10)),
            'inventories' => Inventory::all(),
            'sortables' => Transaction::$sortables,
            'allowedParams' => Transaction::$allowedParams,
            'types' => Transaction::$types,
        ]);
    }

    public function store(StoreTransactionRequest $request)
    {
        $data = $request->validated();

        if (!$this->checkStock($data['inventory_id'], $data['qty'], $data['type'])) {
            return redirect()->back()->withErrors(['qty' => 'Stok tidak mencukupi'])->withInput();
        }

        $this->updateInventoryStock($data['inventory_id'], $data['qty'], $data['type']);
        Transaction::create($data);

        return redirect()->back()->with('success', 'Transaksi berhasil ditambahkan');
    }

    public function edit(Transaction $transaction)
    {
        return view('dashboard.transaction.edit', [
            'title' => 'Ubah Transaksi',
            'transaction' => $transaction,
            'inventories' => Inventory::all(),
            'types' => Transaction::$types,
        ]);
    }

    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        $data = $request->validated();
        
        $currentStock = $transaction->inventory->stock;
        $comparisonStock = 0;
        
        if ($transaction->type == 'Keluar') {
            $comparisonStock = $currentStock + $transaction->qty;
        } else {
            $comparisonStock = $currentStock - $transaction->qty;
        }

        if ($data['type'] == 'Keluar' && $comparisonStock < $data['qty']) {
            return redirect()->back()->withErrors(['qty' => 'Stok tidak mencukupi'])->withInput();
        } 

        $this->updateInventoryStock($transaction->inventory_id, $transaction->qty, $transaction->type === 'Masuk' ? 'Keluar' : 'Masuk');
        $this->updateInventoryStock($transaction->inventory_id, $data['qty'], $data['type']);

        $transaction->update($data);

        return redirect()->route('dashboard.transactions.index')->with('success', 'Transaksi berhasil diperbarui');
    }
    
    public function destroy(Transaction $transaction)
    {
        $this->updateInventoryStock($transaction->inventory_id, $transaction->qty, $transaction->type == 'Masuk' ? 'Keluar' : 'Masuk');
        $transaction->delete();

        return redirect()->back()->with('success', 'Transaksi berhasil dihapus');
    }

    private function updateInventoryStock($inventoryId, $quantity, $type)
    {
        $inventory = Inventory::find($inventoryId);

        if ($type === 'Masuk') {
            $inventory->stock += $quantity;
        } else {
            $inventory->stock -= $quantity;
        }

        $inventory->save();
    }

    private function checkStock($inventoryId, $quantity, $type)
    {
        $inventory = Inventory::find($inventoryId);

        if ($type === 'Keluar' && $inventory->stock < $quantity) {
            return false;
        }

        return true;
    }
}
