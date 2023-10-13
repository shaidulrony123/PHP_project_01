<?php

namespace App\Traits;
 

trait HasAssigneeTrait
{
    protected $assignee = [];
    public function addAssignee($assignee)
    {
        $this->assignee[] = $assignee;
    }
    public function getAssignees()
    {
        return $this->assignee;
    }
}
