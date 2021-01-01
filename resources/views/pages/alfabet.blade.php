@extends('layouts.default')


@section('title', 'Scheldwoorden - '.$letter)


@section('description')
Alle Nederlandse scheldwoorden op alfabetische volgorde. Dit zijn alle scheldwoorden beginnend met een {{ $letter }}
@stop



@section('body')
<div class="jumbotron">
  <div class="container">
    <h1>Scheldwoorden beginnend met {{ ucfirst($letter) }}</h1>
  </div>
</div>



<div class="container">
    <nav>
        <ul class="pagination">
            @foreach($alfabet as $alfa)
            <li class="page-item"><a class="page-link" href="{{ URL::route('alfabet', ['letter' => $alfa->letter]) }}" title="Scheldwoorden beginnend met {{ strtolower($alfa->letter) }}">{{ strtolower($alfa->letter) }}</a></li>
            @endforeach
        </ul>
    </nav>
</div>



<div class="container alfabetical">
	@foreach($words as $word)
	<a href="{{ URL::route('alfabet', ['letter' => $letter, 'word' => urlencode(strtolower($word->word))]) }}" title="Het scheldwoord {{ $word->word }}">{{ ucfirst($word->word) }}</a><br>
	@endforeach
</div>
@stop



@section('footer')

@stop



@section('foot')

@stop
