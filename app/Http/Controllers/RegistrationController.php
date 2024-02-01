<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRules;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function RegistraionPage(){
        $data=DB::table('centers')->get();
        return view('pages.registraion-page',['data'=>$data]);
    }
    public function RegisterUser(RegistrationRules $request){
        $validated=$request->validated();
        
        if($validated){
            $name=$request->name;
            $email=$request->email;
            $phone=$request->phone;
            $nid=$request->nid;
            $center_id=$request->centers;
            $user=  User::where('email',$email)->first();
            
            if($user==null){
                DB::table('users')->insert([
                    'userName'=>$name,
                    'phone'=>$phone,
                    'email'=>$email,
                    'nid'=>$nid,
                    'center_id'=>$center_id
                ]);
                return redirect()->back()->with('success','registration successful');
            }
        } else{
            return redirect()->back()->with('error','invalid info');
        }
    }
}
