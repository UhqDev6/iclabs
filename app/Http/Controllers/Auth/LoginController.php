<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\AddUser;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:assistant')->except('logout');
    }


    //menampilkan form login admin
    public function showAdminLoginForm()
    {
        return view('auth.login', ['url' => 'admin']);
    }
    
    //proses login admin
    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' =>$request->password], $request->get('remember')))
        {
            // $addUser = AddUser::all();
            // return $addUser->map(function($addUser)
            // {
            //     return $addUser->name;
               
            // })->count();
            return redirect()->intended('/add-user');
        }
            return back()->withInput($request->only('email','remember'));
    }

    //menampilkan form login assistant
    public function showAssistantLoginForm()
    {
        return view('auth.login', ['url' => 'assistant']);
    }

    //proses login assistant
    public function assistantLogin(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::guard('assistant')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember')))
        {
            return redirect()->intended('/assistant');
        }
            return back()->withInput($request->only('email', 'remember'));
    }


}
