<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ViewDirective;

class FrontendController extends Controller
{
    use ViewDirective;
    protected $path;

    public function __construct()
    {
        $this->path = 'frontend.user';
    }

    public function about_us()
    {
        return $this->view($this->path,'about_us');
    }
}
