@extends('layouts.layout_home')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')

<h1>Contactez-nous</h1>

<div class="ui grid">
<div class="two wide column"></div>
	<div class="twelve wide column">
		<div class="ui form success">
			<div class="two fields">
				<div class="field">
					<label>Nom</label>
					<input placeholder="John" type="text">
				</div>
				<div class="field">
					<label>Prenom</label>
					<input placeholder="Doe" type="text">
				</div>
			</div>
			<div class="field">
				<label>E-mail</label>
				<input type="email" placeholder="johndoe@schmoe.com">
			</div>
			<div class="field">
				<label>Object</label>
				<textarea rows="1"></textarea>
			</div>
			<div class="field">
				<label>Message</label>
				<textarea></textarea>
			</div>
			<div class="ui submit button">Envoi</div>
		</div>
	</div>
	<div class="four wide column"></div>
</div>




@endsection