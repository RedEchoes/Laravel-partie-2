<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller {
    /* public function __construct() {
        $this -> middleware('ajax') -> only('destroy');
    } */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user) {
        $this -> authorize('manage', $user);

        return view('profiles.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user) {
        $this -> authorize('manage', $user);
        $request -> validate([
            'name' => 'required|max:255|unique:users,name,'.$user -> id,
            'email' => 'required|string|email|max:255|unique:users,email,'.$user -> id,
        ]);
        $user -> update([
            'name' => $request -> name,
            'email' => $request -> email,
        ]);

        return back() -> with('ok', __('Le profil a bien été mis à jour'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $users = User::find($id);
        
        $users->delete();
    
        return redirect('/');
    }
}
