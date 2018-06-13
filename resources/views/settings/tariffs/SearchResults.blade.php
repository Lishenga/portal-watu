@extends('layouts.master')
@section('styles')
     <!-- DataTables -->
    <link href="{{asset('admin/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
    <link href="{{asset('admin/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@stop
@section('title')
    Tariffs
@stop
@section('content')
      
            <div class="container-fluid">
                
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        @include('settings.tariffs.layouts.search')
                    </div>
                </div>
               
               @include('layouts.alerts')


                <div class="row">
                <h4 class="page-title" style="margin-bottom: 10px; margin-left: 600px;">Tariffs Search Results</h4>
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
                                @foreach($search as $searches)  
                                
                                    <tr>
                                        <td>{{ $searches->max }}</td>
                                        <td>{{ $searches->min }}</td>
                                        <td>{{ $searches->tariff_type }}</td>
                                        <td>{{ $searches->amount }}</td>
                                        <td>
                                            <a data-toggle="modal" data-target="#myTariffUpdate{{ $searches->id }}" class="btn btn-primary"><i class=" fa fa-fw fa-pencil "></i></a>
                                            <a href="{{url('settings/tariffs/delete')}}?id={{ $searches->id }}" onclick="alert('Are you sure you want to delete {{ $searches->tariff_type }} ?')" class="btn waves-effect waves-light btn-danger"> <i class="fa fa-remove"></i> </a>
                                        </td>
                                    </tr>

                                     <div class="modal fade" id="myTariffUpdate{{ $searches->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

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

                                                            <input type="text" name="tariff" placeholder="Tariff Type..." class="form-username form-control"  required parsley-type="text">

                                                        </div>

                                                        <div class="form-group">

                                                            <label  for="form-username">Amount<span class="text-danger">*</span></label>

                                                            <input type="text" name="amount" placeholder="Amount..." class="form-username form-control"  required parsley-type="text">

                                                        </div>

                                                        <input type="hidden" name="id" value="{{ $searches-> id }}">

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
