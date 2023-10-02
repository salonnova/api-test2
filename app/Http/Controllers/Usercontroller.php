<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_create;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Usercontroller extends Controller
{
   // 新規作成はセキュリティのため削除
      


   
   public function postsSignup(Request $request){

      $this->validate($request,[
         'name'=> 'required|string',
         'user_id' => 'required|unique:user_create',
         'password' => 'required|min:6|string'
      ]);

      // 登録処理
      $user = new user_create([
         'name'=> $request->input('name'),
         'user_id' =>$request->input('user_id'),
         'password' =>Hash::make($request->input('password')),
         
         // ハッシュ化
         
      ]);
      
    
      $user->save();

      return redirect()->route('word.profile');
   }
    public function getProfile()
    {
        return view('word.profile');
    }

    public function get_login()
    {
        return view('word.index');
    }
   
   public function login_view()
   {
      return view('word.login');
   }

   public function get_logout(){
      Auth::logout();
      return redirect()->route('word.login');
   }

   public function login(Request $request)
    {
    $this->validate($request,[
    
    'user_id' => 'required',
    
    'password' => 'required|min:6'
    ]);
    
    if(Auth::attempt([
    
    'user_id' => $request->input('user_id'),
    'password'=> $request->input('password'),
    ])){
    return redirect()->route('word.index');
    } 
    return redirect()->back();
    }

   
} 