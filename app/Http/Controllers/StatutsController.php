<?php

namespace App\Http\Controllers;

use App\Models\statut;
use Illuminate\Http\Request;

class StatutsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Admin')->only(['index','create','edit','update','destroy']);
        $this->middleware('SuperAdmin')->only([ 'create','edit','update','destroy']);
    }
    public function rech(Request $request) 
    {  
        $rech = $request->input('rech');
        $Statuts = statut::where('nom_Statut', 'like', '%' . $rech . '%')->get();
        //$Statuts = statut::latest()->paginate(7);
        return  view('\Admin\statut',compact('Statuts'))
        -> with('i',(request()->input('page',1)-1)*7);
    }
    /**
     * Display a listing of the resource. 
     */
    public function index()
    {
        $Statuts = statut::all();
        //$Statuts = statut::latest()->paginate(7);
        return  view('\Admin\statut',compact('Statuts'))
        -> with('i',(request()->input('page',1)-1)*7);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('/Admin/statut_AJ');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd( $request->all() );
        $request->validate(['nom_Statut' => 'required|string|max:255']);
        $input =  $request->all();
        statut::create($input);

        return redirect()->route('Statut_Type.index')->with('success_A',"%$request[0]% est Ajoute");;
    }

    /**
     * Display the specified resource.
     */
    public function show(statut $id)
    {
        return  view('/Admin/Statut et Type_AF');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(statut $id)
    {
        return  view('/Admin/statut_M');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, statut $id)
    {
        $request->validate([
            'nom_Statut' => 'required|string|max:255',
        ]);
        $input =  $request->all();
        $id->update($input);
        return redirect()->route('Statut_Type.index')->with('success',"Modifie");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(statut $id)
    {
        $id->delete();
        return redirect()->route('Statut_Type.index')->with('success_S',"suprime");
    }
}
