@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" id="create-form">
                <h2>Tworzenie nowego pytania</h2>
                <hr>
                <br>
                <form action="{{ route('questions.store') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="question_number"
                               class="col-md-2 col-form-label text-md-right">{{ __('question_number') }}</label>
                        <div class="col-md-10">
                            <input id="question_number" type="text"
                                   class="form-control{{ $errors->has('question_number') ? ' is-invalid' : '' }}"
                                   name="question_number" value="{{ old('question_number') }}" required autofocus>

                            @if ($errors->has('question_number'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('question_number') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="text" class="col-md-2 col-form-label text-md-right">{{ __('text') }}</label>
                        <div class="col-md-10">
                            <textarea id="text" type="text"
                                      class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}" name="text"
                                      value="{{ old('text') }}" required autofocus></textarea>

                            @if ($errors->has('text'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="question_type"
                               class="col-md-2 col-form-label text-md-right">{{ __('question_type') }}</label>

                        <div class="col-md-10">
                            {{--<select name="question_type" id="question_type" type="text"--}}
                                    {{--class="custom-select custom-select-lg mb-3 {{ $errors->has('question_type') ? ' is-invalid' : '' }} "--}}
                                    {{--required autofocus>--}}
                                {{--<option value="open">Otwarte</option>--}}
                                {{--<option value="one">Jedna prawidłowa odpowiedź</option>--}}
                                {{--<option value="multiple">Wielokrotny wybór</option>--}}
                                {{--<option value="truefalse">Prawda/Fałsz</option>--}}
                                {{--<option value="sorted">Przyporządkowanie odpowiedzi</option>--}}
                                {{--<option value="rank">Rangowanie odpowiedzi</option>--}}
                            {{--</select>--}}

                            {{--@if ($errors->has('question_type'))--}}
                                {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('question_type') }}</strong>--}}
                                    {{--</span>--}}
                            {{--@endif--}}




                            {{-- ADD QUESTION OPTION--}}

                            <h4 class="mt-5">Odpowiedzi</h4>
                            <hr>

                            <div id="question-options-container">

                                <label for="question-option"
                                       class="col-md-2 col-form-label text-md-right">{{ __('question-option') }}</label>
                                <div class="form-group row col-md-10" id="question-option">
                                    <textarea name="q-open-option" id="" rows="8" class="form-control" required></textarea>
                                </div>

                                <label for="question-description"
                                       class="col-md-2 col-form-label text-md-right">{{ __('question-description') }}</label>
                                <div class="form-group row col-md-10 " id="question-description" required>
                                    <textarea name="q-open-description" id="" rows="8" class="form-control bg-warning"></textarea>
                                </div>


                            </div>

                            <hr class="mt-5">
                            <button class="form-control btn-dark">Dodaj Pytanie</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#question_type').change(function () {
                console.log($(this).val());

            });
        });

    </script>


@endsection
