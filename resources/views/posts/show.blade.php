@extends('layouts.app')

@section('title')

@section('content')

    <h1>Post - {{$post->title}}</h1>
    <p>{{$post->body}}</p>

@endsection