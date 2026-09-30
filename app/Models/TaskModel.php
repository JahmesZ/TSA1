<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table         = 'tasks';
    protected $primaryKey    = 'id';
    protected $returnType    = 'array';
    protected $allowedFields = ['title', 'status', 'task_date'];

    // The table only has created_at, so updated_at is switched off.
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $dateFormat    = 'datetime';

    /** Welcome page: only the tasks whose task_date is today. */
    public function getToday(): array
    {
        return $this->where('task_date', date('Y-m-d'))
                    ->orderBy('id', 'ASC')
                    ->findAll();
    }

    /** Task List page: every task, ordered by date (then by id). */
    public function getAllByDate(): array
    {
        return $this->orderBy('task_date', 'ASC')
                    ->orderBy('id', 'ASC')
                    ->findAll();
    }
}
