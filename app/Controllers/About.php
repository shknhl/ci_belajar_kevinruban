<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        return "ini adalah halaman about";
    }

    public function contact(string $data1 = null, int $data2 = null): string
    {
        if(isset($data1) && !isset ($data2)){
            return "ini adalah tampilan dari about tanpa parameter";
        }
        return "ini data yang ada paremeternya ".$data1." dan ".$data2;
    }
}
