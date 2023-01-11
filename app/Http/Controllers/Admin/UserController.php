<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()

    {
        $users=User::whereNotIn('name',['admin'])->get();
        return view('admin.permissions.index',compact('users'));
    }    
    public function assign(Request $request,User $user)
    {
       // dd($request->all());
       
        $user->update([
            'has_permission'=>$request->has_permission
        ]);
        return back();
    }


}
