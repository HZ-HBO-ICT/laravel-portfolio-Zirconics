@extends('layout')

@section('content')
    <main>

        <!-- Big title of dashboard page-->
        <div class="page-title">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h1 id="page-title-text">Dashboard</h1>
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

        <div class="dashboardContent">
            <div class="container">
                <div class="row g-4">

                    <!-- Table selection button -->
                    <div class="col-lg-12 justify-content-end">
                        <select onchange="show(value)" id="tableSelection" class="drpdwnTableSelection">
                            <option value="Quartile1">Quartile 1</option>
                            <option value="Quartile2">Quartile 2</option>
                            <option value="Quartile3">Quartile 3</option>
                            <option value="Quartile4">Quartile 4</option>
                            <option value="Other">Somewhere during year 1</option>
                        </select>

                        <!-- Div containing all tables -->
                        <div class="curriculumTables">

                            <!-- Talbe of first quartile -->
                            <div class="quartileOne">
                                <table class="table" id="Quartile1">
                                    <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Courses in Quartile 1</th>
                                        <th scope="col">EC</th>
                                        <th scope="col">Exam</th>
                                        <th scope="col">Grade</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Program & Career Orientation</td>
                                        <td>2.5</td>
                                        <td>Assessment</td>
                                        <td id="earnedGrade">9.8</td>
                                    </tr>
                                    <tr>
                                        <td>Computer Science Basics</td>
                                        <td>5</td>
                                        <td>Case Study</td>
                                        <td id="earnedGrade">7.7</td>
                                    </tr>
                                    <tr>
                                        <td>Programming Basics</td>
                                        <td>5</td>
                                        <td>Case Study</td>
                                        <td id="earnedGrade">9</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Table of second quartile -->
                            <div class="quartileTwo">
                                <table class="table" id="Quartile2" style="display: none">
                                    <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Courses in Quartile 2</th>
                                        <th scope="col">EC</th>
                                        <th scope="col">Exam</th>
                                        <th scope="col">Grade</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td rowspan="2">Object Oriented Programmming</td>
                                        <td rowspan="2">10</td>
                                        <td>Case Study</td>
                                        <td id="earnedGrade">9.5</td>
                                    </tr>
                                    <tr>
                                        <td>Project</td>
                                        <td id="earnedGrade">8.5</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Table of third quartile -->
                            <div class="quartileThree">
                                <table class="table" id="Quartile3" style="display: none">
                                    <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Courses in Quartile 3</th>
                                        <th scope="col">EC</th>
                                        <th scope="col">Exam</th>
                                        <th scope="col">Grade</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Framework Development 1</td>
                                        <td>5</td>
                                        <td>Case Study</td>
                                        <td id="earnedGrade">0</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">Framework Project 1</td>
                                        <td rowspan="3">7.5</td>
                                        <td>Project</td>
                                        <td id="earnedGrade">0</td>
                                    </tr>
                                    <tr>
                                        <td>Assessment</td>
                                        <td id="earnedGrade">0</td>
                                    </tr>
                                    <tr>
                                        <td>Report</td>
                                        <td id="earnedGrade">0</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Table of fourth quartile -->
                            <div class="quartileFour">
                                <table class="table" id="Quartile4" style="display: none">
                                    <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Courses in Quartile 4</th>
                                        <th scope="col">EC</th>
                                        <th scope="col">Exam</th>
                                        <th scope="col">Grade</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td rowspan="3">Framework Project 2</td>
                                        <td rowspan="3">10</td>
                                        <td>Portflio</td>
                                        <td id="earnedGrade">0</td>
                                    </tr>
                                    <tr>
                                        <td>Project</td>
                                        <td id="earnedGrade">0</td>
                                    </tr>
                                    <tr>
                                        <td>Assessment</td>
                                        <td id="earnedGrade">0</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Table containing all courses that are not quartile bound -->
                            <div class="Other">
                                <table class="table" id="Other" style="display: none">
                                    <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Somewhere during first year</th>
                                        <th scope="col">EC</th>
                                        <th scope="col">Exam</th>
                                        <th scope="col">Grade</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Personality 1</td>
                                        <td>1.25</td>
                                        <td>Portfolio</td>
                                        <td id="earnedGrade">0</td>
                                    </tr>
                                    <tr>
                                        <td>Personality 2</td>
                                        <td>1.25</td>
                                        <td>Portfolio</td>
                                        <td id="earnedGrade">0</td>
                                    </tr>
                                    <tr>
                                        <td>Personal Professional Development</td>
                                        <td>12.5</td>
                                        <td>Portfolio</td>
                                        <td id="earnedGrade">0</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection

@section('script')
    <script src="js/changeTable.js"></script>
@endsection
