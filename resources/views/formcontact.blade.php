@extends('layouts.layout_home')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')

<div class="ui grid">
	<div class="three wide column"></div>
	<div class="ten wide column">
		
		
		<form action="/contact" method="POST">
			{{ csrf_field() }}
			 
			<input type="text" name="nom">
			<input type="text" name="mail">
			<textarea name="text" id="" cols="30" rows="10"></textarea>
			<button type="submit"></button>
		</form>
		
		<!-- </div> -->
	</div>
	<div class="four wide column"></div>
</div>

@endsection
