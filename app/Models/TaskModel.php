<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'description', 'priority', 'start_date', 'due_date','assign_to','status','created_at', 'updated_at'];
}
