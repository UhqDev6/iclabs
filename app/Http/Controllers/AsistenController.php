<?php

namespace App\Http\Controllers;

use App\Asisten;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Redirect,Response,File;
use Auth;
use Illuminate\Support\Facades\DB;

class AsistenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $asisten = Auth::guard('assistant')->user()->id;
        // dd($asisten);
        $asisten = DB::table('vw_data')->get();
        return view('users.asisten.assistant')->with('asisten', $asisten);
        // return view('users.asisten.assistant', ['asisten' => '$asisten']);
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
            'status' => ['required', 'string', 'max:255'],
            // 'id' => ['required', 'string', 'max:255'],
            
        ]);

                $input_data = array (
                    
                    'status' => $request->status,
                    'id' => Auth::guard('assistant')->user()->id
                );

                Asisten::create($input_data);
                return redirect('/assistant')->with('success','Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Asisten  $asisten
     * @return \Illuminate\Http\Response
     */
    public function show(Asisten $asisten, $id)
    {
        // $asisten = Asisten::find($id);
        // return view('users.asisten.assistant')->with('asisten', $asisten);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Asisten  $asisten
     * @return \Illuminate\Http\Response
     */
    public function edit(Asisten $asisten, $id)
    {
        $asisten = Asisten::find($id);
        // printf($asisten);
        return view('users.asisten.editstatus-asisten')->with('asisten', $asisten);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Asisten  $asisten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asisten $asisten,$id)
    {
        request()->validate([
            'status' => ['required', 'string', 'max:255'],
            // 'id' => ['required', 'string', 'max:255'],
            
        ]);
        

                $input_data = array (
                    'status' => $request->status,
                    'id' => Auth::guard('assistant')->user()->id
                );


        Asisten::whereId($id)->update($input_data);
        return redirect('/assistant')->with('success','Data Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Asisten  $asisten
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asisten $asisten,$id)
    {
        $asisten = Asisten::find($id);
        // printf($asisten);
        $asisten->delete();
        return redirect('/assistant')->with('success','Data Delete');
    }
}
