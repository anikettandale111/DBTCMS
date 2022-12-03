<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Exception;

class UserAuthenticationController extends Controller
{
     public function __construct(){
        //  $this->middleware('auth');
     }
    public function index(Request $request){
        return view('dashboards.dashboard');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            // 'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $checkDuplicate = User::where(['name' => $request->name, 'email' => $request->email])->get();
        if (count($checkDuplicate)) {
            return response(['success' => true, 'message' => 'User already exits in system.']);
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return response()->json(['success' => true, 'data' => $user]);
    }


    public function login(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($request->all(), [
            'password' => 'required',
            'username' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $fieldType = (is_numeric($request->username)) ? 'mobile_no' : 'email' ;
        if(Auth::attempt(array($fieldType => $request->username, 'password' => $request->password))){
            $user = Auth::user();
            $token = $user->createToken($user->email . '-' . now());
            return response()->json([
                'msg' => 'login  succesfully.',
                'data' => $user,
                'token' => $token->accessToken,
            ]);
        } else {
            return response()->json([
                'password' => 'The password you entered is incorrect..',
           ]);
        }
    }


    public function user_register(Request $request) {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $checkDuplicate = User::where(['email' => $request->email])->get();
        if (count($checkDuplicate)) {
            return response(['success' => true, 'message' => 'User already exits in system.']);
        }
        $checkDuplicate = User::where(['mobile_no' => $request->mobile_no])->get();
        if (count($checkDuplicate)) {
            return response(['success' => true, 'message' => 'Contact no already exits in system.']);
        }
        // $user=User::select("CONCAT('user.name','user.middle_name','user.last_name') AS full_name")->get();


        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        // $user->middle_name = $request->middle_name;
        // $user->last_name = $request->last_name;
        $user->address = $request->address;
        $user->mobile_no = $request->mobile_no;
        $user->user_type =6;
        // $user->vendor_id=Auth::id();
        $user->isactive=Auth::id();
        $user->save();

        return response()->json(['msg' => 'User  Regitration  succesfully', 'status' => true, 'data' => $user]);
    }



    public function profile_update(Request $request) {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            // 'password' => 'required',
            'address' => 'required',
            // 'mobile_no' => 'required|min:12|numeric',
            'mobile_no' => 'required',
          ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $arr['name'] = $request->name;
        // $arr['middle_name'] = $request->middle_name;
        if (isset($request['password']) && $request['password'] !== '') {
            $arr['password'] = Hash::make($request['password']);
        }
        // $arr['last_name'] = $request->last_name;
        $arr['address'] = $request->address;
        $arr['mobile_no'] = $request->mobile_no;

        User::where('id',Auth::id())->update($arr);

        return json_encode(['status' => True, 'msg' => 'Profile Update succesfully.', 'data' => $arr]);

    }

    public function logout(Request $request) {
        if (Auth::check()) {
            Auth::user()->AauthAcessToken()->delete();
        }
        return response()->json(['status' => True, 'msg' => 'Logout succesfully']);
    }

    public function reset_password(Request $request) {

        try
        {
           User::where('id',Auth::id())->update(['password'=>Hash::make($request->newpassword)]);

            return response()->json(['status'=>True,'msg'=>'Password Updated Succesfully']);
        }
        catch(Exception $e)
        {
            return response()->json(['status'=>False,'msg'=>$e->getMessage()]);
        }
    }


    public function forgot_password(Request $request) {
     try {
            $query = User::where(['otp' => $request->otp, 'email' => $request->email, 'isactive' => 1])->get();

            if (count($query) > 0) {
                User::where(['otp' => $request->otp, 'email' => $request->email, 'isactive' => 1])->update(['password' => Hash::make($request->password)]);

                return response()->json(['status' => True, 'msg' => 'Password Updated Succesfully']);
            } else {
                return response()->json(['status' => False, 'msg' => 'Wrong email or OTP']);
            }
        } catch (Exception $e) {
            return response()->json(['status' => False, 'msg' => $e->getMessage()]);
        }
    }


    public function get_otp(Request $request) {
        try {
            $query = User::select('users.*')

          ->where(['email' => $request->email, 'isactive' => 1])->get();

            if (count($query) > 0) {
                $otp = rand(10, 10000);
                User::where(['email' => $request->email, 'isactive' => 1])->update(['otp' => $otp]);
                return response()->json(['status' => True, 'otp' => $otp]);
            } else {
                return response()->json(['status' => False, 'msg' => 'Wrong email or OTP', 'data' => $query]);
            }
        } catch (Exception $e) {
            return response()->json(['status' => False, 'msg' => $e->getMessage()]);
        }
    }

}
