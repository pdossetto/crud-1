@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4 mb-4">Dettaglio {{ $pasta['title'] }}</h1>
                <ul>
                    <li>{{ $pasta['type'] }}</li>
                    <li>{!! $pasta['description'] !!}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection