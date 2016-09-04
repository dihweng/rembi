<?php

namespace App\Repositories\Service;

interface ServiceContract
{
    public function create($request);
    public function edit($serviceid, $request);
    public function remove($serviceid);
    public function findById($serviceid);
    public function findAll();
}
