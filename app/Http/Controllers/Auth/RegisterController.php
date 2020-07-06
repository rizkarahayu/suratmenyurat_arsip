<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

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
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected $redirectTo = '/kadep';

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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'is_admin' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'is_admin' => $data['is_admin'],
        ]);
    }

    // public function redirectTo()
    // {
    //     if (auth()->user()->is_admin =='kadep') {
    //         return '/kadep';
    //     }
    //     // else if (auth()->user()->is_admin =='sekretaris') {
    //     //     return '/sekretaris';
    //     // } 
    //     // elseif (auth()->user()->is_admin == 'pengadaan') {
    //     //     return '/jurubeli';
    //     // }
    //     // elseif (auth()->user()->is_admin == 'subkontraktor') {
    //     //     return '/subkontraktor';
    //     // }
    //     // elseif (auth()->user()->is_admin == 'kabiro') {
    //     //     return '/kabiro';
    //     // }
    //     // else {
    //     //     return '/home';
    //     // }
    // }

    // protected function redirectTo()
    // {
    //     return '/kadep'; // return dynamicaly generated URL.
    // }

    public function register(Request $request)
{
    $this->validator($request->all())->validate();

    event(new Registered($user = $this->create($request->all())));

    // $this->guard()->login($user);

    return $this->registered($request, $user)
                    ?: redirect($this->redirectPath());
}
}
