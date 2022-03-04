@extends('plantilla')

@section('titulo', 'Contacto')

@section('contenido')
    <h1>contacto</h1>

    {{-- <ul>
    @forelse ($contacto as $contactoItem)
    <li> {{ $contactoItem['title']}}</li>
        
    @empty
        <li> no hay forma de contacto de momento </li>
    @endforelse
</ul> --}}
    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }} </p>
        @endforeach
    @endif --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 p-0">
                <form class="form-control" method="POST" action="{{ route('contacto') }}">
                    @csrf
                    <input class="form-control" name="name" placeholder="Nombre..." value="{{ old('name') }}"><br>
                    {!! $errors->first('name', '<small>:message</small>') !!}
                    <input class="form-control" type="email" name="email" placeholder="Email..." value="{{ old('email') }}"><br>
                    {!! $errors->first('email', '<small">:message</small>') !!}
                    <input class="form-control" name="asunto" placeholder="Asunto..." value="{{ old('asunto') }}"><br>
                    {!! $errors->first('asunto', '<small>:message</small>') !!}
                    <textarea class="form-control" name="contenido" placeholder="Mensaje...">{{ old('contenido') }}</textarea><br>
                    {!! $errors->first('contenido', '<small>:message</small>') !!}
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <button class="btn btn-primary btn-lg justify-content-center">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
