@extends('layouts.layout_home')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')
<div class="ui grid">
	<div class="four wide column"></div>
	<div class="eight wide column">
		{!! Form::open(['url' => 'answer_contact', 'class' => "ui form"]) !!}
		{!! Form::label('nom', 'Nom : ') !!}
		{!! Form::text('nom') !!}
		{!! Form::label('nom', 'Prenom : ') !!}
		{!! Form::text('prenom') !!}
		{!! Form::label('email', 'E-mail : ') !!}
		{!! Form::email('email') !!}
		{!! Form::label('object', 'Object : ') !!}
		{!! Form::text('object') !!}
		{!! Form::label('Message', 'Message : ') !!}
		{!! Form::textarea('content') !!}
		{!! Form::submit('Envoyer !', ['class' => 'ui button','value' => 'Send']) !!}
		{!! Form::close() !!}
	</div>
	<div class="four wide column"></div>
</div>


@endsection