<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Redis;
use Validator;

class ApiController extends Controller
{
   public function register(Request $request){ 

        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            // 'c_password'=>'required|same:password'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(),202);
        }
        $input = $request->all();

        $input['password'] = bcrypt($input['password']);

        $user = User::create($input);

        $responseArray = [];
        $responseArray['token'] = $user->createToken('DBT')->accessToken;
        $responseArray['name'] = $user->name;
        
        return response()->json($responseArray,200);  
    }

    /// login //////

    public function login(Request $request){ 
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            $user = Auth::user();
            $responseArray = [];
            $responseArray['token'] = $user->createToken('DBT')->accessToken;
            $responseArray['name'] = $user->name;
            
            return response()->json($responseArray,200);

        }else{
            return response()->json(['error'=>'Unauthenticated'],203);
        }
    }
    
    public function getUserList(){
        $data =  User::get();
        $responseArray = [
            'status'=>'success',
            'data'=>$data
        ]; 
        return response()->json($responseArray,200);
    }

    public function getUserById($id){
        $data =  User::find($id);
        if($data ==null){
            $data = 'Data Not Found';
        }
        $responseArray = [
            'status'=>'ok',
            'data'=>$data
        ]; 
        return response()->json($responseArray,200);
    }
}
