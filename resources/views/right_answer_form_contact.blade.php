@extends('layouts.layout_home')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')
<h2>Merci {{ $name}} {{ $prenom}} pour l'envoi de cet e-mail , votre message à bien été transmit</h2>
@endsection