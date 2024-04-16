<?php

namespace App\Http\Controllers;

use App\Models\ptfs;
use Illuminate\Http\Request;

use App\Models\ptfs_ch;

use Illuminate\Support\Facades\DB;
use App\Models\Secteur;
use App\Models\statut;

class PTFsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Admin')->only(['create','edit','update','destroy']);
    }
    /** 
     * Display a listing of the resource.
     */
    public function rech(Request $request)   
   

    {  
        //dd( $request->all());  
        $rech_PTFs = $request->input('rech_PTFs');
        $Ptfs = ptfs::where('nom_ins', 'like', '%' . $rech_PTFs . '%' )
        ->orWhere('Secteur_PTFS', 'like', '%' . $rech_PTFs . '%')
        ->orWhere('Mission__PTFs', 'like', '%' . $rech_PTFs . '%')
        ->orWhere('Statut_Type', 'like', '%' . $rech_PTFs . '%')
        ->orWhere('Point_focal', 'like', '%' . $rech_PTFs . '%')
        ->orWhere('Hist_Coop', 'like', '%' . $rech_PTFs . '%')
        ->orWhere('Siege_PTFs', 'like', '%' . $rech_PTFs . '%')
        ->orWhere('programme', 'like', '%' . $rech_PTFs . '%')
        ->orWhere('Evenements', 'like', '%' . $rech_PTFs . '%')
        ->orWhere('Finnacements', 'like', '%' . $rech_PTFs . '%')
        ->orWhere('Site_web_PTFs', 'like', '%' . $rech_PTFs . '%')
        ->orWhere('Contacts_PTFs', 'like', '%' . $rech_PTFs . '%')->get();
        $Statuts =statut::all();
        $Secteurs = Secteur::all();
        //$Ptfs = ptfs::latest()->paginate(7); 
        return  view('Ptfs',compact('Ptfs','Statuts','Secteurs'))
        -> with('i',(request()->input('page',1)-1)*7);

       
    }

    public function index()
    {
        
        $Ptfs = ptfs::all(); 
        $id_ptfs =ptfs::select('id');
        $Ptfs_sects = DB::table('secteurs')
        ->join('Ptfs_ches', 'secteurs.id', '=', 'Ptfs_ches.id_sect')
        ->join('Ptfs', 'Ptfs_ches.id_Ptfs', '=', 'Ptfs.id')
        ->where('Ptfs_ches.id_Ptfs', '=', 'Ptfs.id')
        ->select('secteurs.nom_secteur','Ptfs_ches.id_sect' )
        ->get();
        
        $Statuts =statut::all();
        $Secteurs = Secteur::all();
        //$Ptfs = ptfs::latest()->paginate(7); 
        return  view('Ptfs',compact('Ptfs','Statuts','Secteurs','Ptfs_sects'))
        -> with('i',(request()->input('page',1)-1)*7);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Statuts =statut::all();
        $Secteurs = Secteur::all();
        return  view('Ptfs_AJ',compact('Statuts','Secteurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd( $request->all() );
        $request->validate([
        'nom_ins'=> 'required|string|max:255',
        'Secteur_PTFS0.*'=> 'required|string|max:255',
        'Mission__PTFs'=> 'required|string|max:255',
        'Statut_Type'=> 'required|string|max:255',
        'Point_focal'=> 'required|string|max:255',
        'Hist_Coop'=> 'required|string|max:255', 
        'Siege_PTFs'=> 'required|string|max:255',
        'programme'=> 'required|string|max:255',
        'Evenements'=> 'required|string|max:255',
        'Finnacements'=> 'required|string|max:255',
        'Site_web_PTFs'=> 'required|string|max:255',
        'Contacts_PTFs'=> 'required|string|max:255',
    ]);
   
    $input =  $request->all();
       $p= ptfs::create($input);
        $Sect_ptfs =$request->input('Secteur_PTFS0');
        foreach($Sect_ptfs as $sect_org1) { $org_sect = ['id_sect' => $sect_org1,'id_ptfs' =>$p->id, ];
            $ptfs_ch =  ptfs_ch::create($org_sect); } 

        // return  view('ptfs');
        return redirect()->route('Ptfs.index')->with('success',"Ajoute");
        //return redirect()->route('')->with("ok");
    
    }
    /**
     * Display the specified resource.
     */
    public function show(ptfs $id)
    {
        $Ptfs_sects = DB::table('secteurs')
        ->join('Ptfs_ches', 'secteurs.id', '=', 'Ptfs_ches.id_sect')
        ->join('Ptfs', 'Ptfs_ches.id_Ptfs', '=', 'Ptfs.id')
        ->where('Ptfs_ches.id_Ptfs', '=', $id->id)
        ->select('secteurs.nom_secteur','Ptfs_ches.id_sect' )
        ->get();

        $Statuts =statut::all();
        $Secteurs = Secteur::all();
        $Ptfs = ptfs::find($id);
        return  view('Ptfs_AF',compact('Ptfs','Statuts','Secteurs','Ptfs_sects'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ptfs $id)
    {
        $Ptfs_sects = DB::table('secteurs')
        ->join('Ptfs_ches', 'secteurs.id', '=', 'Ptfs_ches.id_sect')
        ->join('Ptfs', 'Ptfs_ches.id_Ptfs', '=', 'Ptfs.id')
        ->where('Ptfs_ches.id_Ptfs', '=', $id->id)
        ->select('secteurs.nom_secteur','Ptfs_ches.id_sect' )
        ->get();

        $Ptfs = ptfs::find($id);
        $Statuts =statut::all();
        $Secteurs = Secteur::all();
        return  view('Ptfs_M',compact('Ptfs','Statuts','Secteurs','Ptfs_sects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ptfs $id,ptfs_ch $id_ptfs)
    {
        //dd( $request->all() );
        $request->validate([
        'nom_ins'=> 'required|string|max:255',
        'Secteur_PTFS0.*'=> 'required|string|max:255',
        'Mission__PTFs'=> 'required|string|max:255',
        'Statut_Type'=> 'required|string|max:255',
        'Point_focal'=> 'required|string|max:255',
        'Hist_Coop'=> 'required|string|max:255', 
        'Siege_PTFs'=> 'required|string|max:255',
        'programme'=> 'required|string|max:255',
        'Evenements'=> 'required|string|max:255',
        'Finnacements'=> 'required|string|max:255',
        'Site_web_PTFs'=> 'required|string|max:255',
        'Contacts_PTFs'=> 'required|string|max:255',
        ]);
        $Sect_ptfs =$request->input('Secteur_PTFS0');
        $id_ptfs->where('id_ptfs', $id->id)->delete();
            //dd($sect_orgs);
            foreach ($Sect_ptfs as $Sect_ptfs1) {
                $Sect_ptfs0 = ['id_sect' => $Sect_ptfs1, 'id_ptfs' => $id->id];
                $id_ptfs->updateOrCreate(['id_ptfs' => $id->id, 'id_sect' => $Sect_ptfs1], $Sect_ptfs0);}

        $input =  $request->all();
        $id->update($input);
        return redirect()->route('Ptfs.index')->with('success',"Modifie");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ptfs $id)
    {
        
        $id->delete();
        return redirect()->route('Ptfs.index')->with('success_S',"suprime");
    }
}
