@extends('layout')

@section('title', 'Contact')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                
                <form class="bg-white shadow rounded py-3 px-4" method="POST" accept="{{ route('contact.store') }}">
                    @csrf
                    <h1 class="display-2">{{ __(' Contact') }}</h1>
                    <hr>
                    <div class="form-group py-2">
                        <label for="name">Nome</label>
                        <input class="form-control bg-light shadow-sm  @error('name') is-invalid @else border-0 @enderror"
                            name="name" id="name" placeholder="Nome.." value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group py-2">
                        <label for="email">Email</label>
                        <input class="form-control bg-light shadow-sm  @error('email') is-invalid @else border-0 @enderror"
                            type="text" id="email" name="email" placeholder="Email.." value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group py-2">
                        <label for="subject">Assunto</label>
                        <input
                            class="form-control bg-light shadow-sm  @error('subject') is-invalid @else border-0 @enderror"
                            type="text" id="subject" name="subject" placeholder="Assunto.." value="{{ old('subject') }}">
                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group py-2">
                        <label for="content">Mensagem</label>
                        <textarea
                            class="form-control bg-light shadow-sm  @error('content') is-invalid @else border-0 @enderror"
                            name="content" id="content" placeholder="Mesaje..">{{ old('content') }}</textarea>
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button class="btn btn-primary btn-lg btn-block">{{ __('Send') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
