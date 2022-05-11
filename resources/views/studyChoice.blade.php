@extends('layout')

@section('content')
    <main>

        <!-- Big title of study choice blog page-->
        <div class="page-title">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h1 id="page-title-text">Study Choice</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <button class="btn btn-light" id="blog_buttons" onclick="window.history.back()">Back </button>

            <!-- Before the study card -->
            <div class="row g-4 justify-content-center">
                <div class="col-md-12">
                    <div class="card bg-light mb-3">
                        <div class="card-header">Before the study</div>
                        <div class="card-body">
                            <p class="card-text">
                                Before I started my study at HZ I visited several schools including HZ(HBO-ICT) and Avans(Informatics / Technical Informatics).
                                Besides visiting I also made several online study choice tests and tried to do some programming myself.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Why I chose this study card -->
            <div class="row g-4 justify-content-center">
                <div class="col-md-12">
                    <div class="card bg-light mb-3">
                        <div class="card-header">Why I chose this study</div>
                        <div class="card-body">
                            <p class="card-text">
                                I chose HBO-ICT because I have always been interested in how computers and the programs on them work.
                                I like to find out how the different components work together and to play around with this.
                                Then I like to see what can be made with it all. I have also tried to make small games with the help of YouTube tutorials.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- After the study card -->
            <div class="row g-4 justify-content-center">
                <div class="col-md-12">
                    <div class="card bg-light mb-3">
                        <div class="card-header">After completing the study</div>
                        <div class="card-body">
                            <p class="card-text">
                                What I want to do after college is not entirely clear to me yet.
                                I am interested in software development, game development and Business IT Consultant.
                                In the next four years I hope to have learned enough so that I can pursue one of the previously mentioned professions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
