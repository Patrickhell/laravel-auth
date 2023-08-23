@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class=" col-12">
            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">SINGER NAME'S</th>
                        <th scope="col">TITLE</th>
                        <th scope="col">SLUG</th>
                        <th scope="col">GENRES</th>
                        <th scope="col" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $albums as $album)
                    <tr>
                        <td>
                            {{$album->singer_name}}
                        </td>
                        <td>
                            {{$album->title}}
                        </td>
                        <td>
                            {{$album->slug}}
                        </td>
                        <td>
                            {{$album->genres}}
                        </td>
                        <td>
                            <a href="{{ route('admin.albums.show', $album) }}" class="btn btn-sm btn-primary  mx-2">
                                See more
                            </a>
                            <a href="" class="btn btn-sm btn-success mx-2">
                                Edit
                            </a>
                            <a href="" class="btn btn-sm btn-warning  mx-2">
                                Delete
                            </a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$albums->links()}}
        </div>
    </div>
</div>
@endsection