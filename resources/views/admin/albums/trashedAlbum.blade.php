@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class=" col-12">
            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
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
                            {{$album->id}}
                        </td>
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
                        <td class="d-flex justify-content-center">
                            <form class="d-inline-block mx-3" action="{{ route('admin.albums.restore', $album) }} " method="POST">
                                @csrf
                                @method('POST')
                                <button type="submit" class="btn btn-md btn-warning ">
                                    Restore
                                </button>
                            </form>
                            <form class="d-inline-block" action="{{ route('admin.albums.obliterate', $album) }} " method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-md btn-danger ">
                                    Cancel Permanently
                                </button>
                            </form>
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