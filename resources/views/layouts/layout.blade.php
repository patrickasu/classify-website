<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
        

        <title>Laravel</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <script src="https://use.fontawesome.com/aaeaa2b8d9.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="/css/style.css" rel="stylesheet"> 
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="/">
                    <img src="/img/3.png" class="logo" alt="Logo">
                </a>
                {{-- <a href="#" class="navbar-brand ml-3">Native Delicacies</a> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">About Us </a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Register</a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                        <li class="nav-item post"><a href="/post-classified-ads" class="nav-link">Post Free AD</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container-fluid p-0">
            <div class="site-content">
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
        <div class="search-bar">
         <div class="col-lg-12">
            <h2 class="search-bar-header-1">Buy And Sell Everything From Used Our Top Category <br> Or Category For Properties, Real Estate And More</h2>
            <p class="search-bar-header">Search from over 2000+ Active Ads in 5+ Categories for Free</p>
            <div class="row">
                <div class="col-lg-4">
                    <form class="form-horizontal" method="post" action="{{ url('/product/search') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-8">
                                <input type="text" name="searchproduct" required="true" class="form-control" placeholder="Enter Product Name">
                            </div>
                            <div class="col-4">
                                <input class="search-btn" type="submit" name="" value="search">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-8">
                    <form class="form-horizontal" method="post" action="{{ url('/search/advertisements') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <input type="text" name="states" id="state" required="true" class="form-control" placeholder="Enter State">
                                <div id="stateList"></div>
                                <div id="cityList" style="display:block; position:absolute; border-radius:0px; background:#fff; width: 88%; padding:0px 15px; overflow-y: auto; z-index:1; list-style-type: none;"></div>
                                <input type="tel" name="city" id="city" style="background: #fff; border:none; padding-left:15px; color:#232323;">
                            </div>
                            <div class="col-lg-4">
                                <select class="form-control dropdown" name="categories" id="categories" class="categories">
                                    <option>Select</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <input class="search-btn" type="submit" name="searchads" class="btn-default" value="search">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
        </div>  
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @yield('content')
        @include('includes.footer')
        </body>
</html>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#state').keyup(function(){
            //alert("I catch you");
            var data;
            var nigeriastates = $(this).val();
            //alert(nigeriastates);
            if(nigeriastates != ''){
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{ route('searchlocation.fetch') }}",
                    method: "POST",
                    data: {nigeriastates:nigeriastates, _token:_token},
                    success: function(data){
                        //alert(data);
                        $('#stateList').fadeIn();
                        $('#stateList').html(data);
                    }
                });
            }
            else {
                $('#stateList').fadeOut();
                $('#stateList').html(data);
            }
        });
        $(document).on('click', '#search', function(){
            $('#state').val($(this).text());
            $('#stateList').fadeOut();
        });
    $(document).on('click', '#stateList ul li', function(){
        var state = $('#state').val();
        var id = $(this).val();
        var _token = $('input[name="_token"]').val();
        $.ajax({
            url: "{{ route('state.cities') }}",
            method: "POST",
            data: {id:id, _token:_token},
            success: function(data){
                //alert (data);
                $('#cityList').fadeIn();
                $('#cityList').html(data);
            }
        });
    });
    $(document).on('click', '#cityList', function(e){
        var txt = $(e.target).text();
        $('#city').fadeIn();
        $('#city').val(txt);
        $('#cityList').fadeOut();
    });
    $(document).ready(function(){
        var _token = $('input[name="_token"]').val();
        $.ajax({
            url: "{{ route('categories.retrieve') }}",
            method: "POST",
            data: {_token:_token},
            success: function(data){
                //alert (data);
                $('#categories').fadeIn();
                $('#categories').html(data);
            }
        });
    });
    $(document).ready(function(){
        if(window.location == "http://127.0.0.1:8000/"){
            var _token = $('input[name="_token"]').val();
        $.ajax({
                url: "{{ route('categories.ads') }}",
                    method: "GET",
                    data: {_token:_token},
                success: function(data){
                    console.log(data);  
                },
                error: function(data) {
                console.log("ERROR: ", data);
                }
            });
        }
    });
    $(document).ready(function(){
        $('p img').on('click', function(){
            $('.main-img').attr('src', $(this).attr('src'));
        });
    });
});
</script>