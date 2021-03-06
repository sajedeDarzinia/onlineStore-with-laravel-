@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="row">
            @foreach ($products as  $product)
                <div class="col-4" style="margin: 30px 0px;">
                    <div class="card" style="height: 400px;">
                        <img class="card-img-top" style="height: 200px;object-fit:cover;" src="{{asset('images/' . $product->pic)}} " alt="Card image cap">
                        <div class="card-body">
                            <div class="card-title">
                                <label for="Name">
                                    {{$product->title}}
                                </label>
                                <strong class="">
                                    {{$product->price}}
                                </strong>
                            </div>
                            <div class="card-text mb-4" style="height: 80px; overflow:hidden;">
                                {{$product->description}}
                            </div>
                            <div style="margin: -25px 0px;display: flex;justify-content:space-between;">
                                <a href="{{route('addToCart' , $product->id)}}" class="btn btn-primary">add to cart </a>
                                <a href="{{route('singlePage' , $product->id)}}" class="btn btn-danger"> more </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection