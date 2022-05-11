@extends('layout')

@section('content')
    <main>

        <!-- Big title of FaQ page-->
        <div class="page-title">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h1 id="page-title-text">FaQ</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Accordion with Frequently Asked Questions -->
        <div class="container accordion-container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="accordion accordion-flush" id="accordionFlushExample">

                        @foreach($faqs as $faqIndex => $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading{!! $faq->bootstrap_index !!}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapse{!! $faq->bootstrap_index !!}"
                                            aria-expanded="false" aria-controls="flush-collapse{!! $faq->bootstrap_index !!}">
                                        {{ $faq->question }}
                                    </button>
                                </h2>
                                <div id="flush-collapse{!! $faq->bootstrap_index !!}" class="accordion-collapse collapse" aria-labelledby="flush-heading{!! $faq->bootstrap_index !!}"
                                     data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        {!! $faq->answer !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        {{--                    <div class="accordion-item">--}}
                        {{--                        <h2 class="accordion-header" id="flush-headingOne">--}}
                        {{--                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
                        {{--                                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">--}}
                        {{--                                Q: How do you print a document here at the HZ?--}}
                        {{--                            </button>--}}
                        {{--                        </h2>--}}
                        {{--                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"--}}
                        {{--                             data-bs-parent="#accordionFlushExample">--}}
                        {{--                            <div class="accordion-body">--}}
                        {{--                                <li>Go to <a href="http://print.hz.nl/">print.hz.nl</a> and login.</li>--}}
                        {{--                                <li>Here you can choose which file(s) by clicking on "Choose File" (This step can be repeated to add--}}
                        {{--                                    more documents).</li>--}}
                        {{--                                <li>By clicking on the "Advanced options" button you can specify whether your document will be printed--}}
                        {{--                                    in color or is double-sided.</li>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}

                        {{--                    <div class="accordion-item">--}}
                        {{--                        <h2 class="accordion-header" id="flush-headingTwo">--}}
                        {{--                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
                        {{--                                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">--}}
                        {{--                                Q: How do you scan a document and send it to your laptop here at the HZ?--}}
                        {{--                            </button>--}}
                        {{--                        </h2>--}}
                        {{--                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"--}}
                        {{--                             data-bs-parent="#accordionFlushExample">--}}
                        {{--                            <div class="accordion-body">--}}
                        {{--                                <ol>--}}
                        {{--                                    <li>Make sure you have a sufficient amount of money on your HZ card. Although scanning is free, you--}}
                        {{--                                        must have this amount of credit on your HZ pass.</li>--}}
                        {{--                                    <li>Register using your HZ pass on the RFID reader next to the printer.</li>--}}
                        {{--                                    <li>In the printer menu, select option Scan.</li>--}}
                        {{--                                    <li>Place the original sheet on the feeder or glass plate.</li>--}}
                        {{--                                    <li>Press Scan and Send.</li>--}}
                        {{--                                    <li>Press Scan to me.</li>--}}
                        {{--                                    <li>Press Yes.</li>--}}
                        {{--                                    <li>Press the Start button.</li>--}}
                        {{--                                    <li>Press the green Start button on the printer to scan page by page. Once this is ready, press--}}
                        {{--                                        Start Sending.</li>--}}
                        {{--                                </ol>--}}
                        {{--                                <p>When scanning is finished you can logout.</p>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="accordion-item">--}}
                        {{--                        <h2 class="accordion-header" id="flush-headingThree">--}}
                        {{--                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
                        {{--                                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">--}}
                        {{--                                Q: What should you do if you are sick or have symptoms of corona virus?--}}
                        {{--                            </button>--}}
                        {{--                        </h2>--}}
                        {{--                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"--}}
                        {{--                             data-bs-parent="#accordionFlushExample">--}}
                        {{--                            <div class="accordion-body">--}}
                        {{--                                If you are sick or have corona symptoms you absolutely must not come to school and notify your teacher--}}
                        {{--                                through Teams.--}}
                        {{--                                Make sure you continue to attend all classes to avoid falling behind. You can also get tested for--}}
                        {{--                                Covid-19 at the GGD.--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="accordion-item">--}}
                        {{--                        <h2 class="accordion-header" id="flush-headingFour">--}}
                        {{--                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
                        {{--                                    data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">--}}
                        {{--                                Q: How can you book a project space in one of the wings of the building?--}}
                        {{--                            </button>--}}
                        {{--                        </h2>--}}
                        {{--                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"--}}
                        {{--                             data-bs-parent="#accordionFlushExample">--}}
                        {{--                            <div class="accordion-body">--}}
{{--                                                        You can book a project space by going to <a href="https://portal.hz.nl/">portal.hz.nl</a> and clicking--}}
{{--                                                        on "Selfservice Portal" in your personal menu.--}}
{{--                                                        When logged into the Selfservice Portal click on "Make a reservation" and then click on the type of--}}
{{--                                                        space you want to book.--}}
{{--                                                        You will then be taken to a schedule where you can see when each room is available. Here you can also--}}
{{--                                                        book rooms when they are not occupied.--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="accordion-item">--}}
                        {{--                        <h2 class="accordion-header" id="flush-headingFive">--}}
                        {{--                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"--}}
                        {{--                                    data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">--}}
                        {{--                                Q: What are the instructions for parking your car in the HZ parking lot?--}}
                        {{--                            </button>--}}
                        {{--                        </h2>--}}
                        {{--                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"--}}
                        {{--                             data-bs-parent="#accordionFlushExample">--}}
                        {{--                            <div class="accordion-body">--}}
{{--                                                        If you have a HZ student pass you can park your car at the following address: Poelendaelesingel, 4335--}}
{{--                                                        JA Middelburg.--}}
{{--                                                        You can enter the parking lot by scanning your HZ student pass at the entrance.--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                    </div>
                </div>

            </div>
        </div>


    </main>
@endsection
