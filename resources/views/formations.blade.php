@extends('layouts.layout_home')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')

<div class="formations">	
	<div class="ui grid">
		<div class="four wide column">2016-2017</div>
		<div class="nine wide column">Formation de Web Développeur à l'école Simplon</div>
		<div class="two wide column">Toulouse</div>
	</div>

	<div class="ui grid">
		<div class="four wide column">2007 - 2008</div>
		<div class="nine wide column">Introduction au Droit Immobilier CNAM</div>
		<div class="two wide column">Guadeloupe</div>
	</div>

	<div class="ui grid">
		<div class="four wide column">2003</div>
		<div class="nine wide column">Baccalaurréat STT</div>
		<div class="two wide column">Guadeloupe</div>
	</div>
</div>


@endsection