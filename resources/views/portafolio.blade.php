@extends('layout')
@section('content')
    
        <h1>Portafolio</h1>
        <ul>
                @forelse($varportafolio as $portafolioItem)
                        <li>{{ $portafolioItem['title'] }}</li>

                @empty
                        <li> No hay proyectos que mostrar </li>
                    
                @endforelse
        </ul>
        
@endsection 