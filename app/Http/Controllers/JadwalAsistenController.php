<?php

namespace App\Http\Controllers;

use App\JadwalAsisten;

use Illuminate\Http\Request;
use Auth;

class JadwalAsistenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.asisten.jadwal-asisten');
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
            'waktu' => ['required', 'string', 'max:255'],
            'id_status' => ['required', 'string', 'max:255'],
            'id_praktikum' => ['required', 'string', 'max:255'],
            'id_ruangan' => ['required', 'string', 'max:255'],
            
        ]);

                $input_data = array (
                    
                    'waktu' => $request->waktu,
                    'id' => Auth::guard('assistant')->user()->id,
                    'id_status' => $request->id_status,
                    'id_praktikum' => $request->id_praktikum,
                    'id_ruangan' => $request->id_ruangan
                );

                JadwalAsisten::create($input_data);
                return redirect('/jadwal-asisten')->with('success','Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JadwalAsisten  $jadwalAsisten
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
  
     
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JadwalAsisten  $jadwalAsisten
     * @return \Illuminate\Http\Response
     */
    public function edit(JadwalAsisten $jadwalAsisten)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JadwalAsisten  $jadwalAsisten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JadwalAsisten $jadwalAsisten)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JadwalAsisten  $jadwalAsisten
     * @return \Illuminate\Http\Response
     */
    public function destroy(JadwalAsisten $jadwalAsisten)
    {
        //
    }
}
