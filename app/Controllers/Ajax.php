<?php

namespace App\Controllers;

class Ajax extends System {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
    }

    public function list() {

        $requestData = $this->request->getPost();
//        print_r($requestData['length']);die;
        $totalData = $this->tasksModel->countAll();
        if (!empty($requestData['search']['value'])) {
            $this->tasksModel->groupStart();
            foreach ($this->columns as $column) {
                $this->tasksModel->orLike($column, $requestData['search']['value']);
            }
            $this->tasksModel->groupEnd();
        }


        $totalFiltered = $this->tasksModel->countAllResults();

        if (!empty($requestData['order'])) {
//            $this->tasksModel->orderBy($this->columns[$requestData['order'][0]['column']], $requestData['order'][0]['dir']);
        }
        $this->tasksModel->orderBy('id', 'DESC');

        $this->tasksModel->limit((int) $requestData['length'], (int) $requestData['start']);
        $columns = 'tasks.*, users.username AS assigned_user';
        $tasks = $this->tasksModel->select($columns)->join('users', 'tasks.assign_to = users.id', 'left')->findAll();
//        $query = $this->tasksModel->getLastQuery();
//        echo $query; die;
        $response = [
            'draw' => intval($requestData['draw']),
            'recordsTotal' => intval($totalData),
            'recordsFiltered' => intval($totalFiltered),
            'data' => $tasks
        ];

        return $this->response->setJSON($response);
    }

}
