<?php

namespace App\Repositories\InventoryItem

interface InventoryItemContract{
    public function create($request);
    public function edit($inventoryitemid, $request);
    public function findById($inventoryitemid);
    public function findAll();
    public function remove($inventoryitemid);
    public function findByDepartment($department);
    public function setCriticalLevel($inventoryitemid, $request);
}