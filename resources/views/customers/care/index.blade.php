@extends('layouts.master')
@section('styles')
     <!-- DataTables -->
    <link href="{{asset('admin/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
    <link href="{{asset('admin/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@stop
@section('title')
    Customers Care
@stop
@section('content')

sdfsd

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
