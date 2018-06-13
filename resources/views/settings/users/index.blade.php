@extends('layouts.master')
@section('styles')
     <!-- DataTables -->
    <link href="{{asset('admin/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
    <link href="{{asset('admin/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@stop
@section('title')
    Users
@stop
@section('content')

@if(Auth::user()->hasPermission('VIEW_USERS'))
      
            <div class="container-fluid">
                
                <!-- Page-Title -->
                <div class="row">

                    <div class="col-sm-4">

                        @include('settings.users.layouts.create')

                    </div>

                    <div class="col-sm-4">

                        <div class="row" style="margin: 10px; margin-left: 150px">

                            <a href="{{url('roles')}}" class="btn btn-custom">Roles</a>

                            <br>

                        </div>

                    </div>

                    <div class="col-sm-4">

                        <div class="row" style="margin: 10px; margin-left: 250px">

                            <a href="{{url('permissions')}}" class="btn btn-custom">Permissions</a>

                            <br>

                        </div>

                    </div>

                </div>
               
               @include('layouts.alerts')


                <div class="row">
                <h4 class="page-title" style="margin-bottom: 10px; margin-left: 650px;">Users</h4>
                    <div class="col-md-12">
                        <div class="card-box table-responsive">
                          
                            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Email Address</th>
                                    <th>Phone Number</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach($user as $users)  
                                
                                    <tr>
                                        <td>{{ @$users->name }}</td>
                                        <td>
                                            @foreach($role as $roles)

                                                @foreach(json_decode($users->role) as $roler)

                                                    @if($roles-> id == $roler)

                                                        {{ @$roles->name }}<br>

                                                    @endif

                                                @endforeach

                                            @endforeach
                                        </td>
                                        <td>{{ @$users->email }}</td>
                                        <td>{{ @$users->phone_number }}</td>
                                        <td>

                                            @if($users->status === 1)

                                                <a href="{{url('settings/users/enabling')}}?id={{$users->id}}&status=0" class="btn btn-danger">Block</a>

                                            @elseif($users->status === 0)

                                                <a href="{{url('settings/users/enabling')}}?id={{$users->id}}&status=1" class="btn btn-success">Unblock</a>

                                            @endif
                                        
                                        </td>
                                        <td>
                                            <a href="{{url('settings/users/particular')}}?id={{$users->id}}" class="btn btn-primary"><i class=" fa fa-fw fa-pencil "></i></a>
                                        </td>
                                    </tr>

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
@section('scripts')
     <!-- Required datatable js -->
    <script src="{{asset('admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script>
           //Buttons examples
            var table = $('#datatable').DataTable({
            
               
            });

            table.buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');
    </script>
@stop
