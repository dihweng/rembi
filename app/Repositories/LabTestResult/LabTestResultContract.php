<?php

namespace App\Repositories\LabTestResult;

interface LabTestResultContract
{
    public function create($request);
    public function findById($labtestid);
    public function findAll();
}
