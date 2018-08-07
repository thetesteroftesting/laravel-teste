@extends('layouts.app')
@section('content')
    <div class="text-center">
        <h1>Pytania walidacyjne:</h1>

    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center ">
                <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @csrf
                    <div class="questions">

                        {{--<div id="question-1" class="question question-select">--}}
                            {{--<div class="card text-white bg-primary mb-3" style="max-width: 100%;">--}}
                                {{--<div class="card-header">Pytanie 1</div>--}}
                                {{--<div class="card-body">--}}
                                    {{--<h5 class="card-title">A co to się stanęło?</h5>--}}
                                    {{--<p class="card-text">--}}

                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    </div>
                </form>
                @foreach($questions as $key => $question)
                    <div class="questions">
                        <div id="question-1" class="question question-select">
                            <div class="card text-white bg-primary mb-3" style="max-width: 100%;">
                                <div class="card-header">Pytanie {{ $key+1 }}</div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $question->text }}</h5>
                                    <p class="card-text">
                                        @foreach($question->options as $option)
                                            <small><input name="radio-option-{{ $question->id}}" type="radio" data-question-type="question-select" value="{{ $option->id }}">{{ $option->name }}</small><br>
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            var id;

            $.ajax({
                type: "POST",
                url: '/test/question/save/' . id,
                data: data,
            });

        });
    </script>
@endsection




















