<?php

namespace App\Controllers;

use app\controllers\BaseController;

class Page extends BaseController

{
    public function index()
    {
        return view ("index");
    }
}
