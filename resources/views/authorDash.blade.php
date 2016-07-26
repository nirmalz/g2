@extends('layouts.app')

@section('content')

    <div class="col-md-5 col-sm-5">

        @include('partials.articleForm')

    </div>

    <div class="col-md-7 col-sm-7">

        @include('partials.articlesList')

    </div>


@stop