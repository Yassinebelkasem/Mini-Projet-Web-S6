<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Voituer;
use App\Http\Requests\VoituerRequest;
// use App\Http\Controllers\Request;

class Voituercontroller extends Controller
{
    public function index()
    {
        $voitures = Voituer::paginate(12);
        return view('home', compact('voitures'));
    }
     public function indexa()
    {
        $voitures = Voituer::paginate(12);
        return view('homea', compact('voitures'));
    }
    public function show(Request $request){
       // dd($id);

       $id=(int)$request->id;
       $voitures = Voituer::findOrFail($id);

        return view('show', compact('voitures'));

    }
    

    public function destroy(Voituer $voituer){
        
       $voituer->delete();
 return  to_route('home')->with('success', 'Votre voiture a supprimer');
    }
    public function edit(Voituer $voituer){
        
     return view('edit', compact('voituer'));
  
    }
    public function update(VoituerRequest $request , Voituer $voituer){
      $formedit = $request->validated();
      $voituer->fill($formedit)->save();
     
  
    }
    public function ajouter()
    {
        return view('ajouter');
    }

    public function store(VoituerRequest $request)
    {
        $t=$request->validated();
        Voituer::create($t);
        $t['image']=$request->file('image')->store('images','public');

        return redirect()->route('homea')->with('success', 'Votre voiture a été bien enregistrée.');
    }
}