@extends('layouts.layout_home')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')
<div class="ui grid">
	<div class="four wide column"></div>
	<div class="eight wide column">

		<form class="ui form">

			<div class="two fields">
				<div class="field">
					<label>First Name</label>
					<input type="text" name="first-name" placeholder="First Name">
				</div>
				<div class="field">
					<label>Last Name</label>
					<input type="text" name="last-name" placeholder="Last Name">
				</div>
			</div>
			
			<div class="field">
				<label>Object</label>
				<textarea rows="1"></textarea>
			</div>
			<div class="field">
				<label>Message</label>
				<textarea></textarea>
			</div>
			<button class="ui button" type="submit">Submit</button>
		</form>

	</div>
	<div class="four wide column"></div>
</div>


@endsection