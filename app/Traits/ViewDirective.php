<?php
namespace App\Traits;

trait ViewDirective {
    public function view($path, $blade, $params = [])
    {
        return view($path.'.'.$blade,compact('params'));
    }
}
