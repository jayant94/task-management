<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class System extends BaseController
{
    /**
     * @Auther JAYANT
     */
    public $msg;
    protected $columns = ['title', 'description', 'priority', 'start_date', 'due_date'];
    protected $tasksModel;
    protected $userModel;

    function __construct()
    {

        if (!session()->has('user_id')) {
            header('Location: login');
            exit();
        }
        $this->model();
    }
    function model()
    {
        $this->usersModel = new UserModel();
        $this->tasksModel = new TaskModel();
    }
}