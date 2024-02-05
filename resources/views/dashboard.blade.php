<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('Last added products') }}
                </div>
            </div>
        </div>
    </div>
    <div class="container row">
        @foreach ($products as $product)
            <div class="card  col" style="width: 18rem;">
                <img src="/images/{{ $product->image }}"class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Name : {{ $product->name }}</h5>
                    <p class="card-text">Price : {{ $product->price }}</p>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Plus</a>
                </div>
            </div>
        @endforeach
    </div>
    {!! $products->links() !!}
</x-app-layout>
