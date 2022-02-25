<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return '<center>
        NIM : 204172004<br>
        Nama : Pranata Dito Fitriyansyah<br>
        No. Absen : 17</center>';
    }

    public function articles($id) {
        return 'Ini merupakan halaman artikel dengan ID '.$id;
    }
    
}
