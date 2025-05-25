@extends('components.master')
@section('name')

<div class="container mt-5">
    <div class="card shadow-lg rounded">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">{{ $voitures->marque }} - {{ $voitures->modele }}</h4>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Version :</strong> {{ $voitures->version }}</li>
                <li class="list-group-item"><strong>Année :</strong> {{ $voitures->annee }}</li>
                <li class="list-group-item"><strong>Carburant :</strong> {{ $voitures->carburant }}</li>
                <li class="list-group-item"><strong>Transmission :</strong> {{ $voitures->transmission }}</li>
                <li class="list-group-item"><strong>Kilométrage :</strong> {{ $voitures->kilometrage }}</li>
                <li class="list-group-item"><strong>Moteur :</strong> {{ $voitures->moteur }}</li>
                <li class="list-group-item"><strong>Prix :</strong> {{ $voitures->prix }} DA</li>
                <li class="list-group-item"><strong>État :</strong> {{ $voitures->neuve ? 'Neuve' : 'Occasion' }}</li>
                <li class="list-group-item"><strong>Localisation :</strong> {{ $voitures->localisation }}</li>
                <li class="list-group-item"><strong>Description :</strong> {{ $voitures->description }}</li>
            </ul>
        </div>
    </div>
</div>

@endsection
  