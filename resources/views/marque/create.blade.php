@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Création d'une marque</h2>
        <form action="{{ route('marque.store') }}" method="post">

            @csrf

            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" id="nom" value="{{ old('nom') }}" required
                    maxlength="75">
                @error('nom')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="pays">Pays</label>
                <input type="text" class="form-control" name="pays" id="pays" value="{{ old('pays') }}"
                    required maxlength="75">
                @error('pays')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <input type="submit" value="Valider" class="btn btn-success mt-3">
            </div>

        </form>
    </div>
@endsection
