@extends('layouts.layout_home')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')

<h1>Test contact</h1>
<div class="ui grid">
	<div class="four wide column"></div>
	<div class="eight wide column">
		{!! Form::open(['url' => 'formcontact', 'class' => "ui form"]) !!}
		{!! Form::label('nom', 'Nom : ') !!}
		{!! Form::text('nom') !!}
		{!! Form::label('nom', 'Prenom : ') !!}
		{!! Form::text('prenom') !!}
		{!! Form::label('email', 'E-mail : ') !!}
		{!! Form::email('email') !!}
		{!! Form::label('object', 'Object : ') !!}
		{!! Form::text('Object') !!}
		{!! Form::label('Message', 'Message : ') !!}
		{!! Form::textarea('Message') !!}
		{!! Form::submit('Envoyer !', ['class' => 'ui button']) !!}
		{!! Form::close() !!}
	</div>
	<div class=" wide column"></div>
</div>

@endsection