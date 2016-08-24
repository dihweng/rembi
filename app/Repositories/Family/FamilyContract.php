<?php

namespace App\Repositories\Family;

interface FamilyContract
{
    public function create($request);
    public function findById($familyid);
    public function findAll();
    public function edit($familyid, $request);
    public function remove($familyid);
}
