@extends('layouts.layout')
@section('content')
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <strong>Categories</strong>
                </div>
                <div class="card-body cardcategories">
                    <ul class="userpgcategory fa-ul">
                        @if(isset($categories))
                            @if(count($categories)>0)
                                @foreach ($categories as $category)
                                    <li><a href='{{url('/post-classified-ads/'.preg_replace('/\s+/', '',$category->maincategory).'/'.$category->id)}}'>{!!html_entity_decode($category->icons)!!}{{$category->maincategory}}</a></li>
                                @endforeach
                            @else

                            @endif
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <strong>Advertisement</strong>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link" data-togle="tab" href="#home">Mobile & Tablets</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div id="home">
                        
                        </div>
                    </div>
                    <div id="myTabContent" class="tab-content">
                        <div class="" id="home">
                        <h1 style="padding: 10px 10px;" id="selcatmsg"></h1>
                        <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ url('/postCarsBikes') }}" style="padding-left: 20px;">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    @if (count($errors)>0)
                                      @foreach ($errors->all() as $error)
                                         
                                      @endforeach  
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="hidden" name="maincategoryid" value={{ Request::segment(3) }}>
                                            <label><strong>Select Subcategory</strong></label>
                                            <select class="form-control" name="subcategoryid"><option value="">Select</option>
                                            @if (count($subcategories)>0)
                                                @foreach ($subcategories as $subcategory)
                                                   <option value={{$subcategory->id}}>{{$subcategory->subcategory}}</option> 
                                                @endforeach
                                            @else ()
                                            @endif ()
                                            </select>
                                        </div>
                                    </div>
                                    <label></label>
                                    @if($errors->has('subcategoryid'))
                                        <span class="alert alert-danger" style="margin-left: 13px; padding:5px;"> {{ $errors->first('subcategoryid')}}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label><strong>Product Name</strong></label>
                                            <input type="text" class="form-control" name="productname" placeholder="Product Name">
                                        </div>
                                    </div>
                                    <label></label>
                                    @if($errors->has('productname'))
                                        <span class="alert alert-danger" style="margin-left: 13px; padding:5px;"> {{ $errors->first('productname')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label><strong>Year of Purchase</strong></label>
                                            <input type="text" class="form-control" name="yearofpurchase" placeholder="Year of Purchase">
                                        </div>
                                    </div>
                                    <label></label>
                                    @if($errors->has('yearofpurchase'))
                                        <span class="alert alert-danger" style="margin-left: 13px; padding:5px;"> {{ $errors->first('yearofpurchase')}}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label><strong>Expected selling Price</strong></label>
                                            <input type="text" class="form-control" name="price" placeholder="Expected Selling Price">
                                        </div>
                                    </div>
                                    <label></label>
                                    @if($errors->has('price'))
                                        <span class="alert alert-danger" style="margin-left: 13px; padding:5px;"> {{ $errors->first('price')}}</span>
                                    @endif
                                </div>
                            </div>
                              <div class="row">
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label><strong>Your Name</strong></label>
                                            <input type="text" class="form-control" name="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <label></label>
                                    @if($errors->has('name'))
                                        <span class="alert alert-danger" style="margin-left: 13px; padding:5px;"> {{ $errors->first('name')}}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label><strong>Your Mobile</strong></label>
                                            <input type="text" class="form-control" name="mobile" placeholder="Your Mobile">
                                        </div>
                                    </div>
                                    <label></label>
                                    @if($errors->has('mobile'))
                                        <span class="alert alert-danger" style="margin-left: 13px; padding:5px;"> {{ $errors->first('mobile')}}</span>
                                    @endif
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label><strong>Your Email</strong></label>
                                            <input type="email" class="form-control" name="email" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <label></label>
                                    @if($errors->has('email'))
                                        <span class="alert alert-danger" style="margin-left: 13px; padding:5px;"> {{ $errors->first('email')}}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label><strong>State</strong></label>
                                            <select class="form-control" name="state"><option value="">Select</option>
                                                @if (count($state)>0)
                                                @foreach ($state as $state)
                                                   <option value={{$state->id}}>{{$state->stateName}}</option> 
                                                @endforeach
                                            @else ()
                                            @endif ()
                                            </select>
                                        </div>
                                    </div>
                                    <label></label>
                                    @if($errors->has('state'))
                                        <span class="alert alert-danger" style="margin-left: 13px; padding:5px;"> {{ $errors->first('state')}}</span>
                                    @endif
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label><strong>City</strong></label>
                                            <input type="text" class="form-control" name="city" placeholder="Enter Your City">
                                        </div>
                                    </div>
                                    <label></label>
                                    @if($errors->has('city'))
                                        <span class="alert alert-danger" style="margin-left: 13px; padding:5px;"> {{ $errors->first('city')}}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label><strong>Photos (Max 4)</strong></label>
                                            <input type="file" class="form-control" name="photos[]" multiple="true">
                                        </div>
                                    </div>
                                     <label></label>
                                     @if($errors->has('photos'))
                                        <span class="alert alert-danger" style="margin-left: 13px; padding:5px;"> {{ $errors->first('photos')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group" style="text-align: center;">
                                        <button type="submit" class="btn btn-primary">Post Your Ad</button>
                                        <button id="reset" class="btn btn-default">Reset</button></div>
                                    </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
@endsection