<?php

namespace App\Controllers;

class Event extends BaseController
{
    public function index()
    {
        $folder = "event";
        $file   = "test";
        $data = [
            'title'     => 'halaman test',
            'isi'       => ['satu','dua','tiga'],
            'folder'    => $folder,
            'file'      => $file
        ];
        return view("landing/$folder/$file", $data);
    }
}
