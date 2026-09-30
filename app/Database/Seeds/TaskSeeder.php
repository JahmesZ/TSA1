<?php

namespace App\Database\Seeds;

use App\Models\TaskModel;
use CodeIgniter\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run()
    {
        $day = static fn (int $offset): string => date('Y-m-d', strtotime("{$offset} days"));

        // Dates are relative to the day you seed, so "today" always has rows.
        $rows = [
            ['Submit weekly progress report',          'done',        $day(-1)],
            ['Back up the project database',           'done',        $day(-1)],
            ['Daily stand-up meeting (9:00 AM)',       'done',        $day(0)],
            ['Review pull requests from the team',     'in progress', $day(0)],
            ['Fix login page validation bug',          'pending',     $day(0)],
            ['Update project documentation',           'pending',     $day(0)],
            ['Prepare demo for client presentation',   'pending',     $day(1)],
            ['Design database schema for reports',     'pending',     $day(1)],
            ['Deploy version 1.2 to the staging server','pending',    $day(2)],
            ['Conduct user acceptance testing',        'pending',     $day(2)],
        ];

        $model = new TaskModel();
        foreach ($rows as [$title, $status, $date]) {
            $model->insert(['title' => $title, 'status' => $status, 'task_date' => $date]);
        }
    }
}
