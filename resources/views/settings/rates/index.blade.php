@extends('layouts.master')
@section('styles')
     <!-- DataTables -->
    <link href="{{asset('admin/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
    <link href="{{asset('admin/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@stop
@section('title')
    Rates
@stop
@section('content')
@if(Auth::user()->hasPermission('VIEW_RATES'))
      
            <div class="container-fluid">
                
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        @include('settings.rates.layouts.create')
                    </div>
                </div>
               
               @include('layouts.alerts')


                <div class="row">
                <h4 class="page-title" style="margin-bottom: 10px; margin-left: 650px;">Rates</h4>
                    <div class="col-md-12">
                        <div class="card-box table-responsive">
                          
                            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>High</th>
                                    <th>Low</th>
                                    <th>Buying</th>
                                    <th>Selling</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach($rates as $rate)  
                                
                                    <tr>
                                        <td>{{@$rate->high }}</td>
                                        <td>{{@$rate->low }}</td>
                                        <td>{{@$rate->buying }}</td>
                                        <td>{{@$rate->selling }}</td>
                                        <td>
                                            <a data-toggle="modal" data-target="#myRateUpdate{{$rate->id}}" class="btn btn-primary"><i class=" fa fa-fw fa-pencil "></i></a>
                                            <a href="{{url('settings/rates/delete')}}?id={{$rate->id}}" onclick="alert('Are you sure you want to delete this rate?')" class="btn waves-effect waves-light btn-danger"> <i class="fa fa-remove"></i> </a>
                                        </td>
                                    </tr>

                                     <div class="modal fade" id="myRateUpdate{{$rate->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

                                        <div class="modal-dialog" role="document">

                                            <div class="modal-content">

                                                <div class="modal-header">

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                                    <h4 class="modal-title" id="myModalLabel" style="margin-right: 200px">Update Rate</h4>

                                                </div>

                                                <div class="modal-body">

                                                    <form role="form"   method="POST" action="{{ url('settings/rates/update') }}">

                                                        {{ csrf_field() }}

                                                        <div class="form-group">

                                                            <label  for="form-username">High<span class="text-danger">*</span></label>

                                                            <input type="text" name="high" placeholder="High..." class="form-username form-control"  required parsley-type="text">

                                                        </div>

                                                        <div class="form-group">

                                                            <label  for="form-username">Low<span class="text-danger">*</span></label>

                                                            <input type="text" name="low" placeholder="Low..." class="form-username form-control"  required parsley-type="text">

                                                        </div>

                                                        <div class="form-group">

                                                            <label  for="form-username">Buying<span class="text-danger">*</span></label>

                                                            <input type="text" name="buying" placeholder="Buying..." class="form-username form-control"  required parsley-type="text">

                                                        </div>

                                                        <div class="form-group">

                                                            <label  for="form-username">Selling<span class="text-danger">*</span></label>

                                                            <input type="text" name="selling" placeholder="Selling..." class="form-username form-control"  required parsley-type="text">

                                                        </div>

                                                        <input type="hidden" name="id" value="{{$rate->id}}">

                                                        <div class="modal-footer">

                                                            <button type="submit" class="btn btn-info">Update Rate</button>

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
