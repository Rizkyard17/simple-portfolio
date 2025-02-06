@extends('layouts.main')

@section('container')
    <h1>Post Category:  {{ $category }} </h1>
    
    @foreach ($posts as $tampil)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $tampil->slug }}">{{ $tampil->title }}</a>
            </h2>
            <p>{{ $tampil->excerpt }}</p>
        </article>
    @endforeach

@endsection