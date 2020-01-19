<?php

namespace App\Http\Controllers\Subscriber\Auth;

use App\Models\Subscriber;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

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

    protected $redirectTo = '/subscriber/home';


    public function __construct()
    {
        $this->middleware('subscriber.guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:subscribers',
            'password' => 'required|min:6',
            'address' => 'min:3',
        ]);
    }


    protected function create(array $data)
    {
        $subscriber = new Subscriber;
        $subscriber->name = $data['name'];
        $subscriber->email = $data['email'];
        $subscriber->password =  bcrypt($data['password']);
        $subscriber->mobile = $data['mobile'];
        $subscriber->address = $data['address'];
        $subscriber->save();
        echo 'Registered Successfully. <a href="' . url('subscriber/login') . '">login now</a>';
        exit;
    }

    public function showRegistrationForm()
    {
        return view('subscriber.auth.register');
    }


    protected function guard()
    {
        return Auth::guard('subscriber');
    }
}