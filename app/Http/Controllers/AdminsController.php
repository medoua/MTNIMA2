<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use App\Models\User;
use App\Models\role_user;

use Illuminate\Http\Request;
use App\Notifications\NewUserNotification;


class AdminsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Admin')->only([ 'index','create','edit','update','destroy']);
        $this->middleware('SuperAdmin')->only([ 'create','edit','update','destroy']);
    }

    public function rech(Request $request) 
    {  
        $rech = $request->input('rech');
        $Users = User::where('name', 'like', '%' . $rech . '%')->
        orWhere('email', 'like', '%' . $rech . '%')->get();
        //$Users = User::latest()->paginate(7);
        return  view('\Admin\user',compact('Users'))
        -> with('i',(request()->input('page',1)-1)*7); 
        //return  view('\Admin\user',compact('Users'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Users = User::all();
        return  view('\Admin\user',compact('Users'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_secteur' => 'required|string|max:255',
        ]);
        $input =  $request->all();
        secteur::create($input);
        return redirect()->route('/Secteur')->with("enre");
    }

    /**
     * Display the specified resource.
     */
    public function show(Admins $admins)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admins $admins)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admins $admins)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User  $id, role_user $id1)
    {
        //dd($id);
        $id->delete();
        return redirect()->route('user.index')->with('success_S',"suprime");
    }

   

}
