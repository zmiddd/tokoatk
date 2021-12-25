@extends('layouts.front')

@section('content')

@foreach($products as $p)

@section('search')
<form action="/menu"  method="get">
                    <input name="keyword" type="text" class="form-control" placeholder="nama barang">
                    <button type="submit" class="btn btn-default mb-3">search</button>
                                
                            </button>
                        </form>
@endsection
<div class="products">
            <div class="row">

                <div class="col-md-3">
                    <div class="product-item">
                        <div class="product-borde-inner">
                            <a href="product_single.html">
                                <img src="{{asset('storage/'.$p->gambar)}}" class="img img-responsive"/>
                            </a> 
<div class="product-price">
                                <a href="product_single.html">{{$p->nama}}</a><br />                            
                                <span class="current-price">
                                    {{$p->harga}}$
                                </span>
                            </div>

                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                <i class="fa fa-cart-plus"></i>
                                Add to cart
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div> 
                </div><!-- End Latest products[single] -->          
                        
@endforeach

@endsection