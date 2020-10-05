<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\User;

class UsersController extends Controller
{
    
    public function openAddNewUser()
    {
        try {
            
            return view('admin_panel.pages.addnewuser.addnewuser');
        }
        catch ( \Exception $e ) {
            Log::error ( " :: CATEGORY MANAGEMENT VIEW EXCEPTION :: ".$e->getMessage()."\n".$e->getTraceAsString() );
            abort(500);
        }
    }

    public function addNewUser(Request $request)
    {
        try {
            $name = $request->name;
            $email = $request->email;
            $password = $request->password;
            $strongPass = bcrypt($password);
            $confpassword = $request->confpassword;
            $role_id = 1;
            $user = new User();
            
            $user->name = $name;
            $user->email = $email;
            $user->password = $strongPass;
            $user->role_id = $role_id;
            $user->save();
            return dd("user created successfully");
        }
        catch ( \Exception $e ) {
            Log::error ( " :: EXCEPTION :: ".$e->getMessage()."\n".$e->getTraceAsString() );
            abort(500);
        }
    }

}
