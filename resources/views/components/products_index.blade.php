<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-light leading-tight">
            {{ __('View Products') }}
        </h2>
    </x-slot>

    @section('content')
        <section>
            <div class="container mt-5">



                <div class="row">




                    @foreach ($products as $product)
{{--
                            <div class="product-card">
                                <div class="product-card-header">
                                    <img src="/images/products/{{ $product->image }}" alt="{{ $product->title }}"
                                        class="card-img-top" />
                                </div>
                                <div class="product-card-body">
                                    <h2 class="subscription h2">{{ $product->title }}</h2>
                                    <h3 class="product">{{ $product->quantity }}<span> in stock</span></h3>
                                    <ul class="services">
                                        <li>
                                            <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                data-icon="check-circle" class="svg-inline--fa fa-check-circle fa-w-16"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path
                                                    d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z">
                                                </path>
                                            </svg>
                                            {{ $product->description }}
                                        </li>

                                    </ul>
                                </div>
                                <div class="product-card-footer">
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn-edit">Edit</a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" type="submit"
                                            onclick="return confirm('Tem certeza que deseja deletar este produto?')"class="btn-delet">Delet</a>
                                    </form>
                                </div>
                            </div> --}}



                        <div class="col-md-4 mb-3 d-flex justify-content-center">
                            <div class="card h-100" style="border-radius: 2rem;box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); width: 88%;">
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
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn-edit">Edit</a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Tem certeza que deseja deletar este produto?')"class="btn-delet">Delet</button>
                                    </form>
                                </div>


                                {{-- <img class="card-img-top" src="/images/products/{{ $product->image }}"
                            alt="{{ $product->title }}" style="object-fit: cover; height: 250px;">

                            <div class="card-body">
                                <h2 class="h2 card-title">{{ $product->title }}</h2>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text"><small class="text-muted">{{ $product->quantity }} in stock</small>
                                </p>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger"
                                        onclick="return confirm('Tem certeza que deseja deletar este produto?')">Delet</button>


                                </form>
                            </div> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </section>
    @endsection
</x-app-layout>
