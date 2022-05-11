@extends('layout')

@section('content')
    <main>

        <!-- Big title of ICT career blog page-->
        <div class="page-title">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h1 id="page-title-text">ICT career</h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">

            <button class="btn btn-light" id="blog_buttons" onclick="window.history.back()">Back </button>

            <div class="row g-4 justify-content-center">
                <div class="col-md-12">
                    <div class="card bg-light mb-3">
                        <div class="card-header">Hacker One</div>
                        <div class="card-body">
                            <p class="card-text">
                                HackerOne focusses a lot on cyber security,
                                HackerOne is a vulnerability coordination and bug bounty platform that connects businesses with penetration testers and cybersecurity researchers.
                                They do this to ensure that systems do not contain leaks. they have done this for Nintendo, PayPal,
                                Starbucks and even the Department of Defense in America, among others.The roles in the company are very divided.
                                For example, there are several groups that generally consist of eight people.
                                The various roles within the company involve:
                            <li>Engineer</li>
                            <li>Technical Director</li>
                            <li>Security Engineer</li>
                            <li>Security Consultant</li>
                            <li>Security Software Developer</li>
                            <li>Software Developer</li>
                            </p>

                            <p class="card-text">
                                During HackerOne's presentation, we were told what IT tools they used and what they were being used for.
                                On the client-side they use:
                            <li>React</li>
                            <li>Tailwind</li>
                            <li>Apollo</li>
                            </p>

                            <p class="card-text">
                                On the server-side they use:
                            <li>GraphQI</li>
                            <li>Ruby on Rails</li>
                            </p>

                            <p class="card-text">
                                To test their software they use:
                            <li>Rspec</li>
                            <li>Cucumber</li>
                            </p>

                            <p class="card-text">
                                And for their infrastructure they use:
                            <li>Postgres</li>
                            <li>Redis / Sidekiq</li>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
