@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('/images/1.jpg')}}" class="d-block w-100 carousel-img"  alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('/images/2.jpg')}}" class="d-block w-100 carousel-img" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('/images/3.jpg')}}" class="d-block w-100 carousel-img" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="app">
        <price-coin-component></price-coin-component>
    </div>

@endsection
