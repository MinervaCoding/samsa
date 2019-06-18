@extends('index')

@section('content')

    @include('partials.nav')
    
    @component('partials.title')
        Page B
    @endcomponent

@endsection