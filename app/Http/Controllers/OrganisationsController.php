<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\organisation;
//use App\Http\Controllers\DB;
use Illuminate\Support\Facades\DB;
use App\Models\org_ch;
use App\Models\short_org;
use App\Models\degres_impo_org_inst;
use App\Models\Secteur;
use App\Models\statut;
use App\Models\qui_paie_coti;
use App\Models\etat_coti;


use App\Utilities\PdfGenerator;
use Barryvdh\DomPDF\Facade\pdf;

use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;

use Dompdf\Options;

class OrganisationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
        $this->middleware('Admin')->only(['create','edit','update','destroy']);
    }

    public function genpdf()
{
    $options = new Options();
    $options->set('defaultFont', 'Arial');

    $dompdf = new Dompdf($options);
    $dompdf->loadHtml('<h1>Hello World!</h1>');

    // (Optional) Set the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    return $dompdf->stream();
}
    public function genpdf2()
    {
        ini_set('max_execution_time',3600);
/* 
        $Qrg_sects = DB::table('secteurs')
        ->join('org_ches', 'secteurs.id', '=', 'org_ches.id_sect')
        ->join('organisations', 'org_ches.id_org', '=', 'organisations.id')
        ->where('org_ches.id_org', '=', $id->id)->select('secteurs.nom_secteur')->get();

        $Qui_paie_orgs = DB::table('qui_paie_cotis')
        ->join('org_ches', 'qui_paie_cotis.id', '=', 'org_ches.id_qui_paie')
        ->join('organisations', 'org_ches.id_org', '=', 'organisations.id')
        ->where('org_ches.id_org', '=', $id->id)->select('qui_paie_cotis.nom_qui_paie_coti')->get();

        $Etat_orgs = DB::table('etat_cotis')
        ->join('org_ches', 'etat_cotis.id', '=', 'org_ches.id_etat')
        ->join('organisations', 'org_ches.id_org', '=', 'organisations.id')
        ->where('org_ches.id_org', '=', $id->id)->select('etat_cotis.nom_Etat_coti')->get();
        
        $Organisations = organisation::find($id);

    $data=['tite'=>'med','date' => date('m/d/y'), 'Organisations'=> $Organisations ,'Qrg_sects'=> $Qrg_sects,
    'Qui_paie_orgs'=> $Qui_paie_orgs,'Etat_orgs'=>  $Etat_orgs
    ];

    
    // احضار صفحة HTML
    //$html = View::make('welcome')->render();

$html = "<!doctype html>
<html><head><title>pdf</title></head>
<body>
mmmmmm
</body>
</html>
";
    // تهيئة Dompdf
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);


    $dompdf->render();
*/
    //return $dompdf->stream('file.pdf');
       //$pdf = pdf::loadView('Organisation_AF', $data,compact('Organisations','Qrg_sects','Etat_orgs','Qui_paie_orgs'));
      //return $pdf->stream('Organisation_AF'.$id.'.pdf');
//Tcpdf
     /* $pdfGenerator = new PdfGenerator();
      $pdfGenerator->generatePDF('welcome');
      $pdfGenerator->output('Organisation_AF.pdf');
     */ 
        $pdf = pdf::loadView('welcome');
       return $pdf->download('welcome'.'.pdf');
       //return  view('Organisation_AF',compact('Organisations','Qrg_sects','Etat_orgs','Qui_paie_orgs'));
    }
    /**
     * Display a listing of the resource.
     */
    public function rech(Request $request) 
    {  
        //dd( $request->all()); 
        $rech_org = $request->input('rech_org');
        //$rech_Deg_org = $request->input('rech_Deg_org');
        $Organisations = organisation::where('Nom_Org', 'like', '%' . $rech_org . '%' )
        ->orWhere('Mission_Org', 'like', '%' . $rech_org . '%')
        ->orWhere('Statut_Org', 'like', '%' . $rech_org . '%')
        ->orWhere('Date_Org', 'like', '%' . $rech_org . '%')
        ->orWhere('Histo', 'like', '%' . $rech_org . '%')
        ->orWhere('Siege_Org', 'like', '%' . $rech_org . '%')
        ->orWhere('Date_adh_Mauri', 'like', '%' . $rech_org . '%')
        ->orWhere('Cotisation', 'like', '%' . $rech_org . '%')
        ->orWhere('Montant_coti', 'like', '%' . $rech_org . '%')
        ->orWhere('Etat_cotise_Org', 'like', '%' . $rech_org . '%')
        ->orWhere('Sie_web_Org', 'like', '%' . $rech_org . '%')
        ->orWhere('Postes_ocuup', 'like', '%' . $rech_org . '%')
        ->orWhere('Candid_Mau_Org', 'like', '%' . $rech_org . '%')
        ->orWhere('Degres_Org', 'like', '%' . $rech_org . '%')
        ->orWhere('PF_MTNIMA', 'like', '%' . $rech_org . '%')->get();

        //$Organisations = organisation::all();
        
        $Degres_impo_org_insts = degres_impo_org_inst::all();
        return  view('Organisation',compact('Organisations','Degres_impo_org_insts'))
        -> with('i',(request()->input('page',1)-1)*7);
    
        //return  view('\Admin\Secteur',compact('Secteurs'));
    }


    public function index()
    {
        $Organisations = organisation::all();
        foreach($Organisations as $org) {
       $Qrg_sects1 = "SELECT secteurs.nom_secteur FROM secteurs
            JOIN org_ches ON secteurs.id = org_ches.id_sect
            JOIN organisations ON organisations.id = org_ches.id_org WHERE (org_ches.id_org=$org->id)";
        $Qrg_sects = DB::select($Qrg_sects1); }
/*

//SELECT * FROM secteurs,org_ches,organisations WHERE (org_ches.id_org=organisations.id AND secteurs.id = org_ches.id_sect);
$Organi_id =DB::table('organisations')->select('organisations.id')->all();
        $Qrg_sects = DB::table('secteurs')
        ->join('org_ches', 'secteurs.id', '=', 'org_ches.id_sect')
        ->join('organisations', 'org_ches.id_org', '=', 'organisations.id')
        ->where('org_ches.id_org', '=', $Organi_id)
        ->select('secteurs.nom_secteur')
        ->get();*/

        //$Qrg_sects = "SELECT `nom_secteur` FROM `secteurs` , `org_chs`, `organisations` WHERE (secteurs.id=org_chs.id_sect AND organisations.id=org_chs.id_org);";
       // $Qrg_sect1 =  "SELECT * FROM secteurs WHERE \'org_chs.id_sect = secteurs.id and org_chs.id_org = organisations.id\';";
        $Qrg_qui_paie ="SELECT * FROM `qui_paie_cotis` , `org_chs`, `organisations` WHERE (qui_paie_cotis.id=org_chs.id_qui_paie AND organisations.id=org_chs.id_org);";
        $Qrg_etat = "SELECT * FROM `etat_cotis` , `org_chs`, `organisations` WHERE (secteurs.id=org_chs.id_etat AND organisations.id=org_chs.id_org);";
        
       
        $Degres_impo_org_insts = degres_impo_org_inst::all();
        //$Organisations = organisation::latest()->paginate(7);
        return  view('Organisation',compact('Organisations','Degres_impo_org_insts','Qrg_sects'))
        -> with('i',(request()->input('page',1)-1)*7);
    }
    public function search(organisation $search_org)
    { 
        foreach($Organisations as $org) {
        $Qrg_sects1 = "SELECT secteurs.nom_secteur FROM secteurs
             JOIN org_ches ON secteurs.id = org_ches.id_sect
             JOIN organisations ON organisations.id = org_ches.id_org WHERE (org_ches.id_org=$org->id)";
         $Qrg_sects = DB::select($Qrg_sects1); }
        $Organisations= organisation::where('Nom_Org', 'like', "%{$value}%")->pluck('name', 'id')->all();
        $Degres_impo_org_insts = degres_impo_org_inst::all();
        return  view('Organisation',compact('Organisations','Degres_impo_org_insts','Qrg_sects'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $Etat_cotis = etat_coti::all();
        $Qui_paie_cotis =qui_paie_coti::all();
        $Statuts =statut::all();
        $Secteurs = Secteur::all();
        $Short_orgs = short_org::all();
        $Degres_impo_org_insts = degres_impo_org_inst::all();
        return  view('Organisation_AJ',compact('Degres_impo_org_insts','Secteurs','Statuts','Qui_paie_cotis','Etat_cotis','Short_orgs'));
        //-> with('i',(request()->input('page',1)-1)*7);
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd( $request->all() );
        //dd( $request->input('Secteur_Org1') );
        //dd( $request->input('Peie_Org') );
        $request->validate([
            'Nom_Org' => 'required|string|max:255',
            'Secteur_Org1.*'=> 'required|string|max:255',
            'Mission_Org'=> 'required|string|max:255',
            'Statut_Org'=> 'required|string|max:255',
            'Date_Org'=> 'required|Date', 
            'Histo'=> 'required|string|max:255',
            'Siege_Org'=> 'required|string|max:255',
            'Date_adh_Mauri'=> 'required|Date',
            'Cotisation'=> 'required|string|max:255',
            'Montant_coti'=> 'required|string|max:255',
            'Peie_Org0.*'=> 'required|string|max:255',
            'Etat_cotise_Org0.*'=> 'required|string|max:255',
            'Sie_web_Org'=> 'required|string|max:255',
            'Contacts_Org'=> 'required|string|max:255',
            'Postes_ocuup'=> 'required|string|max:255',
            'Candid_Mau_Org'=> 'required|string|max:255',
            'Degres_Org'=> 'required|string|max:255',
            'PF_MTNIMA'=> 'required|string|max:255',
        ]);


        try {
            DB::beginTransaction();
            $organisation = Organisation::create($request->all());
            
            $Sect_orgs =$request->input('Secteur_Org1');
            //if (!empty($select_Sect)) {
            if (is_array($Sect_orgs)){
                foreach($Sect_orgs as $sect_org1) { $org_sect = ['id_sect' => $sect_org1,'id_org' =>$organisation->id, ];
                    $org_ch = org_ch::create($org_sect); }}
            elseif (!empty($Sect_orgs)) { die('Error: $selectedSecteurs should be an array.'); }
            else { die('Error: $selectedSecteurs should be an array 22.');}
            
            $Qui_paie_orgs =$request->input('Peie_Org0');
            //dd($Qui_paie_orgs);
            //if (!empty($select_Sect)) {
            if (is_array($Qui_paie_orgs)){
                foreach($Qui_paie_orgs as $paie_org) { $org_paie = ['id_qui_paie' => $paie_org,'id_org' =>$organisation->id, ];
                    $org_ch = org_ch::create($org_paie); }}
            elseif (!empty($Qui_paie_orgs)) { die('Error: $selectedSecteurs should be an array.'); }
            else { }

           $Etat_orgs =$request->input('Etat_cotise_Org0');
            //if (!empty($select_Sect)) {
            if (is_array($Etat_orgs)){
                foreach($Etat_orgs as $etat_orgs) { $org_etat = ['id_etat' => $etat_orgs,'id_org' =>$organisation->id, ];
                    $org_ch = org_ch::create($org_etat); }}
            elseif (!empty($Etat_orgs)) { die('Error: $selectedSecteurs should be an array.'); }
            else { }

            DB::commit();
            return redirect()->route('Organisation.index')->with('success_A',$request->Nom_Org ."  est Ajoute");
        } 
        catch (\Exception $e) { DB::rollback();
            return redirect()->back()->with('error',$request->Nom_Org ." n est pas Ajoute" . $e->getMessage()); } 
    }
/*
////////////////////////////////
        $input =  $request->all();
        organisation::create($input);
        $request->validate([
            'Secteur_Org'=> 'required|string|max:255',
        ]);
        return redirect()->route('Organisation.index')->with('success_A',$request->Nom_Org ."  est Ajoute");
    }  */

    /**
     * Display the specified resource.
     */
    public function show(organisation $id)
    { 
        $Qrg_sects = DB::table('secteurs')
        ->join('org_ches', 'secteurs.id', '=', 'org_ches.id_sect')
        ->join('organisations', 'org_ches.id_org', '=', 'organisations.id')
        ->where('org_ches.id_org', '=', $id->id)->select('secteurs.nom_secteur')->get();

        $Qui_paie_orgs = DB::table('qui_paie_cotis')
        ->join('org_ches', 'qui_paie_cotis.id', '=', 'org_ches.id_qui_paie')
        ->join('organisations', 'org_ches.id_org', '=', 'organisations.id')
        ->where('org_ches.id_org', '=', $id->id)->select('qui_paie_cotis.nom_qui_paie_coti')->get();

        $Etat_orgs = DB::table('etat_cotis')
        ->join('org_ches', 'etat_cotis.id', '=', 'org_ches.id_etat')
        ->join('organisations', 'org_ches.id_org', '=', 'organisations.id')
        ->where('org_ches.id_org', '=', $id->id)->select('etat_cotis.nom_Etat_coti')->get();
        
    
        //$Qrg_sects1 = "SELECT secteurs.nom_secteur FROM secteurs JOIN org_chs ON secteurs.id = org_chs.id_sect JOIN organisations ON org_chs.id_org = $id->id WHERE (secteurs.id=org_chs.id_sect AND $id->id =,org_chs.id_org);";
        //$Qrg_sects = DB::select($Qrg_sects1);
        //$Qrg_sects3 = "SELECT `nom_secteur` FROM `secteurs` , `org_chs`, `organisations` WHERE (secteurs.id=org_chs.id_sect AND", $id,"=","org_chs.id_org);";
        
        $Organisations = organisation::find($id);
        return  view('Organisation_AF',compact('Organisations','Qrg_sects','Etat_orgs','Qui_paie_orgs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(organisation $id)
    {
        $Qrg_sects = DB::table('secteurs')
        ->join('org_ches', 'secteurs.id', '=', 'org_ches.id_sect')
        ->join('organisations', 'org_ches.id_org', '=', 'organisations.id')
        ->where('org_ches.id_org', '=', $id->id)
        ->select('secteurs.nom_secteur','org_ches.id_sect' )
        ->get();
        $Qui_paie_orgs = DB::table('qui_paie_cotis')
        ->join('org_ches', 'qui_paie_cotis.id', '=', 'org_ches.id_qui_paie')
        ->join('organisations', 'org_ches.id_org', '=', 'organisations.id')
        ->where('org_ches.id_org', '=', $id->id)
        ->select('qui_paie_cotis.nom_qui_paie_coti', 'org_ches.id_qui_paie')->get();

        $Etat_orgs = DB::table('etat_cotis')
        ->join('org_ches', 'etat_cotis.id', '=', 'org_ches.id_etat')
        ->join('organisations', 'org_ches.id_org', '=', 'organisations.id')
        ->where('org_ches.id_org', '=', $id->id)
        ->select('etat_cotis.nom_Etat_coti', 'org_ches.id_etat')->get();
        

        $Etat_cotis = etat_coti::all();
        $Qui_paie_cotis =qui_paie_coti::all();
        $Statuts =statut::all();
        $Secteurs = Secteur::all();
        $Degres_impo_org_insts = degres_impo_org_inst::all();
        $Organisations = organisation::find($id);
        return  view('Organisation_M',compact('Organisations','Secteurs','Degres_impo_org_insts','Statuts','Qui_paie_cotis','Etat_cotis','Qrg_sects','Qui_paie_orgs','Etat_orgs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, organisation $id,org_ch $id_org)
    {
        //dd( $request->all() );
        $request->validate([
            'Nom_Org' => 'required|string|max:255',
            'Secteur_Org0.*'=> 'required|string|max:255',
            'Mission_Org'=> 'required|string|max:255',
            'Statut_Org'=> 'required|string|max:255',
            'Date_Org'=> 'required|Date', 
            'Histo'=> 'required|string|max:255',
            'Siege_Org'=> 'required|string|max:255',
            'Date_adh_Mauri'=> 'required|Date',
            'Cotisation'=> 'required|string|max:255',
            'Montant_coti'=> 'required|string|max:255',
            'Peie_Org0.*'=> 'required|string|max:255',
            'Etat_cotise_Org0.*'=> 'required|string|max:255',
            'Sie_web_Org'=> 'required|string|max:255',
            'Contacts_Org'=> 'required|string|max:255',
            'Postes_ocuup'=> 'required|string|max:255',
            'Candid_Mau_Org'=> 'required|string|max:255',
            'Degres_Org'=> 'required|string|max:255',
            'PF_MTNIMA'=> 'required|string|max:255',
        ]);
        try {
            DB::beginTransaction();
    
            // Update secteurs
            $sect_orgs = $request->input('Secteur_Org0');
            $Qui_paie_orgs =$request->input('Peie_Org0');
            $Etat_orgs =$request->input('Etat_cotise_Org0');

            $id_org->where('id_org', $id->id)->delete();
            //dd($sect_orgs);
            foreach ($sect_orgs as $sect_org) {
                $org_sect = ['id_sect' => $sect_org, 'id_org' => $id->id];
                $id_org->updateOrCreate(['id_org' => $id->id, 'id_sect' => $sect_org], $org_sect);}

            foreach($Qui_paie_orgs as $paie_org) { $org_paie = ['id_qui_paie' => $paie_org,'id_org' =>$id->id, ];
                    $id_org->updateOrCreate(['id_org' => $id->id, 'id_qui_paie' => $paie_org], $org_paie);}
            
            foreach($Etat_orgs as $etat_orgs) { $org_etat = ['id_etat' => $etat_orgs,'id_org' =>$id->id, ];
                $id_org->updateOrCreate(['id_org' => $id->id, 'id_etat' => $etat_orgs], $org_etat);}
            

            $id->update($request->except('Secteur_Org','Peie_Org','Etat_cotise_Org'));

            DB::commit();

        return redirect()->route('Organisation.index')->with('success_A', $id->Nom_Org . " est modifie ");
        }
        catch (\Exception $e) {
            DB::rollback();
    
            return redirect()->back()->withInput()->with('error', $id->Nom_Org . ".nn " . $e->getMessage());
        }
       /* $input =  $request->all();
        $id->update($input);*/
    
        //return redirect()->route('Organisation.index')->with('success_A',$id->Nom_Org." est Modifie");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(organisation $id)
    {
        
        $id->delete();
        return redirect()->route('Organisation.index')->with('success_S',$id->Nom_Org." est suprime");
    }
}
