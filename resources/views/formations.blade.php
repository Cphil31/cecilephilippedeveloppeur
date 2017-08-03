@extends('layouts.layout_home')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')

<h1>Page formations</h1>

<div class="ui stackatble grid">
	<div class="four wide Left floated right aligned column column">2016-2017</div>
	<div class="eight wide column">Formation de Web Développeur à l'école Simplon</div>
	<div class="four wide Right floated left aligned column column">Toulouse</div>
</div>

<div class="ui stackatble grid">
	<div class="four wide Left floated right aligned column column">2007 - 2008</div>
	<div class="eight wide column">Introduction au Droit Immobilier CNAM</div>
	<div class="four wide Right floated left aligned column column">Guadeloupe</div>
</div>

<div class="ui stackatble grid">
	<div class="four wide Left floated right aligned column column">2003</div>
	<div class="eight wide column">Baccalaurréat STT</div>
	<div class="four wide Right floated left aligned column column">Guadeloupe</div>
</div>


@endsection