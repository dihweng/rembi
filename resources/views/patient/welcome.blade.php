@extends('frontdesk.main')

@section('wel_patient_active')
    active
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Patient Details</h4>
                    </div>
                    <div class="content">
                        {{Form::open(array('route' => 'found_patient', 'method' => 'POST'))}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Search For Patient</label>
                                        <input type="seacrh" class="form-control" placeholder="Enter Patient ID" name="hospital_id" value="{{old('hospital_id')}}">
                                    </div>
                                </div>
                            </div>
                            <div>
                              <button type="submit" class="btn btn-info btn-fill pull-right">Search Patient</button>
                            </div>
                            <div class="clearfix"></div>
                        {{Form::close()}}
                        
                        @if (session('patient'))
                            <p>{{session('patient')->full_name}}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                @include('layouts.sessions')
                @include('layouts.errors')
            </div>
        </div>
    </div>
@stop
