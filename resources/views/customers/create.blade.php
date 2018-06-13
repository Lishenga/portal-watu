

@extends('layouts.master')
@section('title')
    Customers
@stop
@section('content')
      
            <div class="container">
                
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-15">
                            <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light"
                                    data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i
                                    class="fa fa-cog"></i></span></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>

                        </div>
                        <h4 class="page-title">Customers</h4>
                    </div>
                </div>

                @include('layouts.alerts')
                <form method="POST" action="{{ url('/customers/create') }}">
                <div class="row">
                   
                    {{ csrf_field() }}
                    <div class="col-md-6">
                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"  name="fname" placeholder="First Name">
                            <small class="text-muted">
                               
                            </small>
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">Other Names</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"  name="lname" placeholder="Last Name">
                            <small class="text-muted">
                                
                            </small>
                        </fieldset>
                    </div>

                     <div class="col-md-6">
                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" placeholder="First Name">
                            <small class="text-muted">
                               
                            </small>
                        </fieldset>
                    </div>

                     <div class="col-md-6">
                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">Phone number</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="254" name="msisdn">
                            <small class="text-muted">
                              
                            </small>
                        </fieldset>
                    </div>
                    
                    <button type="submit" class="btn btn-block  btn-custom waves-effect waves-light active">Save</button>
                    
                  
                </div>
                </form>


        </div> <!-- container -->
@stop