<?php

namespace App\Classes;

use App\Classes\Task;
use App\Traits\HasAssigneeTrait;
use App\Interfaces\DueDateInterface;

use App\Interfaces\HasDueDateInterface;
use App\Interfaces\HasStartDateInterface;

class DadelineTask extends Task implements HasStartDateInterface, HasDueDateInterface
{
    use HasAssigneeTrait;
    protected $startDate;
    protected $dueDate;

    public function __construct($title, $description, $startDate, $dueDate)
    {
        parent::__construct($title, $description);
        $this->startDate = $startDate;
        $this->dueDate = $dueDate;
    }

    //Getter

    public function getStartDate()
    {
        return $this->startDate;
    }
    public function getDueDate()
    {
        return $this->dueDate;
    }

    public function getPriority()
    {
        return "Low";
    }
    public function markAsCompleted()
    {
        $this->complete = true;
    }
}
