<?php

namespace App\Repositories\Patient;

use App\Repositories\Patient\PatientContract;

use App\Patient;
use DateTime;

class EloquentPatientRepository implements PatientContract
{
    
    private function generateHospitalId() {
        $patients = Patient::all();
        $count = $patients->count();
        $count++;
        $hospitalid  = "rembi" . $count;
        return $hospitalid;
    }
    
    public function create($request) {
        $patient = new Patient();
        $this->setPatientProperties($patient, $request);
        $patient->save();
        return $patient;
    }
    
    public function edit($patientid, $request) {
        $patient = $this->findById($patientid);
        $this->setPatientProperties($patient, $request);
        $patient->save();
        return $patient;
    }
    
    public function remove($patientid) {
        $patient = $this->findById($patientid);
        return $patient->delete();
    }
    
    public function findById($patientid) {
        return Patient::find($patientid);
    }
    
    public function findAll() {
        return Patient::all();
    }
    
    private function setPatientProperties($patient, $request) {
        $patient->first_name = $request->first_name;
        $patient->last_name = $request->last_name;
        $patient->full_name = $request->first_name . ' ' . $request->last_name;
        $patient->dob_year = $request->dob_year;
        $patient->dob_month = $request->dob_month;
        $patient->dob_day = $request->dob_day;
        $patient->sex = $request->sex;
        $patient->tribe = $request->tribe;
        $patient->religion = $request->religion;
        $patient->occupation = $request->occupation;
        $patient->marital_status = $request->marital_status;
        $patient->address = $request->address;
        $patient->next_of_kin = $request->next_of_kin;
        $patient->hospital_id = $this->generateHospitalId();
        $patient->age = $this->calculateAge(
        $request->dob_year,$request->dob_month,$request->dob_day);
        
        $destination = 'uploads/patients';
        $extension = $request->file('patient_photo')->getClientOriginalExtension();
        $fileName = rand(1111111, 9999999).'.'.$extension;
        $request->file('patient_photo')->move($destination, $fileName);
        
        $patient->patient_photo_path = '/'.$destination.'/'.$fileName;
    }
    
    private function calculateAge($day, $month, $year) {
        $from = new DateTime($year . '-' . $month . '-' . $day);
        $to   = new DateTime('today');
        return $from->diff($to)->y;
    }
    
    public function searchPatient($request)
    {
        $search = $request->hospital_id;
        $patient = Patient::where('hospital_id', $search)->first();
        return $patient;
    }
    
   
}
