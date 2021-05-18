<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    //
    public function show(User $user)
    {

        return view('profiles.show',[
            'user' => $user,
            'questions'=> $user->questions()->paginate(5)
        ]);
        return view('profiles.show',compact('user'));
    }
    public function edit(User $user)
    {
        // $this->authorize('edit',$user);
        // if($user->isNot(current_user())){
        //     return view('profiles.show',compact('user'));
        // }
        // abort_if($user->isNot(current_user(),404);
        return view('profiles.edit',compact('user'));
    }
    public function update(User $user)
    {
        $attributes=request()->validate( [
            'username' => ['required', 'string', 'max:255',Rule::unique('users')->ignore($user),'alpha_dash'],
            'name' => ['required', 'string', 'max:255'],
            'avatar' => [ 'file'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if(request('avatar')){
            $attributes['avatar'] =request('avatar')->store('avatars');

        }
        $user->update($attributes);
        return redirect($user->path());
    }
}
