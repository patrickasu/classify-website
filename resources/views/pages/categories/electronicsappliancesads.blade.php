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
                    <div class="row">
                        @if (count($electroAppliances)>0)
                           @foreach ($electroAppliances as $row)
                                <div class="col-md-4">
                                    <div class="productCard">
                                        <img src=<?php echo strtok($row->photos, ',' )?> style="padding: 10px !important; width: 110%; height: 280px;" />
                                        <p class="product-name">{{$row->productname}}</p>
                                        <p class="city"><i class="fa fa-map-marker" aria-hidden="true"></i>{{$row->city}}</p>
                                        <a class="price" href='{{url("product/view/{$row->id}")}}'>VIEW DETAILS</a>
                                    </div>
                                </div>   
                           @endforeach
                           @else 
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
@endsection