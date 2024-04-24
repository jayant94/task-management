<?php
namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('auth/index');
    }

    public function authenticate()
    {
        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

    $user = $userModel->where(['username'=> $username,'password'=> $password])
                          ->first();
   
        if ($user) {
            
            session()->set('user_id',$user);
            return redirect()->to('/dashboard');
        } else {
            
            return redirect()->to('/login')->with('error', 'Invalid username or password');
        }
    }
    public function register(){
        return view('auth/register');
    }
    public function store()
    {
        $userModel = new UserModel();
        $userData = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'email' => $this->request->getPost('email'),
            'role' =>'admin'
        ];

        $userModel->insert($userData);

        // Redirect to login page after successful registration
        return redirect()->to('/login')->with('success', 'Registration successful. Please login.');
    }
}
