<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\User;
class UserController extends Controller
{
    protected $limit = 5;
    public function index()
    {
        $serial = 1;
        $users = User::orderBy('id', 'desc')->paginate($this->limit);
        return view('admin.pages.users.alluser',compact('users','serial'));
    }
    
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view("admin.pages.users.edit", compact('user'));
    }
        
    public function update(Request $request,$id)
    {
        $user = User::findOrFail($id);
        
        $role = $request->role;
        $active = $request->active;
        // return $active;
        
        if($role == 'admin'){
            $user->update(['role'=>'admin']);
        }else{
            $user->update(['role'=>'user']);
        }
        
        if($active == 1){
            $user->update(['active'=>1]);
        }else{
            $user->update(['active'=>0]);
        }
        
        return back()->withSuccess('Use Information is update Successfully!.');
    }
    
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success', 'User has been delete from the database!');
    }
}
