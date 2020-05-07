@extends('layouts.layout')
@section('content')
   <div class="container-fluid">
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
                                    <li><a href='{{url('/viewAds/' .preg_replace('/\s+/', '',$category->maincategory).'/'.$category->id)}}'>{!!html_entity_decode($category->icons)!!}{{$category->maincategory}}</a></li>
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
                  @if (isset($product))
                      @if(count($product)>0)
                        @foreach ( $product as $ad)
                            <?php
                            $img = [];
                            $img = explode(",", $ad->photos);
                            //echo '<pre>';
                                //print_r($img);
                            //echo '</pre>';
                            ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row featured" id="featured-image">
                                        <img class="main-img" src="{{$img[0]}}" alt="" width="100%"/>
                                        <p>
                                            @if (isset($img[1]))
                                                <img class="toggle-img" src="{{$img[1]}}" alt="" width="220px" height="200px"/>
                                            @endif
                                            @if (isset($img[2]))
                                                <img class="toggle-img" src="{{$img[2]}}" alt="" width="220px" height="200px"/>
                                            @endif
                                            @if (isset($img[3]))
                                                <img class="toggle-img" src="{{$img[3]}}" alt="" width="220px" height="200px"/>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-6">
                                    <div class="card border-secondary wb-3" style="20rem; border:1px solid #ccc !important;">
                                        <div class="card-header">PRODUCT DETAILS</div>
                                            <div class="card-body">
                                                <h6>Name: 
                                                <span style="font-size:13px;" title="xtra large">{{$ad->productname}}</span>
                                                </h6>
                                                <hr>
                                                <h6>Purchase on: 
                                                <span style="font-size:13px;" title="xtra large">{{$ad->yearofpurchase}}</span>
                                                </h6>
                                                <hr>
                                                <h6>Price: 
                                                <span style="font-size:13px;" title="xtra large">{{$ad->price}}</span>
                                                </h6>
                                            </div> 
                                    </div>
                                    <br>
                                    <div class="card border-secondary wb-3" style="20rem; border:1px solid #ccc !important;">
                                        <div class="card-header">SELLER DETAILS</div>
                                            <div class="card-body">
                                                <h6>Name: 
                                                <span style="font-size:13px;" title="xtra large">{{$ad->name}}</span>
                                                </h6>
                                                <hr>
                                                <h6>Phone Number: 
                                                <span style="font-size:13px;" title="xtra large">{{$ad->mobile}}</span>
                                                </h6>
                                                <hr>
                                                <h6>Email: 
                                                <span style="font-size:13px;" title="xtra large">{{$ad->email}}</span>
                                                </h6>
                                                <hr>
                                                <h6>City: 
                                                <span style="font-size:13px;" title="xtra large">{{$ad->city}}</span>
                                                </h6>
                                            </div> 
                                    </div>
                                </div>
                            </div>
                        @endforeach
                      @else
                      @endif
                  @endif
                </div>
            </div>
        </div>
    </div>
   </div>
@endsection