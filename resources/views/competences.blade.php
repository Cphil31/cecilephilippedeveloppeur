@extends('layouts.layout_home')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')

<h1>Page des compétences</h1>

<div class="ui list">
	<div class="listedem">Utilisation des langages de programmation Html,Css,JavaScript,réact,Php</div>
	<div class="listedem">Utilisation des Progammes: SublimText,Node.js,Express.js, Pomodoro timer , Trello</div>
	<div class="item">Analyse d'un cahier des charges</div>
	<div class="item">Utilisation des CMS et du Framework (<a href="http://getbootstrap.com/">Boostrap</a> ,<a href="http://foundation.zurb.com/">Foundation</a>,<a href="http://semantic-ui.com/">Semantic</a>)</div>
</div>

@endsection