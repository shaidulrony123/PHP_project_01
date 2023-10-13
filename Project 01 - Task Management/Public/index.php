<?php

use App\Classes\DadelineTask;
use App\Classes\TaggedDadlineTask;

include 'autoloader.php';

$task1 = new TaggedDadlineTask( 'Task 1', 'Should be done today', '12-02-2022', '30-02-2023' );
$task1->addTag( 'Frontend' );
$task1->addTag( 'Contact Pages' );
$task1->addAssignee('Shaidul');
$task1->addAssignee('Rony');

$task2 = new DadelineTask( 'Task 2', 'Should be done nextday', '12-02-2022', '30-02-2022' );

$task2->addAssignee('Shaidul');
$tasks= [$task1, $task2];

foreach( $tasks as $task ) {
    echo "Title: " . $task->getTitle() . "\n";
    echo "Discription: " . $task->getDescription() . "\n";
    echo "Start Date: " . $task->getStartDate() . "\n";
    echo "Due Date: " . $task->getDueDate() . "\n";

    if ($task instanceof TaggedDadlineTask) {
        echo "Tags: " . implode(', ', $task->getTags()) . "\n";
    }
    echo "Assignee: " .implode(', ', $task->getAssignees()) . "\n";
    echo "priority: " .$task->getPriority() . "\n";
    echo "completed: " .($task->isComplete() ? 'Yes' : 'No') . "\n";
}