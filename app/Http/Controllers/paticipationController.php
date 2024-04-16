<?php

namespace App\Http\Controllers;

use App\Models\paticipation;
use Illuminate\Http\Request;

class paticipationController extends Controller
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
        $Paticipations = paticipation::where('nom_Patici', 'like', '%' . $rech . '%')->get();
        //$Paticipations = paticipation::latest()->paginate(7);
        
        return  view('\Admin\participation',compact('Paticipations'))
        -> with('i',(request()->input('page',1)-1)*7);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Paticipations = paticipation::all();
        //return  view('/Admin/participation');
        //$Paticipations = paticipation::latest()->paginate(7);
        
        return  view('\Admin\participation',compact('Paticipations'))
        -> with('i',(request()->input('page',1)-1)*7);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('/Admin/participation_AJ');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_Patici' => 'required|string|max:255',
        ]);
        $input =  $request->all();
        paticipation::create($input);
        return redirect()->route('participation.index')->with('success_A',"%$request[0]% est Ajoute");
    }

    /**
     * Display the specified resource.
     */
    public function show(paticipation $id)
    {
        return  view('/Admin/participation_AF');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(paticipation $id)
    {
        return  view('/Admin/participation_M');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, paticipation $id)
    {
        $request->validate([
            'nom_Patici' => 'required|string|max:255',
        ]);
        $input =  $request->all();
        $id->update($input);
        return redirect()->route('participation.index')->with('success',"Modifie");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(paticipation $id)
    {
        
        $id->delete();
        return redirect()->route('participation.index')->with('success_S',"suprime");
    }
}
