<?php

namespace App\Http\Controllers;

use App\ProfilAsisten;
use Illuminate\Http\Request;

class ProfilAsistenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.asisten.profil-asisten');
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
     * @param  \App\ProfilAsisten  $profilAsisten
     * @return \Illuminate\Http\Response
     */
    public function show(ProfilAsisten $profilAsisten)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProfilAsisten  $profilAsisten
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfilAsisten $profilAsisten)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProfilAsisten  $profilAsisten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProfilAsisten $profilAsisten)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProfilAsisten  $profilAsisten
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfilAsisten $profilAsisten)
    {
        //
    }
}
