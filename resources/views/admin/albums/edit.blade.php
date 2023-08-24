@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('admin.albums.update', $album) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row justify-content-center">
            <div class="col-6">
                @error('singer_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="singer_name" class="form-label">
                        Singer name's
                    </label>
                    <input type="text" class="form-control" id="singer_name" name="singer_name" value="{{old('singer_name', $album->singer_name) }}">
                </div>

                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="title" class="form-label">
                        Title
                    </label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $album->title) }}">
                </div>

                @error('genres')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="genres" class="form-label">
                        Genres
                    </label>
                    <input type="text" class="form-control" id="genres" name="genres" value="{{  old('genres', $album->genres) }}">
                </div>

            </div>
            <div class="col-6">

                <div class="mb-3">
                    <label for="songs_number" class="form-label">
                        Songs
                    </label>
                    <input type="number" class="form-control" id="songs_number" name="songs_number" value="{{  old('singer_number', $album->songs_number) }}">
                </div>

                @error('imageUrl')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="imageUrl" class="form-label">
                        Cover Album
                    </label>
                    <input type="file" class="form-control" id="imageUrl" name="imageUrl" placeholder="Upload" value="{{  old('imageUrl', '') }}">
                </div>
            </div>

            <div class=" d-flex justify-content-center text-white">
                <button type="submit" class="mx-2" style="background: greenyellow">
                    Update Album

                </button>
                <button type="reset" style="background: yellow">
                    Reset
                </button>
            </div>
        </div>
    </form>
</div>
@endsection