@extends('layouts.master')
@section('title')
    Dashboard
@stop
@section('content')
@if(Auth::user()->hasPermission('VIEW_SETTINGS_PAGE'))
      
            <div class="container-fluid">
                
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Settings</h4>
                    </div>
                </div>

                @include('layouts.alerts')
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="fas fa-chart-line float-right"></i>
                            <a href="{{ url('settings/rates') }}"  class="text-uppercase m-b-20"> Rates</a>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="fas fa-users float-right"></i>
                            <a href="{{ url('settings/users') }}"  class="text-uppercase m-b-20"> Users</a>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="fas fa-chart-bar float-right"></i>
                            <a href="{{ url('settings/tariffs') }}"  class="text-uppercase m-b-20"> Tariffs</a>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="fas fa-globe float-right"></i>
                            <a href="{{ url('settings/country') }}"  class="text-uppercase m-b-20"> Countries</a>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container -->

@else

<h4 style="text-align: center; margin-top: 200px">You're not permitted to view the content on this page</h4>

@endif
@stop