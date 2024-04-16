<?php

namespace App\Http\Controllers;

use App\Models\role_user;
use Illuminate\Http\Request;

class Role_usersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Admin')->only(['index','create','edit','update','destroy']);
        $this->middleware('SuperAdmin')->only([ 'create','edit','update','destroy']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(role_user $role_user)
    {
        $user = auth()->user();

    // تحقق من الدور ومنع رؤية المحتوى
    if ($user && $user->hasRole('user')) {
        return redirect()->back()->with('error', 'لا يمكنك رؤية هذا المحتوى.');
    }

    // باقي الكود لعرض المحتوى
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(role_user $role_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, role_user $role_user)
    {
        'user_id'
        'role_id'
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(role_user $role_user)
    {
        $user = auth()->user();

    if ($user && $user->hasRole('user')) {
        return redirect()->back()->with('error', 'Impossible de suprime ');
    }

    // باقي الكود لحذف الدور
    }
}
