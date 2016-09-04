<?php

namespace App\Repositories\Patient;

interface PatientContract
{
    public function create($request);
    public function edit($patientid, $request);
    public function remove($patientid);
    public function findById($patientid);
    public function findAll();
    public function searchPatient($request);
}
