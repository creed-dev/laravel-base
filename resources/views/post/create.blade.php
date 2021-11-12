@extends('layouts.main')

@section('content')

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Text</label>
            <textarea rows="10" name="text" class="form-control" id="text" placeholder="Text"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
