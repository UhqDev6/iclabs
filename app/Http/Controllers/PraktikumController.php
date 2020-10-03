<?php

namespace App\Http\Controllers;

use App\Praktikum;
use App\Ruangan;
use App\Asisten;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Redirect,Response,File;

class PraktikumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.praktikum');
        // $praktikum = Praktikum::all();
        // return view('users.asisten.jadwal-asisten')->with('praktikum', $praktikum);

        // return view('users.asisten.jadwal-asisten')->with('praktikum', $praktikum);
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

        request()->validate([
            'kd_mp' => ['required', 'string', 'max:255'],
            'praktikum' => ['required','string', 'max:255'],


        ]);


                $input_data = array (
                    'kd_mp' => $request->kd_mp,
                    'praktikum' => $request->praktikum,


                );

                Praktikum::create($input_data);
                return redirect('/praktikum')->with('success','Data Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Praktikum  $praktikum
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $praktikum = Praktikum::all();
        $ruangan = Ruangan::all();
        $status = Asisten::all();

         return view('users.asisten.jadwal-asisten',compact('praktikum','ruangan','status'));
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Praktikum  $praktikum
     * @return \Illuminate\Http\Response
     */
    public function edit(Praktikum $praktikum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Praktikum  $praktikum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Praktikum $praktikum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Praktikum  $praktikum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Praktikum $praktikum)
    {
        //
    }
}
