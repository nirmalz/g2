@extends('layouts.app')

@section('content')

    <div class="col-md-5 col-sm-5">

        @include('partials.authorForm')

    </div>

    <div class="col-md-7 col-sm-7">

        @include('partials.authorsList')

    </div>


@stop