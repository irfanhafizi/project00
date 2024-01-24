<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class FormController extends Controller
{
    public function index()
    {
        return view('form.form');
    }

    public function submit(Request $request)
    {
        // dd($request);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->gender = $request->gender;
        $user->birthday = $request->birthday;
        $user->is_active = $request->status ? $request->status : 0;
        $user->save();

        return view('form.form');
    }

    public function indexTable(){

        $users = User::where('is_active',1)->get();
        // dd($users);
        return view('form.table', ['users' => $users]);
    }

    public function delete($id)
    {
        User::find($id)->delete();

        $users = User::where('is_active',1)->get();
        return view('form.table', ['users' => $users]);
    }
}
