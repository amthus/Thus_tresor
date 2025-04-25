@extends('layouts.app')

@section('content')
    <h1>Ajouter une œuvre</h1>
    
    <form action="{{ route('oeuvres.store') }}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="nom" class="form-label">Nom de l'œuvre</label>
            <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{ old('nom') }}" required>
            @error('nom')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="annee" class="form-label">Année</label>
            <input type="number" class="form-control @error('annee') is-invalid @enderror" id="annee" name="annee" value="{{ old('annee') }}">
            <small class="form-text text-muted">Laisser vide pour les trésors royaux sans année connue</small>
            @error('annee')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="idCategorie" class="form-label">Catégorie</label>
            <select class="form-select @error('idCategorie') is-invalid @enderror" id="idCategorie" name="idCategorie" required>
                <option value="">Sélectionner une catégorie</option>
                @foreach($categories as $categorie)
                    <option value="{{ $categorie->idCategorie }}" {{ old('idCategorie') == $categorie->idCategorie ? 'selected' : '' }}>
                        {{ $categorie->nomCategorie }}
                    </option>
                @endforeach
            </select>
            @error('idCategorie')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="idArtiste" class="form-label">Artiste</label>
            <select class="form-select @error('idArtiste') is-invalid @enderror" id="idArtiste" name="idArtiste">
                <option value="">Non spécifié</option>
                @foreach($artistes as $artiste)
                    <option value="{{ $artiste->idArtiste }}" {{ old('idArtiste') == $artiste->idArtiste ? 'selected' : '' }}>
                        {{ $artiste->nomComplet() }}
                    </option>
                @endforeach
            </select>
            <small class="form-text text-muted">Laisser vide pour les trésors royaux sans artiste connu</small>
            @error('idArtiste')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary-gradient mb-3">Enregistrer</button>
        <a href="{{ route('oeuvres.index') }}" class="btn btn-secondary mb-3">Annuler</a>
    </form>
@endsection