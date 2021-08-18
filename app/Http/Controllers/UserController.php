<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show()
    {
        $users = User::paginate(1);
        return view('form', ['users' => $users]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'phone_number' => 'required|unique:users|max:11|min:11',
            'stack' => 'required',
            'slack_email' => 'required|unique:users',
            'link_to_github_repo' => 'required|unique:users',
            'link_to_heroku' => 'required|unique:users',
            'years_of_experience' => 'required'
        ]);

        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'stack' => $request->stack,
            'slack_email' => $request->slack_email,
            'link_to_github_repo' => $request->link_to_github_repo,
            'link_to_heroku' => $request->link_to_heroku,
            'years_of_experience' => $request->years_of_experience,
        ]);

        return back()->with('success', 'Your request was succesfull!, find your details below.');
    }

    public function destroy(User $user)
        {
            $user->delete();
            return back();
        }
}
