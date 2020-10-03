<?php

namespace App\Http\Controllers;

use App\EditUser;
use App\AddUser;
use Illuminate\Http\Request;

class EditUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.edit-user');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EditUser  $editUser
     * @return \Illuminate\Http\Response
     */
    public function show(EditUser $editUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EditUser  $editUser
     * @return \Illuminate\Http\Response
     */
    public function edit(EditUser $editUser)
    {
        // $editUser = AddUser::find($id);
        // // printf($addUser);
        // return view('admin.edit-user')->with('editUser', $editUser);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EditUser  $editUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EditUser $editUser)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'stambuk' => ['required','string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8'],
        //     'image' => ['required', 'image']
            
        // ]);

        // $editUser->update($request->all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EditUser  $editUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(EditUser $editUser)
    {
        //
    }
}
