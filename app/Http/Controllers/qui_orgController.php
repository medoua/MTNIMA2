<?php

namespace App\Http\Controllers;

use App\Models\qui_org;
use Illuminate\Http\Request;

class qui_orgController extends Controller
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
        $Qui_orgs = qui_org::where('nom_qui_org', 'like', '%' . $rech . '%')->get();
        //$Qui_orgs = qui_org::latest()->paginate(7);
        return  view('\Admin\qui_org',compact('Qui_orgs'))
        -> with('i',(request()->input('page',1)-1)*7);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return  view('/Admin/qui_org');
        $Qui_orgs = qui_org::all();
        //$Qui_orgs = qui_org::latest()->paginate(7);
        return  view('\Admin\qui_org',compact('Qui_orgs'))
        -> with('i',(request()->input('page',1)-1)*7);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('/Admin/qui_org_AJ');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd( $request->all() );
        $request->validate([
            'nom_qui_org' => 'required|string|max:255',
        ]);
        $input =  $request->all();
        qui_org::create($input);
        return redirect()->route('qui_org.index')->with('success_A',"%$request[0]% est Ajoute");
    }

    /**
     * Display the specified resource.
     */
    public function show(qui_org $id)
    {
        
        return  view('/Admin/qui_org_AF');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(qui_org $id)
    {
        return  view('/Admin/qui_org_M');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, qui_org $id)
    {
        $request->validate([
            'nom_qui_org' => 'required|string|max:255',
        ]);
        $input =  $request->all();
        $id->update($input);
        return redirect()->route('qui_org.index')->with('success',"Modifie");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(qui_org $id)
    {
        
        $id->delete();
        return redirect()->route('qui_org.index')->with('success_S',"suprime");
    }
}
