<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardSettingController extends Controller
{
    public function edit($id)
    {
        User::find($id);
        return view('pages.dashboard.setting.dashboard-setting');
    }

    public function update(Request $request,$id)
    {

        $data = User::find($id);
        if($request->password){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|min:5|max:25|email:rfc,dns|unique:users,email,'.$id,
            'phone' => 'required|max:75',
            'title' => 'required',
            'description' => 'required',
            'current_password' => 'required',
            'password' =>'required|min:5|confirmed',
        ]);

        $request->merge([
            'password' => Hash::make($request->password)
        ]);

        }else{
            $request->validate([
                'name'=> 'required',
                'email'=> 'required|min:5|max:25|email:rfc,dns|unique:users,email,'. $id,
                'phone' => 'required|max:75',
                'title' => 'required',
                'description' => 'required',
            ]);
        }

        if ($request->password) {
            $data->update($request->all());
        }else{
            $data->update($request->except('password'));
        }

        return back();
    }
}
