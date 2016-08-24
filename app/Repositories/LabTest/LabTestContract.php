<?php

namespace App\Repositories\LabTest;

interface LabTestContract
{
    public function create($request);
    public function findById($labtestid);
    public function findAll();
}
