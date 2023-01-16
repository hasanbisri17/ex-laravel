@extends('layouts.main')

@section('container')
    <h1>Halaman Blog</h1>
    @foreach($posts as $post)
        <div class="row row-cols-1 row-cols-md-2 g-4 mt-3 mb-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post["title"] }}</h5>
                        <p class="card-text"><small class="text-muted">By : {{ $post["author"] }}</small></p>
                        <p class="card-text">{{ $post["body"] }}</p>
                        <a href="/posts/{{ $post["slug"] }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
