@extends('question.create')
@section('question')
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
@endsection