@extends('layout')
@section('content')
    <main>

        <!-- Big title of dashboard page-->
        <div class="page-title">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h1 id="page-title-text">Grades</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row g4">
                <!-- side navbar dashboard -->
                <div class="dark-Sidenav col-lg-2 d-none d-lg-block">
                    <span class="sidenav-title">List of handy links</span>
                    <div>
                        <ul class="sidenav-links">
                            <li class="sidenav-item">
                                <a class="sideNav-button" href="https://github.com/Zirconics">Github</a>
                            </li>
                            <li class="sidenav-item">
                                <a class="sideNav-button" href="https://portal.hz.nl/">MyHZ</a>
                            </li>
                            <li class="sidenav-item">
                                <a class="sideNav-button" href="https://learn.hz.nl/my/">HZ Learn</a>
                            </li>
                            <li class="sidenav-item">
                                <a class="sideNav-button" href="https://github.com/HZ-HBO-ICT">Github HZ</a>
                            </li>
                            <li class="sidenav-item">
                                <a class="sideNav-button" href="https://apps.hz.nl/angular/studievoortgang/studiestatus">My Study
                                    Progress</a>
                            </li>
                            <li class="sidenav-item">
                                <a class="sideNav-button"
                                   href="https://hz.nl/uploads/documents/Regelingen/NL/Onderwijs-examenregelingen/OER-HZ-2021-2022-BaDEF19-8-2021naBDT13-7-21-Nvdw.pdf">OER
                                    HZ</a>
                            </li>
                            <li class="sidenav-item">
                                <a class="sideNav-button"
                                   href="https://hz.nl/uploads/documents/Regelingen/NL/Onderwijs-examenregelingen/11.-Uitvoeringsregeling-OER-ICT-Voltijd-2021-2022.pdf">IR
                                    HZ</a>
                            </li>
                            <li class="sidenav-item">
                                <a class="sideNav-button"
                                   href="https://teams.microsoft.com/l/team/19%3a827654897ab746089c081f24aff1c984%40thread.skype/conversations?groupId=337e8cca-f67d-4132-9fa9-b0c761bbeb94&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">Teams</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Div containing the NBSA progress bar -->
                <div class="col-lg-8 progress-bar-position">
                    <h1 class="h1-white-bold">NBSA</h1>
                    <div class="progress" style="width: 75%;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="45"
                             aria-valuemin="0" aria-valuemax="45" style="width: 100%;">45 EC's are needed to pass</div>
                    </div>

                    <h1 class="h1-white-bold">Study progress</h1>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 41.6%;"
                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="60"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container grades-list">
            <a href={{ route('grades.create') }}><button class="btn btn-light" id="blog_buttons">Create</button></a>
            <hr>
            <div class="row g4 justify-content-center">

                @foreach($grades as $grade)
                    <div class="col-md-4 grades">
                        <div class="card bg-light mb-3">
                            <div class="card-header">
                                <a class="text-link-hover-black" href="{{ route('grades.show', $grade) }}">{{ $grade->course_name }}</a>
                            </div>
                            <div class="card-body">
                                <p>{{ $grade->test_name }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </main>
@endsection
@section('script')
    <script src="js/changeTable.js"></script>
@endsection
