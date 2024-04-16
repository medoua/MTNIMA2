<?php

namespace App\Http\Controllers;

use App\Models\etat_coti;
use Illuminate\Http\Request;

class etat_cotiController extends Controller
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
        $Etat_cotis = etat_coti::where('nom_Etat_coti', 'like', '%' . $rech . '%')->get();
        //$Etat_cotis = etat_coti::latest()->paginate(7);
        return  view('\Admin\Etat_coti',compact('Etat_cotis'))
        -> with('i',(request()->input('page',1)-1)*7);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return  view('/Admin/Etat_coti');
        $Etat_cotis = etat_coti::all();
        //$Etat_cotis = etat_coti::latest()->paginate(7);
        return  view('\Admin\Etat_coti',compact('Etat_cotis'))
        -> with('i',(request()->input('page',1)-1)*7);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('/Admin/Etat_coti_AJ');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_Etat_coti' => 'required|string|max:255',
        ]);
        $input =  $request->all();
        etat_coti::create($input);
        return redirect()->route('Etat_coti.index')->with('success_A',"%$request[0]% est Ajoute");
    }

    /**
     * Display the specified resource.
     */
    public function show(etat_coti $id)
    {
        return  view('/Admin/Etat_coti_AF');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(etat_coti $id)
    {
        return  view('/Admin/Etat_coti_M');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, etat_coti $id)
    {
        $request->validate([
            'nom_Etat_coti' => 'required|string|max:255',
        ]);
        $input =  $request->all();
        $id->update($input);
        return redirect()->route('Etat_coti.index')->with('success',"Modifie");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(etat_coti $id)
    {
        
        $id->delete();
        return redirect()->route('Etat_coti.index')->with('success_S',"suprime");
    }
}
