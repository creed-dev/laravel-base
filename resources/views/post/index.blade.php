@extends('layouts.main')

@section('content')
    <a class="btn btn-success mb-3" href="{{ route('posts.create') }}">Create</a>

    @foreach($posts as $post)

        <div class="card mb-3">
            <div class="card-body">
                <h5> <strong>{{ $post->title }}</strong> </h5>
                <div class="mb-3"> {{ $post->text }} </div>

                <a href="{{ route('posts.edit', compact('post')) }}" class="btn btn-primary mb-3">Edit post</a>
                <form action="{{ route('posts.destroy', compact('post')) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit"  class="btn btn-danger">Delete post</button>
                </form>
            </div>
        </div>

    @endforeach
@endsection
