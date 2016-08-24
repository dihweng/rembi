<?php

namespace App\Repositories\Corporate;

interface CorporateContract
{
    public function create($request);
    public function edit($corporateid, $request);
    public function remove($coporateid);
    public function findById($corporateid);
    public function findAll();
}
