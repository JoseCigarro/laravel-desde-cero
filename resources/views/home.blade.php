@extends('layout')

@section('title', 'Home')
@section('content')
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">{{ __('Desenvolvimento Web') }}</h1>
                <p class="lead text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, nobis. Ipsa nam aspernatur in distinctio officia hic? Harum odit voluptatum maxime, est voluptatibus fugiat reprehenderit debitis optio nemo quasi maiores!</p>
                <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contacta-me</a>
                <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">Portfólio</a>
            </div>
            <div class="col-12 col-lg-6">
                <img class="img-fluid mb-4" src="/img/home-img-gamming.svg" alt="">
            </div>
        </div>
    </div>

@endsection
