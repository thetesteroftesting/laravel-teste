@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center align-items-center align-content-center">
                <h2>Tworzenie nowego pytania</h2>
                <hr>
                <br>
                <form action="{{ route('questions.store') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="question_number"
                               class="col-md-4 col-form-label text-md-right">{{ __('question_number') }}</label>
                        <div class="col-md-6">
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
                        <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('text') }}</label>
                        <div class="col-md-6">
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
                               class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>
                        <div class="col-md-6">
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
                               class="col-md-4 col-form-label text-md-right">{{ __('question_type') }}</label>

                        <div class="col-md-6">
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
                                           class="col-md-4 col-form-label text-md-right">{{ __('option') }}</label>
                                    <div class="col-md-6">
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
        var html = '<div class="form-group row" id="new-option-' + optionsQuantity + '">\n' +
            '                                    <label for="option"\n' +
            '                                           class="col-md-4 col-form-label text-md-right">{{ __(\'option\') }}</label>\n' +
            '                                    <div class="col-md-6">\n' +
            '                                        <textarea id="description" type="description"\n' +
            '                                                  class="form-control{{ $errors->has(\'option\') ? \' is-invalid\' : \'\' }}"\n' +
            '                                                  name="option" value="{{ old(\'option\') }}" required\n' +
            '                                                  autofocus></textarea>\n' +
            '                                        <button id="remove-option" class="form-control btn btn-danger">X</button>\n' +
            '                                        @if ($errors->has(\'option\'))\n' +
            '                                            <span class="invalid-feedback" role="alert">\n' +
            '                                        <strong>{{ $errors->first(\'option\') }}</strong>\n' +
            '                                    </span>\n' +
            '                                        @endif\n' +
            '                                    </div>\n' +
            '                                </div>';
        var optionsQuantity = 1;

        $(document).ready(function () {
            $('#add-option').click(function () {
                var lastOptionID = '#new-option-' + optionsQuantity;

                $(lastOptionID).after();

                optionsQuantity++;
            });
        });
    </script>
@endsection
