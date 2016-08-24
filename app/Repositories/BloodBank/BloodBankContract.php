<?php

namespace App\Repositories\BloodBank;

interface BloodBankContract
{
    public function create($request);
    public function edit($bloodbankid, $request);
    public function remove($bloodbankid);
    public function findById($bloodbankid);
    public function findAll();
}
