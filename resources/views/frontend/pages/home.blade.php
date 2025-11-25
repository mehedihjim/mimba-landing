@extends('frontend.layouts.app')

@section('title', config('app.name'))

@section('content')
    @include('frontend.components.hero')
    @include('frontend.components.about')
    @include('frontend.components.ecosystem')
@endsection
