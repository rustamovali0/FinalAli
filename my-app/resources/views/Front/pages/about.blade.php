@extends('Front.layout.layout')

@section('content')

<div class="about-container">
    <div class="about-content">
        <div class="about-text">
            <h1>{{$about->name}}</h1>
            <p>
                {{$about->content}}
            </p>

        </div>
        <div class="about-image">
            <img src="{{$about->image}}" alt="Hakkımızda">
        </div>
    </div>
</div>

    @endsection
