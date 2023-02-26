

<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('View Products') }}
    </h2>
</x-slot>

@section('content')
    <section>
        <div class="container mt-5">
            
            

            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <img class="card-img-top" src="/images/products/{{ $product->image }}"
                            alt="{{ $product->title }}" style="object-fit: cover; height: 250px;">

                            <div class="card-body">
                                <h2 class="h2 card-title">{{ $product->title }}</h2>
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
</x-app-layout>
