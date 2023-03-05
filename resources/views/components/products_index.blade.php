<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-light leading-tight">
            {{ __('View Products') }}
        </h2>
    </x-slot>

    @section('content')
        <section>
            <div class="container mt-5">

                <div class="row w-100 mb-5">

                    <div class="col-md-6 w-100 d-flex align-items-center justify-content-center">

                        <form action="{{ route('products.index') }}" method="GET">
                            <input type="text" name="search">
                            <button class="btn btn-primary">Search</button>
                        </form>
                    </div>

                </div>


                <div class="row">

                    @foreach ($products as $product)
                        <div class="col-md-4 mb-3 d-flex justify-content-center">
                            <div class="card h-100"
                                style="border-radius: 2rem;box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); width: 88%;">
                                <div class="product-card-header">
                                    <img src="/images/products/{{ $product->image }}" alt="{{ $product->title }}"
                                        class="card-img-top" />
                                </div>
                                <div class="product-card-body">
                                    <h2 class="subscription h2">{{ $product->title }}</h2>
                                    <hr>
                                    <h3 class="product">{{ $product->quantity }}<span> in stock</span></h3>
                                    <ul class="services">
                                        <li>

                                            {{ $product->description }}
                                        </li>

                                    </ul>
                                </div>
                                <div class="product-card-footer pb-3">
                                    <a href="{{ route('products.edit', $product->id) }}"
                                        class="btn btn-danger inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 bg-yellow-600">Edit</a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Tem certeza que deseja deletar este produto?')"
                                            class="btn btn-danger inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 bg-red-800">Delet</button>
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
