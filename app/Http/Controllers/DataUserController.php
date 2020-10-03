<?php

namespace App\Http\Controllers;

use App\DataUser;
use App\AddUser;
use Illuminate\Http\Request;

class DataUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $adduser = AddUser::all();
        // return view('admin.data-user',compact('adduser'));
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
     * @param  \App\DataUser  $dataUser
     * @return \Illuminate\Http\Response
     */
    public function show(DataUser $dataUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataUser  $dataUser
     * @return \Illuminate\Http\Response
     */
    public function edit(DataUser $dataUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataUser  $dataUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataUser $dataUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataUser  $dataUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataUser $dataUser)
    {
        //
    }
}
