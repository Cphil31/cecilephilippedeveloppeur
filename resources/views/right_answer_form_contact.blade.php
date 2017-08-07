@extends('layouts.layout_home')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')
<h2>Merci {{ $name}} {{ $prenom}} pour l'envoi de cet e-mail , votre message à bien été transmit</h2>
<h3>
<li>Nom : {{$name}}</li>
<li>Prénom : {{$prenom}}</li>
<li>E-mail : {{$email}}</li>
<li>Object : {{$object}}</li>
<li>content : {{$content}}</li>	

</h3>

@endsection