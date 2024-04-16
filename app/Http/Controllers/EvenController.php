<?php

namespace App\Http\Controllers;

use App\Models\even;
use Illuminate\Http\Request;

class EvenController extends Controller
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
        $Evens = even::where('nom_even', 'like', '%' . $rech . '%')->
        orWhere('info_even', 'like', '%' . $rech . '%')->get();
        //$Evens = even::latest()->paginate(7);
        return  view('\Admin\even_Liste',compact('Evens'))
        -> with('i',(request()->input('page',1)-1)*7); 
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Evens = even::all();
        //echo("med");
        //$Evens = even::latest()->paginate(7);
        return  view('\Admin\even_Liste',compact('Evens'))
        -> with('i',(request()->input('page',1)-1)*7); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('/Admin/even_A'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_even' => 'required|string|max:255',
            'info_even' => 'required|string|max:255',
        ]);
        $input =  $request->all();
        even::create($input);
        return redirect()->route('EvenList.index')->with('success_A'," est Ajoute");
    }

    /**
     * Display the specified resource.
     */
    public function show(even $id)
    {
        $Evens = even::find($id);
        return  view('\Admin\even_Liste',compact('Evens'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(even $id)
    {
        $Evens = even::find($id);
        return  view('\Admin\even_M',compact('Evens'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, even $id)
    {
        $request->validate([
            'nom_even' => 'required',
            'info_even' => 'required',
        ]);
        $input =  $request->all();
        $id->update($input);
        return redirect()->route('EvenList.index')->with('success',"Modifie");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(even $id)
    {
        $id->delete();
        return redirect()->route('EvenList.index')->with('success_S',"suprime");
    }
}
