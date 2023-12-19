@extends('master-layout')

@section('content')
    <div class="card">
        <div class="container mt-4">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-check-all me-2"></i>
                    {{ session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <div class="card-body">
            <h2 class="card-title mb-4">Create Album</h2>
            <form action="#" method="POST" enctype="multipart/form-data"> 
            {{-- <form action="{{route('album.store')}}" method="POST" enctype="multipart/form-data"> --}}
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    @error('name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">
                    </textarea>
                    @error('description')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="cover_image" class="form-label">Cover Image</label>
                    <input type="file" class="form-control" id="cover_image" name="cover_image">
                    @error('cover_image')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Create Album</button>
                    {{-- <a href="{{ route('album.index') }}" class="btn btn-secondary">Cancel</a> --}}
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
