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
        <ul class="list-group">
            @forelse ($projects as $projectItem)
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    <a class="d-flex justify-content-between align-items-center"
                        href="{{ route('projects.show', $projectItem) }}">
                        <span class="font-weight-bold">
                            {{ $projectItem->title }}
                        </span>
                        <span class="text-black-50">
                            {{ $projectItem->created_at->format('d/m/Y') }}
                        </span>
                    </a>
                </li>
            @empty
                <p>Sem projectos para mostrar</p>
            @endforelse
            {{ $projects->links() }}
        </ul>
    </div>
@endsection
