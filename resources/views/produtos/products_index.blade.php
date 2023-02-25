@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Produtos</h1>
                </div>
            </div>

            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img class="card-img-top" src="/images/products/{{ $product->image}}"
                                alt="{{ $product->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->title }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text"><small class="text-muted">{{ $product->quantity }} em estoque</small>
                                </p>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger"
                                        onclick="return confirm('Tem certeza que deseja deletar este produto?')">Deletar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection
