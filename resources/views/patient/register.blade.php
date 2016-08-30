@extends('frontdesk.main')

@section('reg_patient_active')
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
                        {{Form::open(array('route' => 'patient_store', 'method' => 'POST'))}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" placeholder="First Name" name="first_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                                    </div>
                                </div>
                            </div>
                            Date Of Birth
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label> Year </label>
                                        <select class="form-control" name="dob_year">
                                            <option> 1990 </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label> Month </label>
                                        <select class="form-control" name="dob_month">
                                            <option> January </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label> Day </label>
                                        <select class="form-control" name="dob_day">
                                            <option> 1 </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    Sex
                                   <div class> 
                                       <label><input type="radio" value="male" name="sex">Male</label><br/>
                                       <label><input type="radio" value="female" name="sex">Female</label>
                                    </div>
                                </div>
                            </div>
                         <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Occupation</label>
                                       <input type="text" class="form-control" placeholder="Occupation" name="occupation">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Tribe</label>
                                       <input type="text" class="form-control" placeholder="Tribe" name="tribe">
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label> Marital Status </label>
                                  <select class="form-control" name="marital_status">
                                     <option value="single"> Single </option>
                                     <option value="married"> Married </option>
                                     <option value="divorced"> Divorced </option>
                                     <option value="widowed"> Widowed </option>
                                  </select>
                            </div>
                            <div class="col-md-6">
                                <label> Religion </label>
                                  <select class="form-control" name="religion">
                                     <option> Christianity </option>
                                     <option> Islam </option>
                                     <option> Others </option>
                                  </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label> Next Of Kin </label>
                                <input type="text" class="form-control" placeholder="Next Of Kin" name="next_of_kin">
                            </div>
                            <div class="col-md-6">
                                <label> Photo </label>
                                <input type="file" name="patient_photo" accept="image/*">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label> Address </label>
                                <input type="textarea" name="address" class="form-control"/>
                            </div>
                        </div>
                            <div>
                              <button type="submit" class="btn btn-info btn-fill pull-right">Register Patient</button>
                            </div>
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
