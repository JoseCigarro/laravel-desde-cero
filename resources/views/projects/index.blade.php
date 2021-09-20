@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="display-4">{{ __('Projects') }}</h1>
            @auth
                <a class="btn btn-primary mb-0" href="{{ route('projects.create') }}">Ciar Projecto</a>
            @endauth
        </div>
        <p class="lead text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
        
        <div class="d-flex flex-wrap justify-content-between align-items-start">
            @forelse ($projects as $projectItem)
                <div class="card border-0 shadow-sm mt-4 mx-auto" style="width: 18rem;">
                    @if ($projectItem->image)
                        <img class="card-img-top" src="/storage/{{ $projectItem->image }}" alt="Card image cap">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $projectItem->title }}</h5>
                        <p class="card-text text-truncate">{{ $projectItem->descriptiom }}</p>
                        <a href="{{ route('projects.show', $projectItem) }}" class="btn btn-primary">Ver
                            mais..</a>
                    </div>
                </div>

            @empty
                <p>Sem projectos para mostrar</p>
            @endforelse
            {{ $projects->links() }}

        </div>
    </div>

@endsection
