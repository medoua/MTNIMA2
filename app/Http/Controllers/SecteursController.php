<?php

namespace App\Http\Controllers;

use App\Models\Secteur;
use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use function Laravel\Prompts\search;

class SecteursController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Admin')->only(['index','create','edit','update','destroy']);
        $this->middleware('SuperAdmin')->only([ 'create','edit','update','destroy']);
         //$this->middleware('auth')->except(['index','show']);
        //$this->middleware('auth')->only(['create','edit','update','destroy']);
        //$this->middleware('Admin')->only(['create','edit','update','destroy']);
        //$this->middleware('Admin')->only(['create','edit','update','destroy']);
    }
    /**
     * "%{$rech_secteur}%"
     * Display a listing of the resource.
     */
    public function rech(Request $request) 
    {  //dd( $rech_secteur->all());
        $rech_secteur = $request->input('rech_secteur');
        $Secteurs = Secteur::where('nom_secteur', 'like', '%' . $rech_secteur . '%')->get();
        //$Secteurs = Secteur::where('nom_secteur','like', "%{$rech_secteur}%")->pluck('nom_secteur')->all();
        return  view('\Admin\Secteur',compact('Secteurs'));
        //return redirect()->route('Secteur_i.index')->with('success_rch',"resultat de recherche" .$Secteurs);

        //return  view('\Admin\Secteur',compact('Secteurs'))-> with('i',(request()->input('page',1)-1)*7);
    }

    public function index() 
    {
        //$Secteurs = Secteur::latest()->paginate(7);
        $Secteurs = Secteur::all();
        return  view('\Admin\Secteur',compact('Secteurs'))
        -> with('i',(request()->input('page',1)-1)*7);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        return  view('/Admin/secteur_Ajoute'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        //dd( $request->all() );
        $c = $request->validate([
            'nom_secteur' => 'required|string|max:255',
        ]);
        $input =  $request->all();
        secteur::create($input);
        return redirect()->route('Secteur_i.index')->with('success_A'," est Ajoute");
    }

    /**
     * Display the specified resource.
     */
    public function show(Secteur $id)
    { 
        $Secteurs = Secteur::find($id);
        return  view('\Admin\secteur_Af',compact('Secteurs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Secteur $id)
    {
        //dd( $id->all() );
        $Secteurs = Secteur::find($id);
        return  view('\Admin\secteur_modif',compact('Secteurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Secteur $id)
    {
        //dd( $id->all() );
        $request->validate([
            'nom_secteur' => 'required',
        ]);
        $input = $request->all();
        $id->update($input);
        return redirect()->route('Secteur_i.index')->with('success',"Modifie");
    }

    /**
     * Remove the specified resource from storage.
     * 
     * : RedirectResponse
     */
    public function destroy(Secteur $id)
    {
        //dd( $id->all() );
        $id->delete();
        return redirect()->route('Secteur_i.index')->with('success_S',"suprime");
    }
}
