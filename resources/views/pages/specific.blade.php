@extends('layouts.default')


@section('title')
Scheldwoorden - {{ $word }}
@stop
@section('description')
{{ $word }} is een Nederlands scheldwoord uit het overzicht van scheldwoorden
@stop


@section('head')

@stop



@section('header')

@stop



@section('body')
<div class="jumbotron">
  <div class="container">
    <h1>{{ ucfirst(strtolower($word)) }}</h1>
  </div>
</div>

@stop



@section('footer')

@stop



@section('foot')

@stop