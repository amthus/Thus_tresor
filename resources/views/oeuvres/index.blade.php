@extends('layouts.app')

@section('content')
    <h1>Liste des œuvres</h1>
    <a href="{{ route('oeuvres.create') }}" class="btn btn-primary-gradient mb-3">Ajouter une œuvre</a>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Œuvre</th>
                <th>Auteur</th>
                <th>Année</th>
                <th>Catégorie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($oeuvres as $oeuvre)
                <tr>
                    <td>{{ $oeuvre->nom }}</td>
                    <td>{{ $oeuvre->artiste ? $oeuvre->artiste->nomComplet() : 'Non spécifié' }}</td>
                    <td>{{ $oeuvre->annee ?: 'Non spécifié' }}</td>
                    <td>{{ $oeuvre->categorie->nomCategorie }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('oeuvres.edit', $oeuvre) }}" class="btn btn-sm btn-warning me-1">Modifier</a>
                            <form action="{{ route('oeuvres.destroy', $oeuvre) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteForms = document.querySelectorAll('.delete-form');
            deleteForms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    if (confirm('Êtes-vous sûr de vouloir supprimer cette œuvre ?')) {
                        this.submit();
                    }
                });
            });
        });
    </script>
@endsection