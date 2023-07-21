<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class LoginController extends Controller
{
    // function register(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'password' => 'Ada Kesalahan',
    //         'data' => $validator->errors()
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Ada Kesalahan',
    //             'data' => $validator->error()
    //         ]);
    //     }

    //     $input = $request->all();
    //     $input['password'] = bcrypt(($input['password']));
    //     $user = User::create($input);

    //     $success['token'] = $auth->createToken('auth_token')->plainTextToken;
    //     $success['name'] = $auth->name;

    //     return response()->json([
    //         'success' => true,
    //         'message' => 'login sukses',
    //         'data' => $success
    //     ]);
    // }


    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $auth = Auth::user();
            $success['token'] = $auth;
            $success['name'] = $auth->name;
            $success['email'] = $auth->email;

            return response()->json([
                'success' => true,
                'message' => 'login sukses',
                'data' => $success
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'cek email dan password lagi',
                'data' => null
            ]);
        }
    }
}
