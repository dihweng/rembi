@extends('frontdesk.main')

@section('reg_family_active')
    active
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Family Details</h4>
                    </div>
                      <div class="content">
                                 {!! Form::open(array('action' => 'FamilyController@index', 'method' => 'GET')) !!}
                          <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>HMO Plan</th>
                                            <th>HMO Rate</th>
                                            <th>HMO Expiry</th>
                                            
                                        </tr>
                                    </thead>
                                    <?php $a=0; ?>
                                    @foreach ($secs as $sec)
                                    <?php $a++ ?>
                                    <tbody>
                                        <tr class="success">
                                            <td> {{$a}} </td>
                                            <td> {{$sec->name}} </td>
                                            <td> {{$sec->address}} </td>
                                            <td> {{$sec->hmo_plan}} </td>
                                            <td> {{$sec->hmo_rate}} </td>
                                            <td> {{$sec->hmo_expiry}} </td>
                                            <td>
                                                <!--<a class="btn btn-primary" href="{{ 'editpost/' . $sec->id }}">Edit</a>-->
                                            </td>
                                        
                                            <td>
                                                <!--{!! Form::open(array('url' => '/post/deletepost/'.$sec->id, 'class'=>'form', 'method' => 'GET')) !!}-->
                                                <!--<input type="hidden" name="id" value="{{$sec->id}}"/>-->
                                                <!--{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}-->
                                                <!--{!! Form::close() !!}-->
                                            </td>
                                        </tr>
                                    </tbody>
                                     @endforeach
                                      
                                    
                                </table>
                                 <!--{!! Form::open(array('action' => 'PostController@addPost', 'method' => 'GET')) !!}-->
                                 <!--{!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}-->
                                 </div>
                                     
                                 </div>
                                 {!! Form::close() !!}
         
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div> 
@stop