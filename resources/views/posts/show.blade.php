@extends('layouts.app')

@section('title')

@section('content')

    <h1>Post - {{$post->title}}</h1>
    <p>created by: {{$post->admin->name}}</p>
    <p>{{$post->body}}</p>
    

@endsection