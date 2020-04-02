@extends('layout')

@section('title')
    Portafolio
@endsection

@section('content')
    <h2>Portafolio</h2>
    <ul>
        @forelse ($portfolio as $portfolioItem)
            <li> {{ $portfolioItem['title'] }} <pre>{{ $loop->first ? 'Es el primero' : '' }}</pre></li>
        @empty
            <li> No hay información para listar </li>
        @endforelse
    </ul>
@endsection