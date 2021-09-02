@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go back</a>
            <h2> Name: {{$product['name']}}</h2>
            <h3>Price: {{$product['price']}}</h3>
            <h4>Category: {{$product['description']}}</h4>
            <h4>Description: {{$product['category']}}</h4>
            <br><br>
            <form action="/api/add_to_cart" method="POST">
                <input type="hidden " name="product_id" value="{{$product['id']}}">
                @csrf
            <button class="btn btn-success"> Add to chart </button>
            </form>
            <br><br>
         
        </div>
    </div>
</div>
@endsection