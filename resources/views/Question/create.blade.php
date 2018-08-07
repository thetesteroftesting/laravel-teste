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
                        <label for="description"
                               class="col-md-2 col-form-label text-md-right">{{ __('description') }}</label>
                        <div class="col-md-10">
                            <textarea id="description" type="description"
                                      class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                      name="description" value="{{ old('description') }}" required autofocus></textarea>
                            @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="question_type"
                               class="col-md-2 col-form-label text-md-right">{{ __('question_type') }}</label>

                        <div class="col-md-10">
                            <select name="question_type" id="question_type" type="text"
                                    class="custom-select custom-select-lg mb-3 {{ $errors->has('question_type') ? ' is-invalid' : '' }} "
                                    required autofocus>
                                <option value="open">Otwarte</option>
                                <option value="one">Jedna prawidłowa odpowiedź</option>
                                <option value="multiple">Wielokrotny wybór</option>
                                <option value="truefalse">Prawda/Fałsz</option>
                                <option value="sorted">Przyporządkowanie odpowiedzi</option>
                                <option value="rank">Rangowanie odpowiedzi</option>
                            </select>

                            @if ($errors->has('question_type'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('question_type') }}</strong>
                                    </span>
                            @endif


                            {{-- ADD QUESTION OPTION--}}
                            <h4>Odpowiedzi</h4>
                            <hr>
                            <div id="question-options-container">

                                <div class="form-group row" id="new-option-1">
                                    <label for="option"
                                           class="col-md-2 col-form-label text-md-right">{{ __('option') }}</label>
                                    <div class="col-md-10">
                                        <textarea id="description" type="description"
                                                  class="form-control{{ $errors->has('option') ? ' is-invalid' : '' }}"
                                                  name="option" value="{{ old('option') }}" required
                                                  autofocus></textarea>
                                        <button id="remove-option" class="form-control btn btn-danger">X</button>
                                        @if ($errors->has('option'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('option') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <button id="add-option" class="form-control btn btn-info">Dodaj nową odpowiedź</button>
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
                switch ($(this).val()) {
                    case 'open':
                        $('question-options-container').append(openHTML);
                        break;

                    case 'one':
                        $('question-options-container').append(oneHTML);
                        break;

                    case 'multiple':
                        $('question-options-container').append(multipleHTML);
                        break;

                    case 'truefalse':
                        $('question-options-container').append(truefalseHTML);
                        break;

                    case 'sorted':
                        $('question-options-container').append(sortedHTML);
                        break;

                    case 'rank':
                        $('question-options-container').append(rankHTML);
                        break;

                }
            });
        });

    </script>
@endsection
