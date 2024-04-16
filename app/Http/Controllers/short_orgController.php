<?php

namespace App\Http\Controllers;

use App\Models\short_org;
use Illuminate\Http\Request;

class short_orgController extends Controller
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
        $Short_orgs = short_org::where('nom_org', 'like', '%' . $rech . '%')
        ->orWhere('info_org', 'like', '%' . $rech . '%')->get();
        //$short_org = short_org::latest()->paginate(7);
        return  view('\Admin\Liste_org',compact('Short_orgs'))
        -> with('i',(request()->input('page',1)-1)*7); 
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Short_orgs = short_org::all();
         //$short_org = short_org::latest()->paginate(7);
         return  view('\Admin\Liste_org',compact('Short_orgs'))
         -> with('i',(request()->input('page',1)-1)*7);   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('/Admin/org_Ajoute'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nom_org' => 'required|string|max:255',
            'info_org' => 'required|string|max:255',
        ]);
        $input =  $request->all();
        short_org::create($input);
        return redirect()->route('OrgList.index')->with('success_A'," est Ajoute");
    }

    /**
     * Display the specified resource.
     */
    public function show(short_org $id)
    {
        $Short_orgs = short_org::find($id);
        return  view('\Admin\Liste_org',compact('Short_orgs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(short_org $id)
    {
        $Short_orgs = short_org::find($id);
        return  view('\Admin\org_M',compact('Short_orgs'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, short_org $id)
    {
        $request->validate([
            'nom_org' => 'required',
            'info_org' => 'required',
        ]);
        $input =  $request->all();
        $id->update($input);
        return redirect()->route('OrgList.index')->with('success',"Modifie");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(short_org $id)
    {
        $id->delete();
        return redirect()->route('OrgList.index')->with('success_S',"suprime");
    }
}
