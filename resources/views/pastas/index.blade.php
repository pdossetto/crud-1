@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4 mb-4">Tutte le paste</h1>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Cooking Time</th>
                        <th scope="col">Type</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($paste as $pasta)
                            <tr>
                                <th scope="row">{{ $pasta['id'] }}</th>
                                <td>{{ $pasta['title'] }}</td>
                                <td>{!! $pasta['cooking_time'] !!}</td>
                                <td>{{ $pasta['type'] }}</td>
                                <td>
                                    <a href="{{ route('pastas.show', $pasta['id']) }}"
                                        class="btn btn-info">
                                        Details
                                    </a>
                                    <a href="{{ route('pastas.edit', $pasta['id']) }}"
                                        class="btn btn-warning">
                                        Modify
                                    </a>
                                    <form method="post" action="{{ route('pastas.destroy', $pasta['id']) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
        
    </div>
@endsection