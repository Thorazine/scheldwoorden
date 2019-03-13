@extends('layouts.default')


@section('title', 'Scheldwoorden')


@section('description')
Een aan Nederlandse scheldwoorden toegewijde website voor plezier of als programmeer resource
@stop



@section('body')
<div class="jumbotron">
  <div class="container">
  	<p>Scheldwoord van de dag:</p>
    <h1>{{ ucwords($word->word) }}</h1>
  </div>
</div>

<div class="container">
	<!-- Example row of columns -->
	<div class="row">

        @foreach($alfabet as $row)
            <div class="col-md-4">
                <a href="{{ URL::route('alfabet', ['letter' => $row->letter]) }}" title="Scheldwoorden beginnend met een {{ $row->letter }}">Scheldwoorden beginnend met {{ ucfirst($row->letter) }}</a>
            </div>
        @endforeach
	</div>
</div>
@stop



@section('footer')

@stop



@section('foot')

@stop
