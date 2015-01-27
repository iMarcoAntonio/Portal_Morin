<?php

class AuthController extends BaseController {
 

    public function showLogin()
    {
        // Verificamos si hay sesión activa
        if (Auth::check())
        {
            // Si tenemos sesión activa mostrará la página de inicio
            return Redirect::to('index');
        }
        // Si no hay sesión activa mostramos el formulario
        return View::make('users.login');
    }

    public function doLogin()
    {
        $username = mb_strtolower(trim(Input::get('username')));
        $password = Input::get('password');
 
        if (Auth::attempt(['username' => $username, 'password' => $password]))
        {
            return Redirect::to('/index');
        }
 
        return Redirect::back()->with('msg', 'Datos incorrectos, vuelve a intentarlo.');
    }
 
    public function doLogout()
    {
        Auth::logout();
 
        return Redirect::to('/')->with('msg', 'Gracias por visitarnos!.');
    }
 
}