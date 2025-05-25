@extends('components.master')

@section('name')
<div class="container mt-4">
    <h2>Ajouter une nouvelle voiture</h2>

    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="marque" class="form-label">Marque :</label>
            <input type="text" class="form-control" name="marque" id="marque" required>
        </div>

        <div class="mb-3">
            <label for="modele" class="form-label">Modèle :</label>
            <input type="text" class="form-control" name="modele" id="modele" required>
        </div>

        <div class="mb-3">
            <label for="version" class="form-label">Version :</label>
            <input type="text" class="form-control" name="version" id="version">
        </div>

        <div class="mb-3">
            <label for="annee" class="form-label">Année :</label>
            <input type="number" class="form-control" name="annee" id="annee" min="1900" max="{{ date('Y') }}" required>
        </div>

        <div class="mb-3">
            <label for="carburant" class="form-label">Carburant :</label>
            <input type="text" class="form-control" name="carburant" id="carburant" required>
        </div>

        <div class="mb-3">
            <label for="transmission" class="form-label">Transmission :</label>
            <input type="text" class="form-control" name="transmission" id="transmission" required>
        </div>

        <div class="mb-3">
            <label for="kilometrage" class="form-label">Kilométrage :</label>
            <input type="number" class="form-control" name="kilometrage" id="kilometrage" required>
        </div>

        <div class="mb-3">
            <label for="moteur" class="form-label">Moteur (ex: 1.5) :</label>
            <input type="number" step="0.1" class="form-control" name="moteur" id="moteur">
        </div>

        <div class="mb-3">
            <label for="prix" class="form-label">Prix (MAD) :</label>
            <input type="number" class="form-control" name="prix" id="prix" required>
        </div>

        <div class="mb-3">
            <label for="localisation" class="form-label">Localisation :</label>
            <input type="text" class="form-control" name="localisation" id="localisation" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description :</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="neuve" class="form-label">Est-ce une voiture neuve ?</label>
            <select class="form-control" name="neuve" id="neuve">
                <option value="1">Oui</option>
                <option value="0">Non</option>
            </select>
             <div class="mb-3">
            <label for="localisation" class="form-label">Image :</label>
            <input type="file" class="form-control" name="image" id="localisation" required>
        </div>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter la voiture</button>
    </form>
</div>
@endsection