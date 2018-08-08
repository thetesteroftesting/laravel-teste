@extends('question.create')
@section('question')
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
@endsection