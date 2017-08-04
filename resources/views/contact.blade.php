@extends('layouts.layout_home')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')

<div class="ui grid">
	<div class="two wide column"></div>
	<div class="twelve wide column">
		{{ Form::open(array('url' => 'foo/bar')) }}
    	echo Form::label('email', 'E-Mail Address');
		{{ Form::close() }}
	</div>
			
	<div class="four wide column"></div>
</div>
@endsection