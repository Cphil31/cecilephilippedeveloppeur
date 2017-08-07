@extends('layouts.layout_home')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')
<div class="ui grid">
	<div class="three wide column"></div>
	<div class="ten wide column">
		<div class="textcontact">
			<a href="https://rawgit.com/Cphil31/cecilephilippedeveloppeur/master/resources/views/cv.CECILE.Philippe.pdf" download="Curriculum_Vitae_CECILE_Philippe">Telechargez mon Cv en PDF</a>
		</div>
		{!! Form::open(['url' => 'answer_contact', 'class' => "ui form"]) !!}
		<div class="two fields"> 
			<div class="field">
				{!! Form::label('nom', 'Nom :') !!}
				{!! Form::text('nom') !!}
			</div>
			<div class="field">
				{!! Form::label('nom', 'Prenom :') !!}
				{!! Form::text('prenom') !!}
			</div>
		</div>
		<div class="field">
			{!! Form::label('email', 'E-mail : ') !!}
			{!! Form::email('email') !!}
		</div>
		<div class="field">
			{!! Form::label('object', 'Object : ') !!}
			{!! Form::text('object') !!}
		</div>
		<div class="field">
			{!! Form::label('Message', 'Message : ') !!}
			{!! Form::textarea('content') !!}
		</div>
		{!! Form::submit('Envoyer !', ['class' => 'ui button','value' => 'Send']) !!}
		{!! Form::close() !!}
	</div>
	<div class="four wide column"></div>
</div>


@endsection