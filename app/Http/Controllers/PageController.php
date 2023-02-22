<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }

    public function about(){
        echo "Alfi Surya Pratama || 2141720075";
    }

    public function articles($id) {
        echo " Halaman Artikel Dengan ID ". $id;
    }
}
