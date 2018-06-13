@extends('layouts.master')
@section('styles')
     <!-- DataTables -->
    <link href="{{asset('admin/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
    <link href="{{asset('admin/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@stop
@section('title')
    Customers
@stop
@section('content')
@if(Auth::user()->hasPermission('VIEW_PARTICULAR_CUSTOMER'))
      
            <div class="container-fluid">
                
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-15">
                            <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light"
                                    data-toggle="dropdown" aria-expanded="false">More <span class="m-l-5"></span></button>
                            <div class="dropdown-menu dropdown-menu-right">
                             
                                
                            </div>

                        </div>
                        <h4 class="page-title">Customers</h4>
                    </div>
                </div>
               
               @include('layouts.alerts')


                <div class="row">
                  
                    <div class="col-md-12">
                        <div class="card-box table-responsive">
                          
                            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Amount</th>
                                    <th>Sender</th>
                                    <th>Receiver</th>
                                    <th>status</th>
                                    <th>Date </th>
                                  
                                    <th>Actions</th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach($transactions as $transaction)  
                                
                                    <tr>
                                        <td>{{$transaction->Amount}}</td>
                                        <td>{{$transaction->Sender}}</td>
                                        <td>{{$transaction->Receiver}}</td>
                                        <td>{{$transaction->status}}</td>
                                        <td>{{$transaction->created_at}}</td>
                                      
                                        <td>
                                            <a class="btn waves-effect waves-light btn-primary" href=""> <i class="fa fa-pencil"></i></a>
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
