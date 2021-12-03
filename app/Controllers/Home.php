<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    
    public function template()
    {
        $folder = "event";
        $file   = "test";
        $data   = [
                'title' => 'halaman test',
                'isi'   => ['satu','dua','tiga'],
                'folder'=> $folder,
                'file'  => $file
        ];
        return view("landing/$folder/$file", $data);
    }
}
