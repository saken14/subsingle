<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm() {
        return view("auth.login");
    }

    public function showRegisterForm() {
        return view("auth.register");
    }

    public function logout() {
        auth('web')->logout();

        return redirect(route('home'));
    }

    public function register_process(Request $request) {
        $data = $request->validate([
            'email' => ['required', 'email', 'string', 'unique:users,email'], //'unique:users,email'=>здесь ищем имейл в табице users в калонке email
            'password' => ['required', 'confirmed'],
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'bdate' => ['required'],
            'phone_num' => ['regex:/\+7\s?[\(]{0,1}7[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}/', 'max:17', 'unique:users,phone_num'],
            'u_gender' => ['required']
        ]/*,
        [
            'email.required' => 'Поле email обязательно для заполнения.',
            'password.required' => 'Поле пароль обязательно для заполнения.',
            'fname.required' => 'Поле имя обязательно для заполнения.',
            'lname.required' => 'Поле фамилия обязательно для заполнения.',
            'bdate.required' => 'Поле дата рождения обязательно для заполнения.',
            'phone_num.required' => 'Поле номер телефона обязательно для заполнения.',
            'u_gender.required' => 'Поле пол обязательно для заполнения.',
        ]*/);

        $user = User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'bdate' => $data['bdate'],
            'phone_num' => $data['phone_num'],
            'u_gender' => $data['u_gender'],
        ]);

        if($user) {
            auth('web')->login($user);
        }

        return redirect(route('home'));
    }

    public function login_process(Request $request) {
        $data = $request->validate([
            'email' => ['required', 'email', 'string'], //'unique:users,email'=>здесь ищем имейл в табице users в калонке email
            'password' => ['required']
        ]);

        if(auth('web')->attempt($data)) {
            return redirect(route('home'));
        }

        return redirect(route('login'))->withErrors(['email' => 'Пользователь не найден, либо данные введены не правильно']);
    }
}
