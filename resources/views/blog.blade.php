@extends('layouts.main')

@section('container')
    <h1>Halaman Blog</h1>
    
    @foreach ($posts as $tampil)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $tampil->slug }}">{{ $tampil->title }}</a>
            </h2>
            <h5>By: Rizky in {{ $tampil->category->name }}</h5>
            <p>{{ $tampil->excerpt }}</p>
        </article>
    @endforeach

@endsection