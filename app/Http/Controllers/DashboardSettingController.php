<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardSettingController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('pages.dashboard.setting.dashboard-list-user', compact('users'));
        
    }

    public function edit($id)
    {
        User::find($id);
        return view('pages.dashboard.setting.dashboard-setting');
    }

    public function update(Request $request,$id)
    {    
        $data = $request->all();
        $data['image'] = $request->file('image')->store('assets/user', 'public');
        $item = User::find($id);
        $item->update($data);

        return back();


    }

    public function updatePass(Request $request, $id)
    {
        $data = User::find($id);

        $request->merge([
            'password' => Hash::make($request->password)
        ]);

        $data->update($request->all());

        return back();
    }

}
