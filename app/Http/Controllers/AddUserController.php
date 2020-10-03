<?php

namespace App\Http\Controllers;

use App\AddUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Redirect,Response,File;

class AddUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = AddUser::find(2);
        // print_r()

        return view('admin.add-user');
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function create(array $data)
    {
        // return AddUser::create([
        //     'name' => $data['name'],
        //     'stambuk' => $data['stambuk'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        //     'image' => $data['image']
        // ]);

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
            'name' => ['required', 'string', 'max:255'],
            'stambuk' => ['required','string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'image' => ['required', 'image']

        ]);





            $files = $request->file('image');

                 // Upload Original Image
                 $profileImage = rand() . '.' . $files->getClientOriginalExtension();
                 $files->move(public_path('image'),$profileImage);

                $input_data = array (
                    'name' => $request->name,
                    'stambuk' => $request->stambuk,
                    'email' => $request->email,
                    'password' =>  Hash::make($request->password),
                    'image' => $profileImage,

                );

                AddUser::create($input_data);
                return redirect('/add-user')->with('success','Data Added');




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AddUser  $addUser
     * @return \Illuminate\Http\Response
     */
    public function show(AddUser $addUser)
    {
    //     $addUser = AddUser::latest()->paginate(5);

    //     return view('admin.data-user',compact('addUser'))
    //         ->with('i', (request()->input('page', 1) - 1) * 5);
    // }
        $addUser = AddUser::all();
        return view('admin.data-user')->with('addUser', $addUser);



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AddUser  $addUser
     * @return \Illuminate\Http\Response
     */
    public function edit(AddUser $addUser,$id)
    {

        $addUser = AddUser::find($id);
        // // printf($addUser);
        return view('admin.edit-user')->with('addUser', $addUser);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AddUser  $addUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'stambuk' => ['required','string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'image' => ['required', 'image']

        ]);

        $files = $request->file('image');

                 // Upload Original Image
                 $profileImage = rand() . '.' . $files->getClientOriginalExtension();
                 $files->move(public_path('image'),$profileImage);

                $input_data = array (
                    'name' => $request->name,
                    'stambuk' => $request->stambuk,
                    'email' => $request->email,
                    'password' =>  Hash::make($request->password),
                    'image' => $profileImage,

                );


        AddUser::whereId($id)->update($input_data);
        return redirect('/data-user')->with('success','Data Update');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AddUser  $addUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddUser $addUser, $id)
    {
        $addUser = AddUser::find($id);
        $addUser->delete();
        return redirect('/data-user')->with('success','Data Delete');
    }

}
