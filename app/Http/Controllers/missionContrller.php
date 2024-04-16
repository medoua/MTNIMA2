<?php

namespace App\Http\Controllers;
use App\Models\Secteur;
use App\Models\mission;
use Illuminate\Http\Request;

class missionContrller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        
        $this->middleware('Admin')->only(['create','edit','update','destroy']);
    }

    public function rech(Request $request) 
    {  
        //dd( $request->all()); 
        $rech_mission = $request->input('rech_mission');
        $Missions = mission::where('Evenement', 'like', '%' . $rech_mission . '%' )
        ->orWhere('Secteur_mis', 'like', '%' . $rech_mission . '%')
        ->orWhere('qui_Organise', 'like', '%' . $rech_mission . '%')
        ->orWhere('lieu_mis', 'like', '%' . $rech_mission . '%')
        ->orWhere('date_d', 'like', '%' . $rech_mission . '%')
        ->orWhere('date_f', 'like', '%' . $rech_mission . '%')
        ->orWhere('theme_evenement', 'like', '%' . $rech_mission . '%')
        ->orWhere('Participants', 'like', '%' . $rech_mission . '%')
        ->orWhere('Nature_prise_en_charge', 'like', '%' . $rech_mission . '%')
        ->orWhere('Ordre_mission', 'like', '%' . $rech_mission . '%')
        ->orWhere('Resume_evenement', 'like', '%' . $rech_mission . '%')
        ->orWhere('Pieces_Joint', 'like', '%' . $rech_mission . '%')
        ->orWhere('lieu_prochain', 'like', '%' . $rech_mission . '%')
        ->orWhere('Date_prochain', 'like', '%' . $rech_mission . '%')->get();
        
        return  view('mission',compact('Missions'))
        -> with('i',(request()->input('page',1)-1)*7);
    }
    /**
     * Display a listing of the resource.
     */  

    public function index()
    {
        $Missions = mission::all();
        //$Missions = mission::latest()->paginate(7);
        return  view('mission',compact('Missions'))
        -> with('i',(request()->input('page',1)-1)*7);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $Secteurs = Secteur::all();
        return  view('mission_AJ',compact('Secteurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        //dd( $request->all() );
        $request->validate([
            'Evenement'=> 'required|string|max:255',
            'Secteur_mis'=> 'required|string|max:255',
            'qui_Organise'=> 'required|string|max:255',
            'lieu_mis'=> 'required|string|max:255',
            'date_d'=> 'required|Date',
            'date_f'=> 'required|Date',
            'theme_evenement'=> 'required|string|max:255',
            'Participants'=> 'required|string|max:255',
            'Nature_prise_en_charge'=> 'required|string|max:255',
            'Ordre_mission'=> 'required|mimes:jpeg,png,jpg,gif,pdf,doc,docx,txt,xlsx|max:2048',
            'Resume_evenement'=> 'required|string|max:1255',
            'Pieces_Joint'=> 'required|string|max:1255',
            'lieu_prochain'=> 'required|string|max:1255',
            'Date_prochain'=> 'required|Date',
            
        ]);
        $input =  $request->all();
        if ($file = $request->file('Ordre_mission')) {
            $destinationPath ='Uploads/Mission';
            $fileName =date('Y-m-d-H-i-s')."_Mission.".$file->getClientOriginalExtension();
            $file->move(public_path($destinationPath), $fileName); 
            $input['Ordre_mission']="$fileName";
        }
        //$file = $request->file('Ordre_mission');
        //$fileName = time().'_'.$file->getClientOriginalName();
        //$file->move(public_path('UploadS123/Mission'),'Mission_'.$fileName);

        
        mission::create($input);

        return redirect()->route('mission.index')->with('success',"Ajoute");
    }

    /**
     * Display the specified resource.
     */
    public function show(mission $id)
    {
        $Missions = mission::find($id);
        return  view('mission_AF',compact('Missions'));
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mission $id)
    {
        $Missions = mission::find($id);
        $Secteurs = Secteur::all();
        return  view('mission_M',compact('Missions','Secteurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mission $id)
    {
        //dd( $request->all() );
        $request->validate([
            'Evenement'=> 'required|string|max:255',
            'Secteur_mis'=> 'required|string|max:255',
            'qui_Orgqnise'=> 'required|string|max:255',
            'lieu_mis'=> 'required|string|max:255',
            'date_d'=> 'required|Date',
            'date_f'=> 'required|Date',
            'theme_evenement'=> 'required|string|max:255',
            'Participants'=> 'required|string|max:255',
            'Nature_prise_en_charge'=> 'required|string|max:255',
            //'Ordre_mission'=> 'required',
            'Resume_evenement'=> 'required|string|max:1255',
            'Pieces_Joint'=> 'required|string|max:255',
            'lieu_prochain'=> 'required|string|max:255',
            'Date_prochain'=> 'required|Date',
            
        ]);

        $input =  $request->all();
        if ($file = $request->file('Ordre_mission')) {
            $destinationPath ='Uploads/Mission';
            $fileName =date('Y-m-d-H-i-s')."_UP_Mission.".$file->getClientOriginalExtension();
            $file->move(public_path($destinationPath), $fileName); 
            $input['Ordre_mission']="$fileName";
        } else {
            unset( $input['Ordre_mission']);
        }

        //$file = $request->file('Ordre_mission');
        //$fileName = time().'_'.$file->getClientOriginalName();
        //$file->move(public_path('UploadS188823/Mission'),'Mission_'.$fileName);

        //$input =  $request->all();
        $id->update($input);
        return redirect()->route('mission.index')->with('success',"Modifie");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mission $id)
    {
        $id->delete();
        return redirect()->route('mission.index')->with('success_S',"suprime");
    }
}
