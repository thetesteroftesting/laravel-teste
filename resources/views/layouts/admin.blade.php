@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                @include('partials.menu_admin')
            </div>
            <div class="col-md-8 col-sm-12">
                @yield('adminContent')
            </div>
        </div>
    </div>
@endsection