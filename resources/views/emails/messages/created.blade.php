
@extends('layouts.layout_home')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')

<h1>{{$title}}</h1>
<p>{{$content}}</p>


@endsection