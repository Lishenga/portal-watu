@extends('layouts.master')
@section('styles')
     <!-- DataTables -->
    <link href="{{asset('admin/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
    <link href="{{asset('admin/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@stop
@section('title')
    Roles
@stop
@section('content')
@if(Auth::user()->hasPermission('VIEW_ROLES'))
      
            <div class="container-fluid">
                
                <!-- Page-Title -->
                <div class="row">

                    <div class="col-sm-12">

                        @include('settings.roles.layouts.create')

                    </div>

                </div>
               
               @include('layouts.alerts')


                <div class="row">
                <h4 class="page-title" style="margin-bottom: 10px; margin-left: 650px;">Roles</h4>
                    <div class="col-md-12">
                        <div class="card-box table-responsive">
                          
                            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Display Name</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach($role as $roles)  
                                
                                    <tr>
                                        <td>{{ @$roles->name }}</td>
                                        <td>{{ @$roles->display_name }}</td>
                                        <td>{{ @$roles->description }}</td>
                                        <td>
                                            <a href="{{url('roles/particular')}}?id={{ @$roles->id }}"  class="btn btn-primary"><i class=" fa fa-fw fa-pencil "></i></a>
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
