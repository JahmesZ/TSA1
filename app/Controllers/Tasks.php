<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index(): string
    {
        return view('tasks', [
            'title' => 'All Tasks',
            'today' => date('Y-m-d'),
            'tasks' => (new TaskModel())->getAllByDate(),
        ]);
    }
}
