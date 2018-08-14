@extends('layouts.app')
@section('content')
    {{--<div class="container-fluid">--}}
    {{--<div class="row align-content-center">--}}
    {{--<div class="col-md-8 offset-md-2">--}}
    {{--<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">--}}
    {{--<div class="carousel-inner">--}}
    {{--<div class="carousel-item active">--}}
    {{--<img class="d-block w-100" src="https://upload.wikimedia.org/wikipedia/commons/a/a7/Blank_scan_image.jpg" alt="First slide">--}}
    {{--</div>--}}
    {{--<div class="carousel-item">--}}
    {{--<img class="d-block w-100" src="https://upload.wikimedia.org/wikipedia/commons/a/a7/Blank_scan_image.jpg" alt="Second slide">--}}
    {{--</div>--}}
    {{--<div class="carousel-item">--}}
    {{--<img class="d-block w-100" src="https://upload.wikimedia.org/wikipedia/commons/a/a7/Blank_scan_image.jpg" alt="Third slide">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">--}}
    {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
    {{--<span class="sr-only">Previous</span>--}}
    {{--</a>--}}
    {{--<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">--}}
    {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
    {{--<span class="sr-only">Next</span>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--@switch($question->question_type)--}}
    {{--@case('select')--}}

    {{--@break--}}
    {{--@case('multiple')--}}

    {{--@break--}}
    {{--@case('assign')--}}

    {{--@break--}}

    {{--@endswitch--}}

    <div class="container-fluid">
        <div class="row align-content-center">
            <div class="col-md-8 offset-md-2">

                <div id="carousele" class="carousel" data-ride="carousel">
                    <div class="carousel-inner">
                        {{--@php--}}
                        {{--dd($questions);--}}
                        {{--@endphp--}}

                        @foreach($questions as $key => $question)
                            <div class="carousel-item @if($question->id == 1) active @endif">
                                <div class="question-title text-center m-auto">
                                    <h4>{{ $question->text }}</h4>
                                </div>
                                <hr>
                                <div class="question-options">


                                        @if($question->question_type == 'select')
                                            <div class="radio">
                                                @foreach($question->options as $k => $option)
                                                <label class="btn btn-outline-info btn">
                                                    <input type="radio" name="option" value="{{ $option->id }}">
                                                    {{ $option->name }}
                                                </label>
                                                @endforeach
                                            </div>
                                        @endif


                                        @if($question->question_type == 'multiple')
                                            <div class="checkbox">
                                                @foreach($question->options as $k => $option)
                                                <label class="form-control btn-outline-info">
                                                    <input type="checkbox" value="{{ $option->id }}">
                                                    {{ $option->name }}
                                                </label>
                                                @endforeach
                                            </div>
                                        @endif


                                        @if($question->question_type == 'match')


                                        @endif


                                        @if($question->question_type == 'truefalse')

                                        @endif

                                    <button id="button-question_number-{{ $question->question_number }}" class="btn btn-block btn-outline-success">Akceptuj</button>

                                </div>
                            </div>
                        @endforeach

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <script>
        $('#carousele').carousel({
            interval: false,
        })
    </script>
@endsection



















