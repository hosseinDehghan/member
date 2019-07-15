<?php

namespace Hosein\Members\Controllers;

use Hosein\Members\members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class SigninController extends Controller
{
    
    public function __construct()
    {

    }

    
    public function index()
    {
        if(session("email")){
            $members=members::where("email",session("email"))->first();
            return redirect("test");
        }
        return view('MemberView::signin');
    }

    /**
     * Register a member in database
     *
     * @return Redirect
     */
    public function signIn(Request $request){
        Validator::make($request->all(),[
            'email' => ['required','string','email','max:255'],
            'password' => ['required','string','min:8']
        ])->validate();
        $members=members::where("email",$request->all()["email"])->first();
        if(Hash::check($request->all()["password"],$members->password)){
            session([
                "email"=>$request->all()["email"]
            ]);
            return redirect("test");
        }
        else{
            return redirect("signin")->with("error","رمز صحیح نمیباشد");
        }
    }
    /**
     * Logout a member
     *
     * @return Redirect
     */
    public function Mlogout(){
        session()->flush();
        return redirect("signin");
    }
}
