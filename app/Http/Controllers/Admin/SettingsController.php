<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    public function update_profile(){
        return view('Admin.setting.update_profile');
    }

    public function update_profile_store(Request $request, $id){

        $pro_update = User::find($id);
            $pro_update['name'] = $request->name;
            $pro_update['email'] = $request->email;
            $pro_update['password'] = Hash::make($request['password']);
        $pro_update->save();

        return back();
    }


    public function reset_pass(){
        return view('Admin.setting.reset_pass');
    }
    public function change_password(Request $request){
        $this->validate($request,[
          'old_password'=>'required',
          'password'=>'required|confirmed',
        ]);

        $hashedpassword=Auth::user()->password;
          if (Hash::check($request->old_password,$hashedpassword)) {
              if(!Hash::check($request->password,$hashedpassword)){
                $user=User::find(Auth::id());
                $user->password=Hash::make($request->password);
                $user->save();


                Auth::logout();
                return redirect()->route('login');
                Session::flash('update','Customer Added Sucessfully...');
              }
              else {
                return redirect()->route('/');
              }
          }else {
            Session::flash('reset_password','Dont matched the password plz inter your valid password...');
            return redirect('/');
          }
      }


      public function logout(){
          Auth::logout();
          return redirect('/');
      }

}
