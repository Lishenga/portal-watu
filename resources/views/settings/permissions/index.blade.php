@extends('layouts.master')
@section('styles')
     <!-- DataTables -->
    <link href="{{asset('admin/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
    <link href="{{asset('admin/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@stop
@section('title')
    Permissions
@stop
@section('content')
      
            <div class="container-fluid">
                
                <!-- Page-Title -->
                <div class="row">

                    <div class="col-sm-6">

                        @include('settings.permissions.layouts.create')

                    </div>

                </div>
               
               @include('layouts.alerts')


                <div class="row">
                <h4 class="page-title" style="margin-bottom: 10px; margin-left: 650px;">Permissions</h4>
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
                                @foreach($permission as $permissions)  
                                
                                    <tr>
                                        <td>{{ @$permissions->name }}</td>
                                        <td>{{ @$permissions->display_name }}</td>
                                        <td>{{ @$permissions->description }}</td>
                                        <td>
                                            <a data-toggle="modal" data-target="#myPermissionUpdate{{ @$permissions->id }}" class="btn btn-primary"><i class=" fa fa-fw fa-pencil "></i></a>
                                            <a href="{{url('permissions/delete')}}?id={{ @$permissions->id }}" onclick="alert('Are you sure you want to delete {{ @$permissions->name }} ?')" class="btn waves-effect waves-light btn-danger"> <i class="fa fa-remove"></i> </a>
                                        </td>
                                    </tr>

                                     <div class="modal fade" id="myPermissionUpdate{{ @$permissions->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

                                        <div class="modal-dialog" role="document">

                                            <div class="modal-content">

                                                <div class="modal-header">

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                                    <h5 class="modal-title" id="myModalLabel" style="margin-right: 200px">Update Permission</h4>

                                                </div>

                                                <div class="modal-body">

                                                    <form role="form"   method="POST" action="{{ url('permissions/update') }}">

                                                        {{ csrf_field() }}

                                                        <div class="form-group">

                                                            <label  for="form-username">Name<span class="text-danger">*</span></label>

                                                            <input type="text" name="name" placeholder="Name..." class="form-username form-control"  required parsley-type="text">

                                                        </div>

                                                        <div class="form-group">

                                                            <label  for="form-username">Display Name<span class="text-danger">*</span></label>

                                                            <input type="text" name="display_name" placeholder="Display Name..." class="form-username form-control"  required parsley-type="text">

                                                        </div>

                                                        <div class="form-group">

                                                            <label  for="form-username">Description<span class="text-danger">*</span></label>

                                                            <textarea rows="4" cols="50" name="description" placeholder="Description..." class="form-username form-control"  required parsley-type="text"></textarea>

                                                        </div>

                                                        <input type="hidden" name="id" value="{{ @$permissions->id }}">

                                                        <div class="modal-footer">

                                                            <button type="submit" class="btn btn-info">Update Permission</button>

                                                        </div>

                                                    </form>

                                                </div>

                                            </div>

                                        </div>

                                    </div>


                                @endforeach


                                </tbody>
                            </table>    
                        </div>
                    </div>
                </div>            

        </div> <!-- container -->
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
