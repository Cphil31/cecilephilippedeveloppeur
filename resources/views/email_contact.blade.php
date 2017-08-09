@extends('layouts.layout_home')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')

		<h2>Prise de contact sur mon beau site</h2>
    <p>Réception d'une prise de contact avec les éléments suivants :</p>
    <ul>
      <li><strong>Nom</strong> : {{ $nom }}</li>
      <li><strong>Email</strong> : {{ $email }}</li>
      <li><strong>Message</strong> : {{ $texte }}</li>
    </ul>


@endsection