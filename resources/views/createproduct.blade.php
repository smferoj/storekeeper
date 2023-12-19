@extends('master-layout')

@section('content')
<a href="{{route('homePage')}}" class="btn btn-primary mb-2">See Product</a>
<div class="container d-flex justify-content-center align-items-center " style="height: 100vh; width:100%">
    <div class="card shadow-lg" style="height: 90vh; width:75%; margin-top:50px">
        <div class="">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-check-all me-2"></i>
                    {{ session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <div class="card-body">
            <h2 class="card-title mb-4">Create Product</h2>
            <form action="{{route('storeProduct')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control w-100"  id="name" name="name" required>
                    @error('name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="">
                    <label for="description" class="form-label">Description</label>
                    <input class="form-control" id="description" name="description">

                    @error('description')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="">
                    <label for="description" class="form-label">Price</label>
                    <input class="form-control" id="description" name="price" >
                    @error('price')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="">
                    <label for="description" class="form-label">Amount</label>
                    <input class="form-control" id="description" name="amount" >
                    @error('amount')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="">
                    <label for="cover_image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @error('image')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Create Product</button>
                    <a href="{{route('homePage')}}" class="btn btn-primary">See Product</a>

                </div>
            </form>
        </div>
    </div>
</div>


@endsection
