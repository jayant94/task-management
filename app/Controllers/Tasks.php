<?php

namespace App\Controllers;

class Tasks extends System {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        return view('tasks/taskList');
    }

    public function create() {
        $data['users'] = $this->usersModel->where(['role'=>'user'])->findAll(); // Fetch all users
        return view('tasks/create', $data);
    }

    public function store() {

        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'priority' => $this->request->getPost('priority'),
            'start_date' => $this->request->getPost('start_date'),
            'due_date' => $this->request->getPost('due_date'),
            'assign_to' => $this->request->getPost('assign_to'),
            'status' => $this->request->getPost('status'),
        ];
        $rules = [
            'title' => 'required|min_length[3]|max_length[255]',
            'description' => 'required',
            'assign_to' => 'required|integer',
            'priority' => 'required|in_list[Low,Medium,High]',
            'start_date' => 'valid_date',
            'due_date' => 'valid_date',
            'status' => 'in_list[Pending,In Progress,Completed]',
        ];

        if ($this->validate($rules)) {
            $this->tasksModel->insert($data);
            return redirect()->to('dashboard');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }

    public function edit($id) {
        $data['task'] = $this->tasksModel->find($id);
        $data['users'] = $this->usersModel->where(['role'=>'user'])->findAll();
        $data['id'] = $id;
//         print_r($data); die;
        return view('tasks/edit', $data);
    }

    public function updateTask($taskId) {
        $rules = [
            'title' => 'required|min_length[3]|max_length[255]',
            'description' => 'required',
            'assign_to' => 'required|integer',
            'priority' => 'required|in_list[Low,Medium,High]',
            'start_date' => 'valid_date',
            'due_date' => 'valid_date',
            'status' => 'in_list[Pending,In-Progress,Completed]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'priority' => $this->request->getPost('priority'),
            'start_date' => $this->request->getPost('start_date'),
            'due_date' => $this->request->getPost('due_date'),
            'assign_to' => $this->request->getPost('assign_to'),
            'status' => $this->request->getPost('status'),
        ];
//        print_r($data); die;
        $this->tasksModel->update($taskId, $data);

        if ($this->tasksModel->affectedRows() > 0) {
            return redirect()->to('dashboard/tasks-edit/' . $taskId)->with('success', 'Task updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update task');
        }
    }

    public function remove($id) {
        $this->tasksModel->delete($id);
        return redirect()->to('/dashboard');
    }

    public function logout() {
        session()->destroy();
        header('Location: login');
        exit();
        if (!session()->has('user_id')) {
            header('Location: login');
            exit();
        }
    }

}
