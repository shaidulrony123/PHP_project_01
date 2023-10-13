<?php
namespace App\Classes;

use App\Classes\DadelineTask;
use App\Traits\HasTagsTraits;
use App\Traits\HasAssigneeTrait;

class TaggedDadlineTask extends DadelineTask
{
   use HasTagsTraits, HasAssigneeTrait;
}