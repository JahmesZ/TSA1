<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Home extends BaseController
{
    public function index(): string
    {
        $tasks = (new TaskModel())->getToday();

        return view('welcome', [
            'title' => 'Tasks for Today',
            'today' => date('l, F j, Y'),
            'tasks' => $tasks,
        ]);
    }
}
