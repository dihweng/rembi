<?php

namespace App\Repositories\InventoryItem;

use App\Repositories\InventoryItem\InventoryItemcontract;

use App\InventoryItem;

class EloquentInventoryItemRepository implements InventoryItemContract
{
    public function create($request) {
        $inventoryItem = new InventoryItem();
        $inventoryItem->setInventoryItemProperties($inventoryItem, $request);
        $inventoryItem->save();
        return $inventoryItem;
    }

    public function edit($inventoryitemid, $request) {
        $inventoryItem = $this->findById($inventoryitemid);
        $inventoryItem->setInventoryItemProperties($inventoryItem, $request);
        $inventoryItem->save();
        return $inventoryItem;
    }

    public function findByDepartment($department) {
        return InventoryItem::where('department', $department)->get();
    }

    public function setCriticalLevel($inventoryitemid, $request) {
        $inventoryItem = $this->findById($inventoryitemid);
        $inventoryItem->critical_level = $request->critical_level;
        $inventoryItem->save();
        return $inventoryItem;
    }

    public function findById($inventoryitemid) {
        return InventoryItem::find($inventoryitemid);
    }

    public function findAll() {
         return InventoryItem::all();
    }

    public function remove($inventoryitemid) {
        $inventoryItem = findById($inventoryitemid);
		$inventoryItem->delete();
    }

    private function setInventoryItemProperties($inventoryItem, $request) {
        $inventoryItem->name = $request->name;
        $inventoryItem->unit_price = $request->unit_price;
        $inventoryItem->department = $request->department;
        $inventoryItem->stock = $request->stock;
        $inventoryItem->critical_level = $request->critical_level;
        $inventoryItem->manufaturer = $request->manufacturer;
        $inventoryItem->manufacture_date = $request->manufacture_date;
        $inventoryItem->expiry_date = $request->expiry_date;
    }
}
