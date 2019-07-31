<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Hash;

class AuthController extends Controller
{
    public function login (Request $request) {
        $inputUsername = $request->username;
        $inputPassword = $request->password;
        $message = $userId = $name = $username = $email = '';
        $login = false;
        $status = 'failed';

        $user = User::where('username', $inputUsername)->first();

        if ($user == null) {
            $message = 'invalid username';
        } else {
            $check = HASH::check($inputPassword, $user->password);
            if ($check == false) {
                $message = 'invalid password';
                $login = false;
            } else {
                $status = 'success';
                $message = 'login success';
                $userId = $user->id;
                $name = $user->name;
                $username = $user->username;
                $email = $user->email;
                $login = true;
            }
        }

        return response()->json([
            'response' => [
                'login' => $login,
                'status' => $status,
                'message' => $message
            ],
            'userId' => $userId,
            'name' => $name,
            'username' => $username,
            'email' => $email
        ]);
    }
}
