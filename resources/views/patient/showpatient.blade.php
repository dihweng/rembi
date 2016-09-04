@extends('frontdesk.main')

@section('reg_welpatient_active')
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
                         
                             {{$patient->id}}

                        
                   </div>
            <div class="col-md-4">
                @include('layouts.sessions')
                @include('layouts.errors')
            </div>
        </div>
    </div>
@stop