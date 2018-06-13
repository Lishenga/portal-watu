

@extends('layouts.master')
@section('title')
    User
@stop
@section('content')
    <div class="container">
        
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">

                </div>
                <h4 class="page-title">Particular User</h4>
            </div>
        </div>

                @include('layouts.alerts')
            <div class="row">
  
               <div class="col-md-9">
                <form method="POST" action="{{ url('settings/users/update') }}">
                  <div class="row">
                   
                    {{ csrf_field() }}
                    <div class="col-md-6">
                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Full Names" value="{{$user->name}}">
                            <small class="text-muted">
                               
                            </small>
                        </fieldset>
                    </div>

                     <div class="col-md-6">
                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Address" name="email" value="{{$user->email}}">
                            <small class="text-muted">
                               
                            </small>
                        </fieldset>
                    </div>

                     <div class="col-md-6">
                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">Phone number</label>
                            <input type="number" class="form-control" placeholder="Phone Number" name="phone_number" value="{{$user->phone_number}}">
                            <small class="text-muted"> 
                            </small>
                        </fieldset>
                    </div>

                    <div class="col-md-6">

                        <fieldset class="form-group">

                        <label for="sell">Role<span class="text-danger">*</span></label>

                            <select class="form-control selectpicker" id="sell" multiple name="role[]" data-live-search="true">

                                @foreach($role as $roles)

                                <option value="{{$roles->id}}">{{$roles->name}}</option>

                                @endforeach

                            </select>
                            <small class="text-muted"> 
                            </small>
                        </fieldset>
                    </div>

                    <div class="col-md-6">
                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">New Password</label>
                            <input type="password" class="form-control" placeholder="New Password" name="new">
                            <small class="text-muted"> 
                            </small>
                        </fieldset>
                    </div>

                    <div class="col-md-6">
                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">Confirm New Password</label>
                            <input type="password" class="form-control" placeholder="Confirm New Password" name="confirm">
                            <small class="text-muted"> 
                            </small>
                        </fieldset>
                    </div>

                    <input type="hidden" name="id" value="{{$user->id}}">
                    
                    <button type="submit" class="btn btn-block  btn-custom waves-effect waves-light active">Save</button>
                    
                </div>
            </form>
        </div>


        </div>
               

    </div> <!-- container -->
@stop