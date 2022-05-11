@extends('layout')

@section('content')
    <main>

        <!-- Big title of First feedback blog page-->
        <div class="page-title">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h1 id="page-title-text">First feedback</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <button class="btn btn-light" id="blog_buttons" onclick="window.history.back()">Back </button>

            <div class="row g-4 justify-content-center">
                <div class="col-md-12">
                    <div class="card bg-light mb-3">
                        <div class="card-header">Daphne's feedback</div>
                        <div class="card-body">
                            <p class="card-text">
                                From reading this, you know very well what attracts you to ICT.
                                Is game development also something that attracts you extra to do or was that more hobby and see if you could pull it off?
                                I see that you did a year of HBO information at Avans. Was that through the AD or a full-time HBO course?
                                and what makes you make a switch to us?
                            </p>

                            <p class="card-text">
                                You indicate that you can be too lenient towards group members who are less motivated for their studies.
                                I then read, you let the situation take its course and are less likely to take action to stand up for yourself, is that right?
                            </p>

                            <p class="card-text">
                                You never know what kind of group you will end up in but what are actions that can be done in the team so that all noses and expectations match?
                                What could you do yourself to ensure that it doesn't affect your study results and motivation?
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-12">
                    <div class="card bg-light mb-3">
                        <div class="card-header">My opinion</div>
                        <div class="card-body">
                            <p class="card-text">
                                After I read the feedback, I found that some points came across differently than I had initially intended.
                                This is because I mentioned some points but did not elaborate on them, which led to miss-communication.
                                In spite of this, there were some remarks that I could use.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
