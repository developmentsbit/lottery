<?php
namespace App\Traits;

trait ViewDirective {
    public function view($path, $blade, $params = [])
    {
        return view($this->path.'.'.$blade,compact($params));
    }
}
