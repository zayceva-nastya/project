<?php

namespace View\Html;

abstract class AbstractTag
{
    protected $class;
    protected $style;
    protected $id;

    public function setClass(string $class): self
    {
        $this->class = " class='$class'";
        return $this;
    }

    public function setStyle(string $style): self
    {
        $this->style = " style='$style'";
        return $this;
    }

    public function setId(string $id): self
    {
        $this->id = " id='$id'";
        return $this;
    }
}
