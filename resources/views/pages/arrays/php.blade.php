@extends('layouts.default')


@section('title')
Scheldwoorden in een php array
@stop
@section('description')
Een volledigde selectie van Nederlandse scheldwoorden in een PHP array als resource voor een scheldwoordenfilter
@stop


@section('head')

@stop



@section('header')

@stop



@section('body')
<div class="container">
	<h1>Scheldwoorden in een PHP array</h1>

	<p>Meer dan eens komt het voor dat jij of je klant een scheldwoorden filter op bepaalde content wil hebben.
	Of dit nou via een crawl of via invoer gebeurd, het is belangrijk dat er een degelijke filter op staat om
	de brand te beschermen</p>

	<p>Na hier zelf behoefte aan te hebben gehad zonder openbaar resultaat te vinden, heb ik besloten mijn
	rescources online te zetten voor gelijksoortigen.</p>

	<p>Succes ermee</p>

	<p class="marginTop20">De volledige array:</p>
	<div class="code">
		<code>
			&lt;?php
			return array(
			@foreach($words as $word)
				{{ addslashes($word) }}',
			@endforeach
			);
			?&gt;
		</code>
	</div>
	<p class="marginTop20">Importeer de array vanuit een file als volgt:</p>
	<code>
		$array = include('file.php');
	</code>
</div>

@stop



@section('footer')

@stop



@section('foot')

@stop
