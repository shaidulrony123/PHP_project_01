<?php

namespace App\Traits;

trait HasTagsTraits
{
    protected $tags = [];
    public function addTag($tag)
    {
        $this->tags[] = $tag;
    }

    public function getTags(){
        return $this->tags;
    }
}
