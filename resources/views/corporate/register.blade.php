@extends('frontdesk.main')

@section('reg_corporate_active')
    active
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Corporate Details</h4>
                    </div>
                    <div class="content">
                        {{Form::open(['route' => 'store_corporate', 'method' => 'post'])}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="Name" name="name" value="{{old('name')}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" placeholder="Address" name="address" value="{{old('address')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>HMO Plan</label>
                                        <input type="text" class="form-control" placeholder="HMO Plan" name="hmo_plan" value="{{old('hmo_plan')}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>HMO Rate</label>
                                        <input type="text" class="form-control" placeholder="HMO Rate" name="hmo_rate" value="{{old('hmo_rate')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>HMO Expiry</label>
                                        <input type="text" class="form-control" placeholder="HMO Expiry" name="hmo_expiry" value="{{old('hmo_expiry')}}">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Register Corporate</button>
                            <div class="clearfix"></div>
                        </form>
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
