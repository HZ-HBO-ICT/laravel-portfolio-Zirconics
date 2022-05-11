@extends('layout')
@section('content')

    <!-- Big title of article creation page-->
    <div class="page-title">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 id="page-title-text">Create a new article</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <a href={{ route('articles.index') }}><button class="btn btn-light" id="blog_buttons">Cancel</button></a>
        <div class="row g4 justify-content-center">
            <form class="row g-3 was-validated" method="POST" action={{ route('articles.index') }}>
                @csrf
                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label h1-white-bold">Title:</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" required>
                    <div class="invalid-feedback">
                        Please provide a title.
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom02" class="form-label h1-white-bold">Excerpt:</label>
                    <input type="text" class="form-control" id="excerpt" placeholder="Enter excerpt" name="excerpt" required>
                    <div class="invalid-feedback">
                        Please provide an excerpt.
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom02" class="form-label h1-white-bold">Body:</label>
                    <textarea type="text" class="form-control form-input" id="body" placeholder="Enter body" name="body" required></textarea>
                    <div class="invalid-feedback">
                        Please provide a body.
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>
@endsection

