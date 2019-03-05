@extends('layouts.app')

@section('title', $article->meta_title)
@section('meta_keywords', $article->meta_keywords)
@section('meta_description', $article->meta_description)

@section('content')
    <div class="container">
        <div class="rov">
            <div class="col-sm-12">
                <h1>{{$article->title}}</h1>
                <p>{!! $article->description !!}</p>
            </div>
        </div>
    </div>
@endsection