<?php

namespace View\Html;

class Form extends AbstractTag
{
    protected $action = "";
    protected $method = "GET";
    protected $content = "";

    public function setAction(string $action): self
    {
        $this->action = $action;
        return $this;
    }


    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function addContent(string $content): self
    {
        $this->content .= $content;
        return $this;
    }

    public function setMethod($method): self
    {
        if (in_array($method, ["POST", "GET"])) {
            $this->method = $method;
        }
        return $this;
    }


    public function html(): string
    {
        return "<form action='$this->action' method='$this->method'$this->class$this->style>\n$this->content</form>";
    }
}
