@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}

                <form action="{{ route('pastas.store') }}" method="post">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter name of pasta">

                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        {{-- <input type="text" name="description" class="form-control" id="description" placeholder="Enter pasta description"> --}}

                        <textarea class="form-control" id="description" name="description" ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        {{-- <input type="text" name="type" class="form-control" id="type" placeholder="Enter pasta type"> --}}
                        <select class="form-control" name="type" id="type">
                            <option value="">-- Seleziona --</option>
                            <option value="lunga">Lunga</option>
                            <option value="corta">Corta</option>
                            <option value="cortissima">Cortissima</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="text" name="image" class="form-control" id="image" placeholder="Enter pasta image">
                    </div>
                    <div class="form-group">
                        <label for="cooking_time">Cooking time</label>
                        <input type="text" name="cooking_time" class="form-control" id="cooking_time" placeholder="Enter pasta cooking_time">
                    </div>
                    <div class="form-group">
                        <label for="weight">Weight</label>
                        <input type="text" name="weight" class="form-control" id="weight" placeholder="Enter pasta weight">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection