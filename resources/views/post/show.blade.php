@extends('layouts.main')

@section('content')

    <div class="mb-3">Title: {{ $post->title }}</div>
    <div class="mb-3">Text: {{ $post->text }}</div>

    <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to list</a>

@endsection
