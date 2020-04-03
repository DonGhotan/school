@extends('layouts.master')

@section('navbar')
    @include('elements.navbar')
@endsection
@section('slider')
    @include('elements.carousel')
@endsection

@section('content')
    @component('components.news',['news'=>$news])

    @slot('title')
        Actualités
    @endslot
    {{ $news->links() }}
    @endcomponent
@endsection
