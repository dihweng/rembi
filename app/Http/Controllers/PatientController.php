<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;

use App\Repositories\Patient\PatientContract;

class PatientController extends Controller
{
    protected $repo;
    public function __construct(PatientContract $patientContract) {
        $this->repo = $patientContract;
    }

    public function index() {
        $patients = $this->repo->findAll();
        return view('patient.index', ['patients', $patients]);
    }

    public function show() {
        return view('patient.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'dob_year' => 'required',
            'dob_month' => 'required',
            'dob_day' => 'required',
            'sex' => 'required',
            'tribe' => 'required',
            'religion' => 'required',
            'occupation' => 'required',
            'martial_status' => 'required',
            'address' => 'required',
            'next_of_kin' => 'required',
            'patient_photo' => 'required',
        ]);

        if ($request->hasFile('patient_photo')) {
            if ($request->file('patient_photo')->isValid()) {
                $patient = $this->repo->create($request);
                if ($patient->id) {
                    return back()
                        ->with('success', 'Patient successfully registered.');
                } else {
                    return back()
                        ->withInput()
                        ->with('error', 'There was a problem registering the Patient. Try again');
                }
            } else {
                return back()
                    ->withInput()
                    ->with('error', 'The Patient Photo you selected is Invalid. Try again');
            }
        } else {
            return back()
                ->withInput()
                ->with('error', 'Select a Patient Photo and try again');
        }
    }

    public function remove() {
        // Ajax
    }

    public function showEdit($id) {
        $patient = $this->repo->findById($id);
        return view('patient.edit', ['patient', $patient]);
    }

    public function edit(Request $request, $id) {

    }
}
