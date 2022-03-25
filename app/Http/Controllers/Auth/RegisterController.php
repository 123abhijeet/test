<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use \App\Mail\SendMail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile' => ['required', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $unique_id = User::orderBy('id', 'desc')->first();
        $number = str_replace('MB', '', $unique_id ? $unique_id->id  : 0);
        if ($number == 0) {
            $number = 'MB001';
        } else {
            $number = "MB" . sprintf("%03d", (int)$number + 1);
        }
        $name = strtok($data['name'], " ");
        $username =  $name . $number;
        $password = $data['password'];
        $users = User::create([
            'is_admin' => '0',
            'name' => $data['name'],
            'username' => $username,
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'password' => Hash::make($data['password']),
        ]);
        $details = [
            'title' => 'welcome to myblood  '. $users->name ,
            'body' =>  'your username is '. $users->username . ' and password is ' . $password,
        ];
        \Mail::to($users->email)->send(new SendMail($details));
        return $users;
    }
}
