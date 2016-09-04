@extends('account.main')

@section('inventory_active')
    active
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Create New Inventory</h4>
                    </div>
                    <div class="content">
                        {{Form::open(['route' => 'register_inventory', 'method' => 'post'])}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="Name" name="name" value="{{old('name')}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Unit Price</label>
                                        <input type="text" class="form-control" placeholder="Unit Price" name="unit_price" value="{{old('unit_price')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label>Department</label>
                                        <input type="text" class="form-control" placeholder="Department" name="department" value="{{old('department')}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label>Stock</label>
                                        <input type="text" class="form-control" placeholder="Stock" name="stock" value="{{old('stock')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label>Critical Level</label>
                                        <input type="text" class="form-control" placeholder="Critical Level" name="critical_level" value="{{old('critical_level')}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label>Manufacturer</label>
                                        <input type="text" class="form-control" placeholder="Manufacturer" name="manufacturer" value="{{old('manufaturer')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label>Manufacture Date</label>
                                        <input type="text" class="form-control" placeholder="Manufacture Date" name="manufacture_date" value="{{old('manufacture_date')}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label>Expiry Date</label>
                                        <input type="text" class="form-control" placeholder="Expiry Date" name="expiry_date" value="{{old('expiry_date')}}">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Register Family</button>
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
