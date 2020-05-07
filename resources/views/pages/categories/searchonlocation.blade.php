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
                        @if (count($data)>0)
                           @foreach ($data as $row)
                                <div class="col-md-4">
                                    <div class="productCard">
                                        <img src=<?php echo strtok($row->photos, ',' )?> style="padding: 10px !important; width: 100%; height: 200px;" />
                                        <h3 style="margin-bottom: 0px;">{{$row->productname}}</h3>
                                        <h3 style="margin-bottom: 0px;">{{$row->city}}</h3>
                                        <p><a href='{{url("product/view/{$row->id}")}}'>VIEW</a></p>
                                    </div>
                                </div>   
                           @endforeach
                           @else 
                           <p>Not Found!</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
@endsection