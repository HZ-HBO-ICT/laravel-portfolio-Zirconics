@extends('layout')

@section('content')
    <main>

        <!-- Big title of Blog page-->
        <div class="page-title">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h1 id="page-title-text">Blog</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog posts -->
        <div class="container">
            <div class="row g4 justify-content-center">

                <!-- Study Choice blog post -->
                <div class="col-md-4">
                    <div class="card bg-light mb-3">
                        <div class="card-header">Study Choice</div>
                        <img class="card-img-top" src="/img/studyChoice.jpg" alt="Study Choice">
                        <div class="card-body">
                            <p class="card-text">
                                <a href="Study-Choice" class="text-link-hover-black">See more...</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- SWOT Analyse blog post -->
                <div class="col-md-4">
                    <div class="card bg-light mb-3">
                        <div class="card-header">SWOT Analysis</div>
                        <img class="card-img-top" src="/img/swot.jpg" alt="SWOT Analysis">
                        <div class="card-body">
                            <p class="card-text">
                                <a href="Swot-Analyse" class="text-link-hover-black">See more...</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Programming exprerience blog post -->
                <div class="col-md-4">
                    <div class="card bg-light mb-3">
                        <div class="card-header">Programming experience</div>
                        <img class="card-img-top" src="/img/progExp.jpg" alt="programming experience">
                        <div class="card-body">
                            <p class="card-text">
                                <a href="Programming-Experience" class="text-link-hover-black">See more...</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- First feedback blog post -->
                <div class="col-md-4">
                    <div class="card bg-light mb-3">
                        <div class="card-header">First feedback</div>
                        <img class="card-img-top" src="/img/feedback.png" alt="Feedback">
                        <div class="card-body">
                            <p class="card-text">
                                <a href="First-Feedback" class="text-link-hover-black">See more...</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- ICT career blog post -->
                <div class="col-md-4">
                    <div class="card bg-light mb-3">
                        <div class="card-header">ICT career</div>
                        <img class="card-img-top" src="/img/career.jpg" alt="Career">
                        <div class="card-body">
                            <p class="card-text">
                                <a href="ICT-Career" class="text-link-hover-black">See more...</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>
@endsection
