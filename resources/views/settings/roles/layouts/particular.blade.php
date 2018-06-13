

@extends('layouts.master')
@section('title')
    Role
@stop
@section('content')

@if(Auth::user()->hasPermission('VIEW_PARTICULAR_ROLE'))

    <div class="container">
        
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">

                </div>
                <h4 class="page-title">Particular Role</h4>
            </div>
        </div>

                @include('layouts.alerts')

            <div class="row">
  
               <div class="col-md-9">
                <form method="POST" action="{{ url('roles/update') }}">
                  <div class="row">
                   
                    {{ csrf_field() }}
                    <div class="col-md-6">
                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Role Name" value="{{$role->name}}">
                            <small class="text-muted">
                               
                            </small>
                        </fieldset>
                    </div>

                     <div class="col-md-6">
                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">Display Name</label>
                            <input type="text" class="form-control" placeholder="Display Name" name="display_name" value="{{$role->display_name}}">
                            <small class="text-muted">
                               
                            </small>
                        </fieldset>
                    </div>

                     <div class="col-md-6">
                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <input class="form-control" placeholder="Description" name="description" value="{{$role->description}}">
                            <small class="text-muted"> 
                            </small>
                        </fieldset>
                    </div>

                    <div class="col-md-6">

                        <fieldset class="form-group">

                        <label for="sell">Permission<span class="text-danger">*</span></label>

                            <select class="form-control selectpicker" id="sell" multiple name="permission_id[]" data-live-search="true">

                                @foreach($permission as $permissions)

                                <option value="{{$permissions->id}}">{{$permissions->name}}</option>

                                @endforeach

                            </select>
                            <small class="text-muted"> 
                            </small>
                        </fieldset>
                    </div>

                    <input type="hidden" name="id" value="{{$role->id}}">
                    
                    <button type="submit" style="margin-left: 400px; margin-top:40px" class="btn btn-custom waves-effect waves-light active">Save</button>
                    
                </div>
            </form>
        </div>


        </div>

        
        <div class="row">
                <h4 class="page-title" style="margin-top: 50px; margin-left: 450px;">Permissions For This Role</h4>
                    <div class="col-md-12">
                        <div class="card-box table-responsive">
                          
                            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Display Name</th>
                                    <th>Description</th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach($roleperm as $roleperms)

                                    @foreach($permission as $perms)

                                        @if($perms->id == $roleperms)
                                
                                            <tr>
                                                <td>{{ @$perms->name }}</td>
                                                <td>{{ @$perms->display_name }}</td>
                                                <td>{{ @$perms->description }}</td>
                                            </tr>

                                        @endif

                                    @endforeach

                                @endforeach


                                </tbody>
                            </table>    
                        </div>
                    </div>
                </div>
               

    </div> <!-- container -->

@else

<h4 style="text-align: center; margin-top: 200px">You're not permitted to view the content on this page</h4>

@endif
@stop