<?php

namespace App\Repositories\Donor;

interface DonorContract
{
    public function create($request);
    public function edit($donorid, $request);
    public function remove($donorid);
    public function findById($donorid);
    public function findAll();
}
