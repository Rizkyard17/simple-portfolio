{{-- @extends('layouts.main')

@section('container')
    <!-- <article>
        <h2>{{ $post->title }}</h2>
        <h5>BY: {{ $post->user->name }} <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
        {!! $post->body !!}
    </article>

    <a href="/blog">Back</a> -->
    
    <!-- Page Content-->
    <div class="container-fluid px-5 my-5 w-100">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Details</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Experience Section-->
                        <section>
                            <!-- Experience Card 1-->
                                <div class="card shadow border-0 rounded-4 mb-5">
                                    <div class="card-body p-5">
                                        <div class="row align-items-center gx-5">
                                            <!-- <h2 class="col text-left ">
                                                <a href="/posts/{{ $post->slug }}"> {{ $post->title }} </a>
                                            </h2> -->
                                            <div class="col-12 d-flex justify-content-between mb-4 mb-lg-0">
                                                <h2 class="text-left">
                                                    <a href="/posts/{{ $post->slug }}" class="text-blue text-decoration-none fw-bold link-secondary-hover"> {{ $post->title }} </a>
                                                </h2>
                                                <button class="btn btn-info mb-2"><a href="/resume" class="text-decoration-none text-white">Back</a></button>
                                                
                                                <div class="bg-light p-4 rounded-4">
                                                    <!-- <div class="text-primary fw-bolder mb-2">2019 - Present</div> -->
                                                    <div class="small fw-bolder">By : {{ $post->user->name }}</div>
                                                    <div class="small fw-bolder">{{ $post->category->name }}</div>
                                                    <!-- <div class="small text-muted">Stark Industries</div>
                                                    <div class="small text-muted">Los Angeles, CA</div> -->
                                                </div>
                                            </div>
                                            <div class="col-lg-20"><div>{{ $post->body }}</div></div>
                                        </div>
                                    </div>
                                </div>
                        </section>
                </div>
            </div>
@endsection --}}

@extends('layouts.main')

@section('container')
    <!-- Page Content-->
    <div class="container-fluid px-5 my-5 w-100">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Details</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Experience Section-->
                <section>
                    <!-- Experience Card 1-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col-12 d-flex justify-content-between mb-4">
                                    <!-- Judul di kiri -->
                                    <h2 class="text-left">
                                        <a href="/posts/{{ $post->slug }}" class="text-blue text-decoration-none fw-bold link-secondary-hover"> {{ $post->title }} </a>
                                    </h2>
                                    <!-- Tombol di kanan -->
                                    <button class="btn btn-info mb-2 ms-auto">
                                        <a href="/resume" class="text-decoration-none text-white">Back</a>
                                    </button>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="small fw-bolder">By : {{ $post->user->name }}</div>
                                        <div class="small fw-bolder">{{ $post->category->name }}</div>
                                    </div>
                                </div>
                                <div class="col-lg-20">
                                    <div>{{ $post->body }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
