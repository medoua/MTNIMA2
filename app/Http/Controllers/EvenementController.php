<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;
use App\Models\even;
use App\Models\Even_ch;

use App\Models\degres_impo_org_inst;
use App\Models\paticipation;
use App\Models\periodicite;
use App\Models\qui_org;
 
class EvenementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
        $this->middleware('Admin')->only(['create','edit','update','destroy']);
    }

    public function rech(Request $request) 
    {  
        //dd( $request->all()); 
        $rech_even = $request->input('rech_even');
        $Evenements = Evenement::where('Evenement', 'like', '%' . $rech_even . '%' )
        ->orWhere('Description', 'like', '%' . $rech_even . '%')
        ->orWhere('qui_Orgqnise', 'like', '%' . $rech_even . '%')
        ->orWhere('Inf_even', 'like', '%' . $rech_even . '%')
        ->orWhere('Periodicite', 'like', '%' . $rech_even . '%')
        ->orWhere('lieu_even', 'like', '%' . $rech_even . '%')
        ->orWhere('date_even', 'like', '%' . $rech_even . '%')
        ->orWhere('theme_derier', 'like', '%' . $rech_even . '%')
        ->orWhere('Participation_MTNIMA', 'like', '%' . $rech_even . '%')
        ->orWhere('lieu_prochain', 'like', '%' . $rech_even . '%')
        ->orWhere('Date_prochain', 'like', '%' . $rech_even . '%')
        ->orWhere('Degres_imp', 'like', '%' . $rech_even . '%')
        ->orWhere('Niveau_imp', 'like', '%' . $rech_even . '%')
        ->orWhere('Format_prochain', 'like', '%' . $rech_even . '%')
        ->orWhere('Site_web_even', 'like', '%' . $rech_even . '%')->get();

        //$Evenements = Evenement::latest()->paginate(7);
        return  view('Evenement',compact('Evenements'))
        -> with('i',(request()->input('page',1)-1)*7);
    
        //return  view('\Admin\Secteur',compact('Secteurs'));
    }
    /**
     * Display a listing of the resource.
     */ 
    public function index()
    {
        //return  view('Evenement');
        $Evenements = Evenement::all();
        //$Evenements = Evenement::latest()->paginate(7);
        return  view('Evenement',compact('Evenements'))
        -> with('i',(request()->input('page',1)-1)*7);
    }
public function getInfo(Request $request)
{
   // dd( $request->all() ); 
    //$request->validate([ 'Evenement' => 'required|string|max:255']);
        $nom_even = $request->input('Evenement');
        //$Evene = even::where('nom_even', '=', $nom_even)->select('info_even');
        //return response()->json([$Evene]);
    
//echo("LLLL8".$nom_even);
    //$data= even::where('nom_even',$nom_even)->get('info_even');
    $data= even::where('nom_even',$nom_even)->first();
    return response()->json(['info_even24'=> $data ? $data->info_even : "null 28".$nom_even]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Evens = even::all();
        $Degres_impo_org_insts = degres_impo_org_inst::all();
        $Paticipations =paticipation::all();
        $Periodicites = periodicite::all();
        $Qui_orgs = qui_org::all();
        $Evenements = Evenement::all();
        return  view('Evenement_AJ',compact('Evenements','Degres_impo_org_insts','Paticipations','Periodicites',
    'Qui_orgs','Evens'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Evenement' => 'required|string|max:255',
            'Description'=> 'required|string|max:255',
            'qui_Orgqnise'=> 'required|string|max:255',
            'Inf_even'=> 'required|string|max:255',
            'Periodicite'=> 'required|string|max:255',
            'lieu_even'=> 'required|string|max:255',
            'date_even'=> 'required|Date|max:255',
            'theme_derier'=> 'required|string|max:255',
            'Participation_MTNIMA'=> 'required|string|max:255',
            'lieu_prochain'=> 'required|string|max:255',
            'Date_prochain'=> 'required|Date|max:255',
            'Degres_imp'=> 'required|string|max:255',
            'Niveau_imp'=> 'required|string|max:255',
            'Format_prochain'=> 'required|string|max:255',
            'Site_web_even'=> 'required|string|max:255',
        ]);
        $input =  $request->all();
        Evenement::create($input);
        //return  view('Evenement');
        return redirect()->route('Evenement.index')->with("ok");
    }

    /**
     * Display the specified resource.
     */
    public function show(Evenement $id)
    {
        $Evenements = Evenement::find($id);
        return  view('Evenement_AF',compact('Evenements'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evenement $id)
    {
        $Evens = even::all();
        $Evenements = Evenement::find($id);
        $Degres_impo_org_insts = degres_impo_org_inst::all();
        $Paticipations =paticipation::all();
        $Periodicites = periodicite::all();
        $Qui_orgs = qui_org::all();
        return  view('Evenement_M',compact('Evenements','Degres_impo_org_insts','Paticipations','Periodicites',
        'Qui_orgs','Evens'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evenement $id)
    {
        //dd( $id->all() );
        $request->validate([
            'Evenement' => 'required|string|max:255',
            'Description'=> 'required|string|max:255',
            'qui_Orgqnise'=> 'required|string|max:255',
            'Inf_even'=> 'required|string|max:255',
            'Periodicite'=> 'required|string|max:255',
            'lieu_even'=> 'required|string|max:255',
            'date_even'=> 'required|Date|max:255',
            'theme_derier'=> 'required|string|max:255',
            'Participation_MTNIMA'=> 'required|string|max:255',
            'lieu_prochain'=> 'required|string|max:255',
            'Date_prochain'=> 'required|Date|max:255',
            'Degres_imp'=> 'required|string|max:255',
            'Niveau_imp'=> 'required|string|max:255',
            'Format_prochain'=> 'required|string|max:255',
            'Site_web_even'=> 'required|string|max:255',
        ]);
        $input =  $request->all();
        $id->update($input);
        return redirect()->route('Evenement.index')->with('success',"Modifie");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evenement $id)
    {
        
        $id->delete();
        return redirect()->route('Evenement.index')->with('success_S',"suprime");
    }
}
