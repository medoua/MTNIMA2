<?php

namespace App\Http\Controllers;

use App\Models\degres_impo_org_inst;
use Illuminate\Http\Request;

class degres_impo_org_instController extends Controller
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
        $Degres_impo_org_insts = degres_impo_org_inst::where('nom_Degres', 'like', '%' . $rech . '%')->get();
        return  view('\Admin\Degrès_d’imp',compact('Degres_impo_org_insts'))
        -> with('i',(request()->input('page',1)-1)*7);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return  view('/Admin/Degrès_d’imp');
        $Degres_impo_org_insts = degres_impo_org_inst::all();
        //$Degres_impo_org_insts = degres_impo_org_inst::latest()->paginate(7);
        return  view('\Admin\Degrès_d’imp',compact('Degres_impo_org_insts'))
        -> with('i',(request()->input('page',1)-1)*7);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('/Admin/Degrès_d’imp_AJ');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_Degres' => 'required|string|max:255',
        ]);
        $input =  $request->all();
        degres_impo_org_inst::create($input);
        return redirect()->route('Degr_imp.index')->with('success_A',"%$request[0]% est Ajoute");
    }

    /**
     * Display the specified resource.
     */
    public function show(degres_impo_org_inst $id)
    {
        return  view('/Admin/Degrès_d’imp_AF');//
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(degres_impo_org_inst $id)
    {
        return  view('/Admin/Degrès_d’imp_M');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, degres_impo_org_inst $id)
    {
        $request->validate([
            'nom_Degres' => 'required|string|max:255',
        ]);
        $input =  $request->all();
        $id->update($input);
        return redirect()->route('Degr_imp.index')->with('success',"Modifie");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(degres_impo_org_inst $id)
    {
        
        $id->delete();
        return redirect()->route('Degr_imp.index')->with('success_S',"suprime");
    }
}
