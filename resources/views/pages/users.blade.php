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
                        <strong>bnnnnnnnnnnnnnnn</strong>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12">
                            @if (session('info'))
                                <div class="alert alert-success" style="margin-top: 5px;">
                                    {{ session('info') }}
                                </div>
                            @endif
                        </div>
                        <div class="row" id="advertisements">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
   <div class="container-fluid p-0">
        <div class="ads-content">
            <div class="d-flex justify-content-center">
                <div class="d-flex flex-column">
                    <h1 class="site-title">..</h1>
                    <div class="d-flex flex-row">
                        <p class="booking">.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection