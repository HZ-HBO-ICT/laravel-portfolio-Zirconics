@extends('layout')

@section('content')
    <main>

        <!-- Big title of study choice blog page-->
        <div class="page-title">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h1 id="page-title-text">SWOT Analysis</h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">

            <button class="btn btn-light" id="blog_buttons" onclick="window.history.back()">Back </button>

            <div class="row g-4 justify-content-center">
                <div class="col-md-12">
                    <div class="card bg-light mb-3">
                        <div class="card-header">SWOT Analysis</div>
                        <div class="card-body">
                            <p class="card-text">
                                Strenghts: <br>
                                -perseverance (If I want something, then I try my best to achieve it) <br>
                                -Focused (can work for long time on 1 task/assignment) <br>
                                -Team player (besides working independently I can also work well in groups) <br> <br>

                                Weaknesses: <br>
                                -Too focused (too focused on 1 task, sometimes causing me to overlook other (smaller) tasks) <br>
                                -Too flexible towards uncooperative group members <br> <br>

                                Opportunities: <br>
                                -Learning lots in the field of ICT <br> <br>

                                Threats: <br>
                                -demotivated by group members (If i'm grouped with unmotivated students I tend to be less motivated) <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
