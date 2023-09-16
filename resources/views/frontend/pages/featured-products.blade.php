@extends('layouts.app')

@section('title','Featured Products')

@section('content')

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Produits en vedette</h4>
                <div class="underline mb-4"></div>
            </div>


            @forelse ($featuredProducts as $product)
            <div class="col-md-3">
                <div class="product-card">
                    <div class="product-card-img">

                        <label class="stock bg-danger">Nouveau</label>

                        @if ($product->productImages->count() > 0)
                        <a href="{{ url('/collections/'.$product->category->slug.'/'.$product->slug) }}">
                            <img src="{{ asset($product->productImages[0]->image) }}" alt="{{ $product->name }}">
                        </a>
                        @endif

                    </div>
                    <div class="product-card-body">
                        <p class="product-brand">{{ $product->brand }}</p>
                        <h5 class="product-name">
                            <a href="{{ url('/collections/'.$product->category->slug.'/'.$product->slug) }}">
                                {{ $product->name }}
                            </a>
                        </h5>
                        <div>
                            <span class="selling-price">{{ $product->selling_price }}Dhs</span>
                            <span class="original-price">{{ $product->original_price }}Dhs</span>
                        </div>

                    </div>
                </div>
            </div>
        @empty
            <div class="col-md-12 p-2">
                <h4>Aucun produit en vedette disponible</h4>
            </div>
        @endforelse

        <div class="text-center">
            <a href="{{ url('/collections') }}" class="btn btn-warning px-3">Magasiner davantage</a>
        </div>
    </div>
</div>

</div>

@endsection
