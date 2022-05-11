@extends('layout')
@section('content')
    <!-- Big title of Article editing page-->
    <div class="page-title">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 id="page-title-text">Edit a Article</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <a href={{ route('articles.index') }}><button class="btn btn-light" id="blog_buttons">Cancel</button></a>
        <div class="row g4 justify-content-center">
            <form class="row g-3 was-validated" method="POST" action={{ route('articles.update', $article) }}>
                @csrf
                @method('PUT')
                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label h1-white-bold">Title:</label>
                    <input type="text" class="form-control" id="title" value="{{ $article->title }}" name="title" required>
                    <div class="invalid-feedback">
                        Please provide a title.
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom02" class="form-label h1-white-bold">Excerpt:</label>
                    <input type="text" class="form-control" id="excerpt" value="{{ $article->excerpt }}" name="excerpt" required>
                    <div class="invalid-feedback">
                        Please provide an excerpt.
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom02" class="form-label h1-white-bold">Body:</label>
                    <textarea type="text" class="form-input form-control" id="body" name="body" required>{{ $article->body }}</textarea>
                    <div class="invalid-feedback">
                        Please provide a body.
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>

            <form method="POST" action={{ route('articles.delete', $article) }}>
                @csrf
                @method('DELETE')
                <button class="btn btn-light" id="blog_buttons">Delete</button>
            </form>
        </div>
    </div>
@endsection
