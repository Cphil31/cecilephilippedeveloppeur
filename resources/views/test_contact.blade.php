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
			{!! Form::open(['url' => 'users']) !!}
			        {!! Form::label('nom', 'Entrez votre nom : ') !!}
			        {!! Form::text('nom') !!}
			        {!! Form::submit('Envoyer !') !!}
			    {!! Form::close() !!}
  </div>
  <div class=" wide column"></div>
</div>

@endsection