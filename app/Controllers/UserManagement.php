<?php

namespace App\Controllers;

class UserManagement extends System {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['users'] = $this->usersModel->where(['role'=>'user'])->findAll();
        return view('user/index', $data);
    }
    public function list(){
        $data['users'] = $this->usersModel->where(['role'=>'user'])->findAll();
        return view('user/list', $data);
    }
    public function add() {
//        helper(['form', 'url']);
        $data = [];
        $validationRules = [
            'username' => 'required|min_length[5]|max_length[255]|is_unique[users.username]',
            'password' => 'required|min_length[8]',
            'email' => 'required|valid_email|is_unique[users.email]',
        ];
//        echo $this->request->getMethod() ; die;
        if ($this->request->getMethod() == 'POST') {

            if ($this->validate($validationRules)) {
//                print_r($this->request->getPost('username')); die;
                $this->usersModel->save([
                    'username' => $this->request->getPost('username'),
                    'password' => $this->request->getPost('password'),
                    'email' => $this->request->getPost('email'),
                    'role' => 'user'
                ]);

                return redirect()->to(site_url('dashboard/user/index'));
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('user/index', $data);
    }

    public function edit($id) {
        $data = [];

        // Fetch user record
        $user = $this->usersModel->find($id);

        if ($this->request->getMethod() == 'post') {
            // Validation rules
            $validationRules = [
                'username' => 'required|min_length[5]|max_length[255]',
                'email' => 'required|valid_email',
                'role' => 'required'
            ];

            // Validate input
            if ($this->validate($validationRules)) {
                // Save updated user to database
                $this->usersModel->update($id, [
                    'username' => $this->request->getVar('username'),
                    'email' => $this->request->getVar('email'),
                    'role' => $this->request->getVar('role')
                ]);

                // Redirect to user list
                return redirect()->to(site_url('dashboard/user/index'));
            } else {
                // Return validation errors to the view
                $data['validation'] = $this->validator;
            }
        }

        // Pass user data to the view
        $data['user'] = $user;

        // Load the view
        return view('user/edit', $data);
    }

    public function remove($id) {
        // Delete user from database
        $this->usersModel->delete($id);

        // Redirect to user list
        return redirect()->to(site_url('dashboard/user/index'));
    }

}
