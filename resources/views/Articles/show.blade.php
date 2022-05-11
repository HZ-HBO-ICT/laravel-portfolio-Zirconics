@extends('layout')
@section('content')
    <main>
        <!-- Big title of articles page-->
        <div class="page-title">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h1 id="page-title-text">{{ $article->title }}</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="buttons">
                <a href={{ route('articles.index') }}><button class="btn btn-light" id="blog_buttons">Back</button></a>
                <a href={{ route('articles.edit', $article) }}><button class="btn btn-light" id="blog_buttons">Edit</button></a>
                <hr>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-12">
                    <div class="card bg-light mb-3">
                        <div class="card-header">{{ $article->title }}</div>
                        <div class="card-body">
                            <p class="card-text">
                                {{ $article->body }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
