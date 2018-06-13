

@extends('layouts.master')
@section('title')
    Customers
@stop
@section('content')
@if(Auth::user()->hasPermission('VIEW_PARTICULAR_CUSTOMER'))

           <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Card</h4>
                </div>
               <form method="POST" action="{{url('customers/cards/update')}}">
                <div class="modal-body">
                   <div class="row">
                    {{ csrf_field() }}
                    <input type="hidden" name="email" value="{{ $customer->email }}">
                    <div class="col-md-12">
                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">Number</label>
                            <input type="number" class="form-control" id="exampleInputEmail1"  name="number" required>
                            <small class="text-muted">
                               
                            </small>
                        </fieldset>
                    </div>
                    <div class="col-md-4">
                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">CVC</label>
                            <input type="number" class="form-control" id="exampleInputEmail1"  name="cvc"  value="" required>
                            <small class="text-muted">
                                
                            </small>
                        </fieldset>
                    </div>

                    <div class="col-md-4">
                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">Expiry Year</label>
                            <input type="number" class="form-control" id="exampleInputEmail1"  name="exp_month" value="{{date('Y')}}" required>
                            <small class="text-muted">
                                
                            </small>
                        </fieldset>
                    </div>


                    <div class="col-md-4">
                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">Expiry Month</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" name="exp_year"  name="email" required placeholder="First Name" value="{{date('m')}}">
                            <small class="text-muted">
                               
                            </small>
                        </fieldset>
                    </div>
                   </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
               <form>
                </div>

            </div>
            </div>
            <div class="container">
                
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-15">
                            <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light"
                                    data-toggle="dropdown" aria-expanded="false">More<span class="m-l-5"><i
                                    class="fa fa-list"></i></span></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{url('customers/transactions')}}?msisdn={{$customer->msisdn}}">Transactions</a>
                                 <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{url('/customers/delete')}}?id={{$customer->id}}" onclick="alert('Are you sure you want to block {{@$customer->fname }} {{@$customer->lname }}?')">Delete</a>
                            </div>

                        </div>
                        <h4 class="page-title">Customers</h4>
                    </div>
                </div>

                @include('layouts.alerts')
            <div class="row">
            
                @if($customer->stripe_id == "0" || $customer->stripe_id == NULL)
                    <div class="col-md-3">
                        <div class="alert alert-warning">
                          The User Has no Stripe Account Click the button below to register them
                          {{$customer->stripe_id}}
                        </div>
                        <a href="{{url('/customers/register/stripe')}}?email={{$customer->email}}" class="btn btn-block  btn-custom waves-effect waves-light active">Register</a>
                    </div>
                @else
                    <div class="col-md-3">
                        <div class="alert alert-success">
                          User Stripe Id
                          {{$customer->stripe_id}}
                        </div>
                       </div>
                @endif
  
               <div class="col-md-9">
                <form method="POST" action="{{ url('/customers/update') }}">
                  <div class="row">
                   
                    {{ csrf_field() }}
                    <div class="col-md-6">
                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" class="form-control" name="fname" placeholder="First Name" value="{{$customer->fname}}">
                            <small class="text-muted">
                               
                            </small>
                        </fieldset>
                    </div>
                     <div class="col-md-6">
                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">Other Names</label>
                            <input type="text" class="form-control" name="lname" placeholder="Last Name" value="{{$customer->lname}}">
                            <small class="text-muted">
                                
                            </small>
                        </fieldset>
                    </div>

                     <div class="col-md-6">
                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" placeholder="First Name" value="{{$customer->email}}">
                            <small class="text-muted">
                               
                            </small>
                        </fieldset>
                    </div>

                     <div class="col-md-6">
                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">Phone number</label>
                            <input type="number" class="form-control" placeholder="Enter Phone Number" name="msisdn" value="{{$customer->msisdn}}">
                            <small class="text-muted"> 
                            </small>
                        </fieldset>
                    </div>
                    
                    <button type="submit" class="btn btn-block  btn-custom waves-effect waves-light active">Save</button>
                    
                  
                </div>
            </form>
              </div>


        </div>
        <div class="row">
                   
            <h6 class="page-title">Cards</h6>
                    
        </div>

       @if(isset($cards->data))
            <div class="row">
                @forelse($cards->data as $card)
                    
                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-layers float-right text-muted"></i>
                            <h6 class="text-muted text-uppercase m-b-20">{{$card->last4}}</h6>
                            
                            <span class="label label-success"> {{$card->brand}} </span> <span class="text-muted"></span>
                        </div>
                    </div>
                @empty

                @endforelse
            </div>
       @endif
               

        </div> <!-- container -->
@else

<h4 style="text-align: center; margin-top: 200px">You're not permitted to view the content on this page</h4>

@endif
@stop