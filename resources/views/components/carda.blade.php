<div class="col-sm-3">

<div class="card">
    {{$voiture->image}}
    <img class="card-img-top" src="https://picsum.photos/200/300/?blur=2" alt="Title">
        <div>
            <h4 class="card-title">{{$voiture->marque}}</h4>
            <p class="card-text"><strong>Modele :</strong>{{$voiture->modele}}</p>
            <p class="card-text"><strong>Version :</strong>{{$voiture->version}}</p>
            <p class="card-text"><strong>Année :</strong>{{$voiture->annee}}</p>
            <a href="{{ route('show',$voiture->id)}}" class="stretched-link"></a>

        </div>
        <div class="card-footer" style="z-index: 9">
        <form action="{{ route('supprimer',$voiture->id)}}" method="post">
            @method('DELETE')
            @csrf
       <button type="submit" class="btn btn-danger float-end">Supprimer</button>
        </form>
        <a href="{{ route( 'edit', $voiture->id) }}" class="btn btn-primary">Modifier</a>
       
        </div>
</div>
</div>