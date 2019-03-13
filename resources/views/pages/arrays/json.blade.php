@extends('layouts.default')


@section('title')
Scheldwoorden in een json array
@stop
@section('description')
Een volledigde selectie van Nederlandse scheldwoorden in een JSON array als resource voor een scheldwoordenfilter
@stop


@section('head')

@stop



@section('header')

@stop



@section('body')
<div class="container">
	<h1>Scheldwoorden in een Json array</h1>

	<p>Meer dan eens komt het voor dat jij of je klant een scheldwoorden filter op bepaalde content wil hebben.
	Of dit nou via een crawl of via invoer gebeurd, het is belangrijk dat er een degelijke filter op staat om
	de brand te beschermen</p>

	<p>Na hier zelf behoefte aan te hebben gehad zonder openbaar resultaat te vinden, heb ik besloten mijn
	rescources online te zetten voor gelijksoortigen.</p>

	<p>Succes ermee</p>

	<p class="marginTop20">De volledige array:</p>
	<div class="code">
		<code>
			{{ json_encode($words) }}
		</code>
	</div>
	<p class="marginTop20">Een url waarop de JSON string altijd up-to-date is:</p>
	<a href="{{ asset('json/scheldwoorden.json') }}" target="_new">{{ asset('json/scheldwoorden.json') }}</a>
</div>

@stop



@section('footer')

@stop



@section('foot')

@stop