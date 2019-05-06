<?php

namespace Hosein\Members\Controllers;


use Hosein\Members\members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class SignupController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(session("email")){
            $members=members::where("email",session("email"))->first();
            return redirect("test");
        }
        return view('MemberView::signup');
    }

    /**
     * Register a member in database
     *
     * @return void
     */
    public function signUp(Request $request){
        Validator::make($request->all(),[
            'name' => ['required','string','max:150'],
            'email' => ['required','string','email','max:255','unique:members'],
            'password' => ['required','string','min:8','confirmed']
        ])->validate();
        $members=new members();
        $members->name=$request->all()["name"];
        $members->email=$request->all()["email"];
        $members->password=Hash::make($request->all()["password"]);
        $members->save();
    }
}
