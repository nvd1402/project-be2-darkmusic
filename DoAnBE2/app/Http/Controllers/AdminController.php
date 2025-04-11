<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public $data =[];
    public function adminindex()
    {
        return view('admin.homeAdmin', $this->data);
    }
    public function addsong()
    {
        return view('admin.songs.add', $this->data);
    }
    public function listsong()
    {
        return view('admin.songs.list', $this->data);
    }
}
