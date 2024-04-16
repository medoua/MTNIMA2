<?php

namespace App\Http\Controllers;

use App\Models\periodicite;
use Illuminate\Http\Request;

class periodiciteController extends Controller
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
        $Periodicites = periodicite::where('nom_Perio', 'like', '%' . $rech . '%')->get();
        //$Periodicites = periodicite::latest()->paginate(7);
        return  view('\Admin\Périodicité',compact('Periodicites'))
        -> with('i',(request()->input('page',1)-1)*7);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return  view('/Admin/Périodicité');
        $Periodicites = periodicite::all();
        //$Periodicites = periodicite::latest()->paginate(7);
        return  view('\Admin\Périodicité',compact('Periodicites'))
        -> with('i',(request()->input('page',1)-1)*7);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('/Admin/Périodicité_AJ');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_Perio' => 'required|string|max:255',
        ]);
        $input =  $request->all();
        periodicite::create($input);
        return redirect()->route('Périodicité.index')->with('success_A',"%$request[0]% est Ajoute");
    }

    /**
     * Display the specified resource.
     */
    public function show(periodicite $id)
    {
        return  view('/Admin/Périodicité_AF');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(periodicite $id)
    {
        return  view('/Admin/Périodicité_M');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, periodicite $periodicite)
    {
        $request->validate([
            'nom_Perio' => 'required|string|max:255',
        ]);
        $input =  $request->all();
        $id->update($input);
        return redirect()->route('Périodicité.index')->with('success',"Modifie");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(periodicite $id)
    {
        
        $id->delete();
        return redirect()->route('Périodicité.index')->with('success_S',"suprime");
    }
}
