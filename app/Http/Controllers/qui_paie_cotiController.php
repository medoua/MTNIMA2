<?php

namespace App\Http\Controllers;

use App\Models\qui_paie_coti;
use Illuminate\Http\Request;

class qui_paie_cotiController extends Controller
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
        $Qui_paie_cotis = qui_paie_coti::where('nom_qui_paie_coti', 'like', '%' . $rech . '%')->get();
        //$Qui_paie_cotis = qui_paie_coti::latest()->paginate(7);
        return  view('\Admin\qui_paie_coti',compact('Qui_paie_cotis'))
        -> with('i',(request()->input('page',1)-1)*7);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return  view('/Admin/qui_paie_coti');
        $Qui_paie_cotis = qui_paie_coti::all();
        //$Qui_paie_cotis = qui_paie_coti::latest()->paginate(7);
        return  view('\Admin\qui_paie_coti',compact('Qui_paie_cotis'))
        -> with('i',(request()->input('page',1)-1)*7);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('/Admin/qui_paie_coti_AJ');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_qui_paie_coti' => 'required|string|max:255',
        ]);
        $input =  $request->all();
        qui_paie_coti::create($input);
        return redirect()->route('qui_paie_coti.index')->with('success_A',"%$request[0]% est Ajoute");
    }

    /**
     * Display the specified resource.
     */
    public function show(qui_paie_coti $id)
    {
        return  view('/Admin/qui_paie_coti_AF');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(qui_paie_coti $id)
    {
        return  view('/Admin/qui_paie_coti_M');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, qui_paie_coti $id)
    {
        $request->validate([
            'nom_qui_paie_coti' => 'required|string|max:255',
        ]);
        $input =  $request->all();
        $id->update($input);
        return redirect()->route('qui_paie_coti.index')->with('success',"Modifie");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(qui_paie_coti $id)
    {
        $id->delete();
        return redirect()->route('qui_paie_coti.index')->with('success_S',"suprime");
    }
}
