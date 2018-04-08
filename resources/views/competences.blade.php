@extends('layouts.layout_home')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')

	<div class="competences">Utilisation des langages de programmation PHP,SQL,Javascript,Css,HTML</div>
	<div class="competences">Utilisation des Progammes: SublimText,Node.js,Express.js</div>
	<div class="competences">Analyse d'un cahier des charges</div>
	<div class="competences">Utilisation des CMS et du Framework (
	<a href="http://getbootstrap.com/" target="_blank" style="color;white">Boostrap</a>,
	<a href="http://foundation.zurb.com/" target="_blank">Foundation</a>,
	<a href="http://semantic-ui.com/" target="_blank">Semantic</a>)
	</div> 

@endsection