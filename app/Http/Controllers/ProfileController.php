<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;
use Auth;

class ProfileController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $user_id = Auth::user()->id;
        $data['profile'] = $this->user->find($user_id);
        return view('profile/index', $data);
    }
    
    public function edit()
    {
        $user_id = Auth::user()->id;
        $data['profile'] = $this->user->find($user_id);
        return view('profile/edit', $data);
    }
    
    public function update(Request $request)
    {
        $user_id = Auth::user()->id;
        $profile = $this->user->find($user_id);
        
        $rules = array();
        $rules['name'] = 'required|min:3|max:50';
        $rules['email'] = 'required|email|unique:users,email,'.$profile->id;
        if ($request->input('password') != null) {
            $rules['password'] = 'min:8|confirmed';
        }
        $this->validate($request, $rules);
        
        $profile->name = $request->input('name');
        $profile->email = $request->input('email');
        if ($request->input('password') != null) {
            $profile->password = bcrypt($request->input('password'));
        }
        $profile->save();

        return redirect('profile');
    }
}
