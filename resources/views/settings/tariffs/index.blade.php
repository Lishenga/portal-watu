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
@if(Auth::user()->hasPermission('VIEW_TARIFFS'))
      
            <div class="container-fluid">
                
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-6">
                        @include('settings.tariffs.layouts.create')
                    </div>
                    <div class="col-sm-6">
                        @include('settings.tariffs.layouts.search')
                    </div>
                </div>
               
               @include('layouts.alerts')


                <div class="row">
                <h4 class="page-title" style="margin-bottom: 10px; margin-left: 650px;">Tariffs</h4>
                    <div class="col-md-12">
                        <div class="card-box table-responsive">
                          
                            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Maximum</th>
                                    <th>Minimum</th>
                                    <th>Tariff Type</th>
                                    <th>Amount</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach($tariff as $tariffs)  
                                
                                    <tr>
                                        <td>{{ $tariffs->max }}</td>
                                        <td>{{ $tariffs->min }}</td>
                                        <td>{{ $tariffs->tariff_type }}</td>
                                        <td>{{ $tariffs->amount }}</td>
                                        <td>
                                            <a data-toggle="modal" data-target="#myTariffUpdate{{ $tariffs->id }}" class="btn btn-primary"><i class=" fa fa-fw fa-pencil "></i></a>
                                            <a href="{{url('settings/tariffs/delete')}}?id={{ $tariffs->id }}" onclick="alert('Are you sure you want to delete {{ $tariffs->tariff_type }} ?')" class="btn waves-effect waves-light btn-danger"> <i class="fa fa-remove"></i> </a>
                                        </td>
                                    </tr>

                                     <div class="modal fade" id="myTariffUpdate{{ $tariffs->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

                                        <div class="modal-dialog" role="document">

                                            <div class="modal-content">

                                                <div class="modal-header">

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                                    <h5 class="modal-title" id="myModalLabel" style="margin-right: 200px">Update Tariff</h4>

                                                </div>

                                                <div class="modal-body">

                                                    <form role="form"   method="POST" action="{{ url('settings/tariffs/update') }}">

                                                        {{ csrf_field() }}

                                                        <div class="form-group">

                                                            <label  for="form-username">Maximum<span class="text-danger">*</span></label>

                                                            <input type="text" name="max" placeholder="Maximum..." class="form-username form-control"  required parsley-type="text">

                                                        </div>

                                                        <div class="form-group">

                                                            <label  for="form-username">Minimum<span class="text-danger">*</span></label>

                                                            <input type="text" name="min" placeholder="Maximum..." class="form-username form-control"  required parsley-type="text">

                                                        </div>

                                                        <div class="form-group">

                                                            <label  for="form-username">Tariff Type<span class="text-danger">*</span></label>

                                                            <select class="form-control selectpicker" id="sell" name="tariff" data-live-search="true">

                                                                <option value="M-PESA">M-PESA</option>

                                                                <option value="STRIPE">STRIPE</option>

                                                            </select>

                                                        </div>

                                                        <div class="form-group">

                                                            <label  for="form-username">Amount<span class="text-danger">*</span></label>

                                                            <input type="text" name="amount" placeholder="Amount..." class="form-username form-control"  required parsley-type="text">

                                                        </div>

                                                        <input type="hidden" name="id" value="{{ $tariffs-> id }}">

                                                        <div class="modal-footer">

                                                            <button type="submit" class="btn btn-info">Update Tariff</button>

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
