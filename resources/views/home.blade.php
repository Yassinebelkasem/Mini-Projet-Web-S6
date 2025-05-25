 @extends('components.master')
  @section('name')
   
     <div class="row">
      
 @foreach($voitures as $voiture)
  <x-card :voiture="$voiture" />
 {{-- {{$voiture->marque}}
 {{$voiture->modele}}
 {{$voiture->version}}
 {{$voiture->annee}}
 {{$voiture->carburant}}
 {{$voiture->transmission}}
 {{$voiture->kilometrage}}
 {{$voiture->moteur}}
 {{$voiture->prix}}
 {{$voiture->neuve}} 
 {{$voiture->localisation}}
 {{$voiture->description}}  --}}
 
 @endforeach
 {{$voitures->links()}} 
</div>
   
   
  @endsection
  