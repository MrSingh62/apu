<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\register;

class apucontroller extends Controller
{
    public function registeruser(Request $res){
        $user=$res->input('username');
        $pwd=$res->input('pwd');
        $email=$res->input('e1');
        $age=$res->input('a1');
        $this->validate($res,["username"=>'required'],['username.required'=>"Please Enter Your Name"]);
        $this->Validate($res,["e1"=>'required | Email'], ['e1.required'=>"Please Enter your Email",'email'=>"Note a valid Email Address"] );
        
        $obj=new register();
        $obj->username=$user;
        $obj->email=$email;
        $obj->age=$age;
        $obj->password=$pwd;

        $obj->save();
        return redirect('login')->with('status',"User Registered Please Login");
    }

    public function loginuser(Request $res)
    {
        $getuser= new register();
        $obj=$getuser->all();
        
        $user=$res->input('username');
        $pwd=$res->input('pwd');
        foreach($obj as $obj1)
        {
            $user1=$obj1['username'];
            $pwd1=$obj1['password'];
            if($user == $user1 && $pwd == $pwd1)
            {
                return redirect('welcome');
            }
            else{
            return redirect('register')->with('status',"please register first");
            }
        }
    }

}
