@extends('master-layout')

@section('content')

<div class="container mt-4">
    <h2>Available Products</h2>

    <a href="{{route('createProduct')}}" class="btn btn-primary mb-2">Create Product</a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
         <tbody>
             @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->amount }}</td>
                    <td class="text-center">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="img-thumbnail" style="max-width:50px; max-height:60px">
                    </td>
                    <td>
                        <form action="{{ route('destroy', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                       </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
