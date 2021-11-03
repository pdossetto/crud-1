@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('pastas.update', $pasta['id']) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input value="{{ $pasta['title'] }}" type="text" name="title" class="form-control" id="title" placeholder="Enter name of pasta">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        {{-- <input value="{{ $pasta['description'] }}" type="text" name="description" class="form-control" id="description" placeholder="Enter pasta description"> --}}

                        <textarea class="form-control" id="description" name="description">{!! $pasta['description'] !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        {{-- <input value="{{ $pasta['type'] }}" type="text" name="type" class="form-control" id="type" placeholder="Enter pasta type"> --}}
                        <select class="form-control" name="type" id="type">
                            <option value="">-- Seleziona --</option>
                            <option value="lunga" {{ $pasta['type'] == 'lunga' ? 'selected' : NULL}}>Lunga</option>
                            <option value="corta" {{ $pasta['type'] == 'corta' ? 'selected' : NULL}}>Corta</option>
                            <option value="cortissima" {{ $pasta['type'] == 'cortissima' ? 'selected' : NULL}}>Cortissima</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input value="{{ $pasta['image'] }}" type="text" name="image" class="form-control" id="image" placeholder="Enter pasta image">
                    </div>
                    <div class="form-group">
                        <label for="cooking_time">Cooking time</label>
                        <input value="{{ $pasta['cooking_time'] }}" type="text" name="cooking_time" class="form-control" id="cooking_time" placeholder="Enter pasta cooking_time">
                    </div>
                    <div class="form-group">
                        <label for="weight">Weight</label>
                        <input value="{{ $pasta['weight'] }}" type="text" name="weight" class="form-control" id="weight" placeholder="Enter pasta weight">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection