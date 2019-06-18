@extends('index')

@section('content')

    @include('partials.nav')
    
    @component('partials.title')
        Page A
    @endcomponent

@endsection