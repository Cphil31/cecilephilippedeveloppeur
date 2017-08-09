@extends('layouts.layout_home')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')
<div class="textanswer">Merci {{ $name}} {{ $prenom}} pour l'envoi de votre e-mail, votre message "{{$content}}" a bien été transmit</div>

@endsection