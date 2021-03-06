@extends('layouts.default')
@include('layouts.design')

@section('title')
    Admin-Vendor
@endsection

@section('content-for-other-page')
    


    <div class="container">
            <div class="row">
                    <div class="col-sm-3">
                        <ul id="vendor-navigation" class="nav nav-piles">
                            <li><a class="btn btn-primary" href="{{route('admin')}}">Dashboard</a></li>
                            <li><a class="btn btn-primary" href="{{route('admin.vendor')}}">Vendors</a></li>
                            <li><a class="btn btn-primary" href="{{route('admin.order')}}">shipping order</a></li>
                            <li><a class="btn btn-primary" href="{{route('admin.orderdeliver')}}">delivered order</a></li>
                            <li><a class="btn btn-primary" href="{{route('admin.claimed.order')}}">claimed order</a></li>                               
                            <li><a class="btn btn-primary" href="{{route('admin.product')}}">product</a></li>
                            <li><a class="btn btn-primary" href="{{route('admin.customer')}}">customer</a></li>
                            <li><a class="btn btn-primary" href="{{route('admin.categories')}}">categories</a></li>
                            <li><a class="btn btn-primary" href="{{route('admin.brands')}}">brands</a></li>
                            <li><a class="btn btn-primary" href="{{route('admin.feedback')}}">feedback</a></li>
                        </ul>
                    </div>
            
                    <div class="col-sm-9">
                        <div id="container">
                                @foreach($data as $vendor_datas)
                               
                                            <div class="panel panel-default">
                                         
                                                    <div class="panel-body">
        
                                                     
                                                      <h2>{{$vendor_datas ->email}}</h2>
                                                      <p color="red">wanna delete this vendor account ?</p>
        
                                                            <form action="{{route('admin.vendor.delete',['email'=>$vendor_datas->email])}}" method="post">
                                                                <input type="text" name="v_a_id" value="{{$vendor_datas ->vendor_id}}" hidden>
                                                                <button type="submit" class="btn btn-success">yes</button>
                                                                <a href="{{route('admin.vendor')}}" class="btn btn-danger">no</a>    
                                                            </form>
        
                          
                                                     
                                                    </div>
                                                       
                                                </div>
    

            
                                @endforeach
            
                        </div>
            
                    </div>
            
                </div>
    </div>

 
   

@endsection



