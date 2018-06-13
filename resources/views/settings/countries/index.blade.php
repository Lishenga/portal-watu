@extends('layouts.master')
@section('styles')
     <!-- DataTables -->
    <link href="{{asset('admin/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
    <link href="{{asset('admin/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@stop
@section('title')
    Countries
@stop
@section('content')
@if(Auth::user()->hasPermission('COUNTRIES_PAGE'))
      
            <div class="container-fluid">
                
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        @include('settings.countries.layouts.create')
                    </div>
                </div>
               
               @include('layouts.alerts')


                <div class="row">
                <h4 class="page-title" style="margin-bottom: 10px; margin-left: 600px;">Countries</h4>
                    <div class="col-md-12">
                        <div class="card-box table-responsive">
                          
                            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Country Code</th>
                                    <th>Currency Code</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach($country as $countries)  
                                
                                    <tr>
                                        <td>{{ $countries->name }}</td>
                                        <td>{{ $countries->country_code }}</td>
                                        <td>{{ $countries->currency_code }}</td>
                                        <td>
                                            <a data-toggle="modal" data-target="#myCountryUpdate{{ $countries->id }}" class="btn btn-primary"><i class=" fa fa-fw fa-pencil "></i></a>
                                            <a href="{{url('settings/country/delete')}}?id={{ $countries->id }}" onclick="alert('Are you sure you want to delete {{ $countries->name }} ?')" class="btn waves-effect waves-light btn-danger"> <i class="fa fa-remove"></i> </a>
                                        </td>
                                    </tr>

                                     <div class="modal fade" id="myCountryUpdate{{ $countries->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

                                        <div class="modal-dialog" role="document">

                                            <div class="modal-content">

                                                <div class="modal-header">

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                                    <h5 class="modal-title" id="myModalLabel" style="margin-right: 200px">Update Country</h4>

                                                </div>

                                                <div class="modal-body">

                                                    <form role="form"   method="POST" action="{{ url('settings/country/update') }}">

                                                        {{ csrf_field() }}

                                                        <div class="form-group">

                                                            <label  for="form-username">Name<span class="text-danger">*</span></label>

                                                            <input type="text" name="name" placeholder="Name..." class="form-username form-control"  required parsley-type="text">

                                                        </div>

                                                        <div class="form-group">

                                                            <label  for="form-username">Country Code<span class="text-danger">*</span></label>

                                                            <input type="text" name="country" placeholder="Country Code..." class="form-username form-control"  required parsley-type="text">

                                                        </div>

                                                        <div class="form-group">

                                                            <label  for="form-username">Currency Code<span class="text-danger">*</span></label>

                                                            <input type="text" name="currency" placeholder="Currency Code..." class="form-username form-control"  required parsley-type="text">

                                                        </div>

                                                        <input type="hidden" name="id" value="{{ $countries->id }}">

                                                        <div class="modal-footer">

                                                            <button type="submit" class="btn btn-info">Update Country</button>

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
