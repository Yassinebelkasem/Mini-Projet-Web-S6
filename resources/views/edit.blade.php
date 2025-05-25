@extends('components.master')

@section('name')
<div class="container mt-4">
    <h2>Modifier voiture</h2>

    <form action="{{ route('modifier',$voituer->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="marque" class="form-label">Marque :</label>
            <input type="text" class="form-control" name="marque" id="marque" value="{{$voituer->marque}}" required>
        </div>

        <div class="mb-3">
            <label for="modele" class="form-label">Modèle :</label>
            <input type="text" class="form-control" name="modele" id="modele" value="{{$voituer->modele}}" required>
        </div>

        <div class="mb-3">
            <label for="version" class="form-label">Version :</label>
            <input type="text" class="form-control" name="version" id="version" value="{{$voituer->version}}">
        </div>

        <div class="mb-3">
            <label for="annee" class="form-label">Année :</label>
            <input type="number" class="form-control" name="annee" id="annee" min="1900" max="{{ date('Y') }}" value="{{$voituer->annee}}" required>
        </div>

        <div class="mb-3">
            <label for="carburant" class="form-label">Carburant :</label>
            <input type="text" class="form-control" name="carburant" id="carburant" value="{{$voituer->carburant}}" required>
        </div>

        <div class="mb-3">
            <label for="transmission" class="form-label">Transmission :</label>
            <input type="text" class="form-control" name="transmission" id="transmission" value="{{$voituer->transmission}}" required>
        </div>

        <div class="mb-3">
            <label for="kilometrage" class="form-label">Kilométrage :</label>
            <input type="number" class="form-control" name="kilometrage" id="kilometrage" value="{{$voituer->kilometrage}}" required>
        </div>

        <div class="mb-3">
            <label for="moteur" class="form-label">Moteur (ex: 1.5) :</label>
            <input type="number" step="0.1" class="form-control" name="moteur" id="moteur" value="{{$voituer->moteur}}">
        </div>

        <div class="mb-3">
            <label for="prix" class="form-label">Prix (MAD) :</label>
            <input type="number" class="form-control" name="prix" id="prix" required value="{{$voituer->prix}}">
        </div>

        <div class="mb-3">
            <label for="localisation" class="form-label">Localisation :</label>
            <input type="text" class="form-control" name="localisation" id="localisation" value="{{$voituer->localisation}}" required >
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description :</label>
            <textarea class="form-control" name="description" id="description" rows="3" value="{{$voituer->description}}"></textarea>
        </div>

        <div class="mb-3">
            <label for="neuve" class="form-label">Est-ce une voiture neuve ?</label>
            <select class="form-control" name="neuve" id="neuve" value="{{$voituer->neuve}}">
                <option value="1">Oui</option>
                <option value="0">Non</option>
            </select>
             <div class="mb-3">
            <label for="localisation" class="form-label">Image :</label>
            <input type="file" class="form-control" name="image" id="localisation" required>
        </div>
        </div>

        <button type="submit" class="btn btn-primary">Modifier la voiture</button>
    </form>
</div>
@endsection